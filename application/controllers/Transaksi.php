<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function index()
	{
		$isi['content'] = 'transaksi/v_peminjaman';
		$this->load->view('v_dashboard', $isi);
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
