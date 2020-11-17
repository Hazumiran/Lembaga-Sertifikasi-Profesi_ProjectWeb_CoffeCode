<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\Modelbelanja;
use App\Controllers\BaseController;

class Home extends BaseController
{
	public function index()
	{
		return view('yazpage/index');
	}

	public function __construct()
	{
		$this->Modelbelanja = new Modelbelanja();
	}

	public function home()
	{


		$data = [
			'title' => 'UsersDashboard',
			'belanja' => $this->Modelbelanja->getBelanja()
		];

		if (session()->get('Level') == 'admin') {
			return view('yazpage/admin/admin', $data);
		} else {
			return redirect()->to('/home');
		}
	}

	public function register()
	{
		return view('yazpage/register');
	}
	public function users()
	{
		return view('yazpage/admin/users/usershome');
	}
	public function login()
	{
		if ($this->request->getMethod() == 'post') {
			$Email = $this->request->getPost('Email');
			$Password = $this->request->getPost('Password');
			$Level = $this->request->getPost('Level');

			$model = new UsersModel();
			$Nama_Pelanggan = $model->where(['Email' => $Email, 'Password' => $Password, 'Level' => $Level])->first();

			print_r($Nama_Pelanggan);
			$this->setSession($Nama_Pelanggan);
		}
		return view('yazpage/login');
	}
	public function setSession($Nama_Pelanggan)
	{
		$data = [
			'Nama_Pelanggan' => $Nama_Pelanggan['Nama_Pelanggan'],
			'Email' => $Nama_Pelanggan['Email'],
			'level' => $Nama_Pelanggan['Level'],
			'login' => TRUE

		];

		session()->set($data);
	}



	//--------------------------------------------------------------------

}
