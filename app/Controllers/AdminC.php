<?php

namespace App\Controllers;

use \App\Models\Adminmodel;
use App\Models\Modelbelanja;

class AdminC extends BaseController
{


    protected $adminledom;
    public function __construct()
    {
        $this->Modelbelanja = new Modelbelanja();
        $this->adminledom = new Adminmodel();
        helper('number');
        helper('form');
    }

    public function cek()
    {
        $cart = \Config\Services::cart();
        $response = $cart->contents();
        $data = json_encode($response);
        echo '<pre>';
        print_r($data);
        echo '</ pre>';
    }

    public function add()
    {
        $cart = \Config\Services::cart();
        $cart->insert(array(
            'id'      => $this->request->getPost('id'),
            'qty'     => 1,
            'price'   => $this->request->getPost('price'),
            'name'    => $this->request->getPost('name'),

        ));
        session()->setFlashdata('pesan', 'Berhasil masuk keranjang !!');


        return redirect()->to(base_url('/home'));
    }

    public function clear()
    {
        $cart = \Config\Services::cart();
        $cart->destroy();

        return redirect()->to(base_url('/home'));
    }

    public function index()
    {
        $data = [
            'title' => 'AdminDashboard',
            'belanja' => $this->Modelbelanja->getBelanja(),
            'cart' => \Config\Services::cart()

        ];

        if (session()->get('Level') == 'admin') {
            return view('/yazpage/admin/admin', $data);
        } else {
            return view('yazpage/home', $data);
        }
    }



    public function users()
    {
        $currentPage = $this->request->getVar('pasien_pagination') ? $this->request->getVar('pasien_Pagination') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $users = $this->adminledom->search($keyword);
        } else {
            $users = $this->adminledom;
        }

        $data = [

            // 'users' => $this->adminledom->getusers()
            'users' => $users->paginate(4, 'users'),
            'pager' => $this->adminledom->pager,
            'currentPage' => $currentPage
        ];

        if (session()->get('Level') == 'admin') {
            return view('yazpage/admin/users/usershome', $data);
        } else {
            return redirect()->to('/home');
        }

        return view('yazpage/admin/users/usershome', $data);
    }




    public function delete($id)
    {
        // Memanggil function delete_users() dengan parameter $id di dalam usersModel dan menampungnya di variabel hapus
        $hapus = $this->adminledom->delete_users($id);

        // Jika berhasil melakukan hapus
        if ($hapus) {
            // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Deleted users successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('AdminC/users'));
        }
    }
    // method detail ke v_detail
    public function detail($id)
    {
        $data = [
            'title' => 'Detail users',
            'methodName' => '/AdminC/users',
            'users' => $this->adminledom->getUsers($id)
        ];

        // jika request tidak ada di databse
        if (empty($data['users'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Id_Users ' . $id . ' tidak di temukan.');
        }

        return view('yazpage/admin/users/detailusers', $data);
    }



    public function proses()
    {
        //validasi
        if (!$this->validate([
            'Nama_Users' => [
                'rules'  => 'required|Is_unique[users.Nama_Users] alpha_space',
                'errors' => [
                    'required'    => 'Nama harus di isi !!!',
                    'alpha_space' => 'Inputan tidak boleh berupa angka !!!'
                ]
            ],
            'Alamat' => [
                'rules'  => 'required|Is_unique[users.Alamat]',
                'errors' => [
                    'required'    => 'Alamat harus di isi !!!',
                    'Is_unique'   => 'Alamat anda sudah terdaftar !!!',
                ]
            ],
            'Telp' => [
                'rules'  => 'required|Is_unique[users.Telp]',
                'errors' => [
                    'required'    => 'No Telepon harus di isi !!!',
                    'Is_unique'   => 'No Telepon anda sudah terdaftar !!!',
                ]
            ],
            'Email' => [
                'rules'  => 'required|Is_unique[users.Email]',
                'errors' => [
                    'required' => 'Email harus di isi !!!'
                ]
            ],
            'Username' => [
                'rules'  => 'required|Is_unique[users.Username]',
                'errors' => [
                    'required'    => 'Username harus di isi !!!',
                    'Is_unique'   => 'Username anda sudah terdaftar !!!',
                ]
            ],
            'Password' => [
                'rules'  => 'required|Is_unique[users.Password]|min_length[8]',
                'errors' => [
                    'required'    => 'Password harus di isi !!!',
                    'Is_unique'   => 'Password sudah terdaftar i user lain !!!',
                    'min_length'  => 'Inputan Password minimal 8 !!!'
                ]
            ],


        ])) {
            $validasi = \Config\Services::validation();
            return redirect()->to('/AdminC/createusers')->withInput()->with('validate', $validasi);
        }

        $data = array(
            'Nama_Users'     => $this->request->getPost('Nama_Users'),
            'Alamat'             => $this->request->getPost('Alamat'),
            'Telp'               => $this->request->getPost('Telp'),
            'Email'              => $this->request->getPost('Email'),
            'Username'           => $this->request->getPost('Username'),
            'Password'           => password_hash($this->request->getPost('Password'), PASSWORD_DEFAULT),
            'Level'               => $this->request->getPost('Level'),

        );

        $model = new Adminmodel();
        $model->insert($data);
        session()->setFlashdata('success', 'Anda berhasil registrasi akun !!!');
        return redirect()->to('/AdminC/users');
        /* 
    Membuat variabel simpan yang isinya merupakan memanggil function 
    (insert_Usersdari model) dan membawa parameter data 
    */
        $safee = $this->adminledom->insert_users($data);
        // Jika simpan berhasil, maka ...
        if ($safee) {
            // Deklarasikan session flashdata dengan tipe success
            session()->setFlashdata('success', 'Created users successfully');
            // Redirect halaman ke pasien
            return redirect()->to(base_url('AdminC/users'));
        }
    }
    public function create()
    {
        return view('yazpage/admin/users/createusers');
    }
    public function update($id)
    {

        // Memanggil function getPasien($id) dengan parameter $id di dalam PasienModel dan menampungnya di variabel array pasien
        // $data['pasien'] = $this->poliklinik ->getPasien($id);
        // $data = ['title' => 'Create Pasien'];
        $data = [
            'users' => $this->adminledom->getUsers($id)
        ];
        // Mengirim data ke dalam view
        return view('yazpage/admin/users/editusers', $data);
    }
    public function proses_update($id)
    { // Mengambil value dari form dengan method POST

        $Nama_Users      = $this->request->getPost('Nama_Users');
        $Alamat          = $this->request->getPost('Alamat');
        $Telp            = $this->request->getPost('Telp');
        $Email           = $this->request->getPost('Email');
        $Username        = $this->request->getPost('Username');
        $Password        = $this->request->getPost('Password');
        $Level           = $this->request->getPost('Level');


        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [

            'Nama_Users'    => $Nama_Users,
            'Alamat'        => $Alamat,
            'Telp'          => $Telp,
            'Email'         => $Email,
            'Username'      => $Username,
            'Password'      => password_hash($this->request->getPost($Password), PASSWORD_DEFAULT),
            'Level'         => $Level

        ];

        /* 
    Membuat variabel ubah yang isinya merupakan memanggil function 
    update_pasien dan membawa parameter data beserta id
    */
        $ubah = $this->adminledom->update_users($data, $id);

        // Jika berhasil melakukan ubah
        if ($ubah) {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('info', 'Updated Users successfully');
            // Redirect ke halaman poliklinik
            return redirect()->to(base_url('/AdminC/users'));
        }
        //--------------------------------------------------------------------

    }


    //--------------------------------------------------------------------

}
