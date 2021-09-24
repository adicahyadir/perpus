<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Databuku extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//load library form validasi
		$this->load->library('form_validation');
		//load model admin
		$this->load->model('m_admin');
		$this->load->model('m_databuku', 'book');
	}

	public function index()
	{
		if($this->m_admin->logged_id())
		{
			$isi['title'] = 'Data Buku';
			$isi['content'] = 'master/v_databuku';
			$isi['data'] = $this->book->getAllBuku();
			$this->load->view('v_dashboard', $isi);

		}else{

			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("login");

		}
	}
	public function delete($id_buku)
	{
		$this->book->delete($id_buku);
		redirect ('databuku');
	}
	
}
