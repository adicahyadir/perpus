<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian extends CI_Controller {
	public function __construct()
	{ 
		parent::__construct();
		//load library form validasi
		$this->load->library('form_validation');
		//load model admin
		$this->load->model('m_admin');
		$this->load->model('m_peminjaman');
			
	}

	public function index()
	{
		if($this->m_admin->logged_id())
		{
            $isi['content'] = 'transaksi/v_pengembalian';
            $isi['title'] = 'Pengembalian Buku';
            $isi['peminjaman']= $this->m_peminjaman->peminjaman();
            $this->load->view('v_dashboard', $isi);

		}else{

			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("login");

		}
	}


}
