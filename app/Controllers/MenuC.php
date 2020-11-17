<?php

namespace App\Controllers;

use \App\Models\Menumodel;

class MenuC extends BaseController
{


    protected $menuledom;
    public function __construct()
    {

        $this->menuledom = new Menumodel();
    }





    public function menu()
    {
        $currentPage = $this->request->getVar('pasien_pagination') ? $this->request->getVar('pasien_Pagination') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $menu = $this->menuledom->search($keyword);
        } else {
            $menu = $this->menuledom;
        }

        $data = [
            // 'menu' => $this->menuledom->getmenu()
            'menu' => $menu->paginate(4, 'menu'),
            'pager' => $this->menuledom->pager,
            'currentPage' => $currentPage
        ];

        return view('yazpage/admin/menu/menuhome', $data);
    }




    public function delete($id)
    {
        // Memanggil function delete_menu() dengan parameter $id di dalam menuModel dan menampungnya di variabel hapus
        $hapus = $this->menuledom->delete_menu($id);

        // Jika berhasil melakukan hapus
        if ($hapus) {
            // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Deleted menu successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('MenuC/menu'));
        }
    }
    // method detail ke v_detail
    public function detail($id)
    {
        $data = [
            'title' => 'Detail menu',
            'methodName' => '/MenuC/menu',
            'menu' => $this->menuledom->getMenu($id)
        ];

        // jika request tidak ada di databse
        if (empty($data['menu'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Id_Menu ' . $id . ' tidak di temukan.');
        }

        return view('yazpage/admin/menu/detailmenu', $data);
    }



    public function proses()
    {
        //validasi
        if (!$this->validate([
            'Menu' => [
                'rules'  => 'required|Is_unique[menu.Menu] alpha_space',
                'errors' => [
                    'required'    => 'Menu harus di isi !!!',
                    'Is_unique'   => 'Menu anda sudah terdaftar !!!',
                    'alpha_space' => 'Inputan tidak boleh berupa angka !!!'
                ]
            ],
            'Kategori' => [
                'rules'  => 'required|Is_unique[menu.Kategori]',
                'errors' => [
                    'required'    => 'Kategori harus di isi !!!',
                    'Is_unique'   => 'Kategori anda sudah terdaftar !!!',
                ]
            ],
            'Harga' => [
                'rules'  => 'required|Is_unique[menu.Harga]',
                'errors' => [
                    'required'    => 'Harga harus di isi !!!',

                ]
            ]


        ])) {
            $validasi = \Config\Services::validation();
            return redirect()->to('/MenuC/createmenu')->withInput()->with('validate', $validasi);
        }

        $data = array(
            'Menu'     => $this->request->getPost('Menu'),
            'Kategori'             => $this->request->getPost('Kategori'),
            'Harga'               => $this->request->getPost('Harga'),

        );

        $model = new Menumodel();
        $model->insert($data);
        session()->setFlashdata('success', 'Anda berhasil registrasi akun !!!');
        return redirect()->to('/MenuC/menu');
        /* 
    Membuat variabel simpan yang isinya merupakan memanggil function 
    (insert_menudari model) dan membawa parameter data 
    */
        $safee = $this->menuledom->insert_menu($data);
        // Jika simpan berhasil, maka ...
        if ($safee) {
            // Deklarasikan session flashdata dengan tipe success
            session()->setFlashdata('success', 'Created menu successfully');
            // Redirect halaman ke pasien
            return redirect()->to(base_url('MenuC/menu'));
        }
    }
    public function create()
    {
        return view('yazpage/admin/menu/createmenu');
    }
    public function update($id)
    {

        // Memanggil function getPasien($id) dengan parameter $id di dalam PasienModel dan menampungnya di variabel array pasien
        // $data['pasien'] = $this->poliklinik ->getPasien($id);
        // $data = ['title' => 'Create Pasien'];
        $data = [
            'menu' => $this->menuledom->getMenu($id)
        ];
        // Mengirim data ke dalam view
        return view('yazpage/admin/menu/editmenu', $data);
    }
    public function proses_update($id)
    { // Mengambil value dari form dengan method POST

        $Menu      = $this->request->getPost('Menu');
        $Kategori          = $this->request->getPost('Kategori');
        $Harga            = $this->request->getPost('Harga');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [

            'Menu'    => $Menu,
            'Kategori'        => $Kategori,
            'Harga'          => $Harga


        ];

        /* 
    Membuat variabel ubah yang isinya merupakan memanggil function 
    update_pasien dan membawa parameter data beserta id
    */
        $ubah = $this->menuledom->update_menu($data, $id);

        // Jika berhasil melakukan ubah
        if ($ubah) {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('info', 'Updated menu successfully');
            // Redirect ke halaman poliklinik
            return redirect()->to(base_url('/MenuC/menu'));
        }
        //--------------------------------------------------------------------

    }


    //--------------------------------------------------------------------

}
