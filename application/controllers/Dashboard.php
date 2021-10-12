<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
       
	public function __construct()
	{
		parent::__construct();
		//load library form validasi
		$this->load->library('form_validation');
		//load model admin
		$this->load->model('m_admin');
	}

	public function index()
	{
		if($this->m_admin->logged_id())
		{
			$isi['content'] = 'v_home';
			$isi['title'] = 'Halaman Utama';
			$isi['profile']	= 'Halo, Admin';
			$this->load->view('v_dashboard',$isi);		

		}else{

			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("login");

		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}

