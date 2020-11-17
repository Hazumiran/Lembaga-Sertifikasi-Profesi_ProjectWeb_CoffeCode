<?php

namespace App\Controllers;

use Codeigniter\Controller;
use App\Models\UsersModel;
use App\Models\AuthModel;
use phpDocumentor\Reflection\Types\Null_;

class Auth extends BaseController
{



    public function v_login()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('yazpage/home', $data);
    }

    public function v_register()
    {
        $data = [
            'title' => 'Register',
            'validate' => \Config\Services::validation()
        ];
        return view('yazpage/index', $data);
    }

    public function register()
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
            return redirect()->to('/registrasi')->withInput()->with('validate', $validasi);
        }


        $data = array(

            'Nama_Users'         => $this->request->getPost('Nama_Users'),
            'Alamat'             => $this->request->getPost('Alamat'),
            'Telp'               => $this->request->getPost('Telp'),
            'Email'              => $this->request->getPost('Email'),
            'Username'           => $this->request->getPost('Username'),
            'Password'           => password_hash($this->request->getPost('Password'), PASSWORD_DEFAULT),
            'Level'              => $this->request->getPost('Level')
        );

        $model = new UsersModel();
        $model->insert($data);
        session()->setFlashdata('success', 'Anda berhasil registrasi akun !!!');
        return redirect()->to('/login');
    }

    public function login()
    {

        $model = new AuthModel;
        $table = 'users';
        $Email = $this->request->getPost('Email');
        $Password = $this->request->getPost('Password');
        $row      = $model->get_data_login($Email, $table);
        if ($row == Null) {
            session()->setFlashdata('warning', 'Email atau Password salah !!!');
            return redirect()->to('/login');
        }
        if (password_verify($Password, $row->Password)) {
            $data = array(
                'Level'              => $row->Level,
                'login'              => TRUE,
                'Nama_Users'         => $row->Nama_Users,
                'Email'              => $row->Email,

            );
            session()->set($data);
            session()->setFlashdata('success', 'Berhasil login !!!');

            if ($row->Level == 'admin') {
                return redirect()->to('/admin');
            } elseif ($row->Level == 'pelanggan') {
                return redirect()->to('/home');
            }
        }

        session()->setFlashdata('warning', 'Email atau Password salah !!!');
        return redirect()->to('/login');
    }

    public function logout()
    {
        session()->remove('Email');
        session()->remove('login');
        session()->remove('Password');
        session()->setFlashdata('success', 'Anda berhasil logout !!!');
        return redirect()->to('/login');
    }
}
