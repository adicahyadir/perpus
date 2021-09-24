<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
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
			$isi['content'] = 'transaksi/v_peminjaman';
			$this->load->view('v_dashboard', $isi);

		}else{

			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("login");

		}
	}
	public function pengembalian()
	{
		$isi['content'] = 'transaksi/v_pengembalian';
		$this->load->view('v_dashboard', $isi);
	}
	public function denda()
	{
		$isi['content'] = 'transaksi/v_denda';
		$this->load->view('v_dashboard', $isi);
	}
	
}
