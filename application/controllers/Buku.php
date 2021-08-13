<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function index()
	{
		$isi['content'] = 'master/v_databuku';
		$this->load->view('v_dashboard', $isi);
	}
	public function rak()
	{
		$isi['content'] = 'master/v_rak';
		$this->load->view('v_dashboard', $isi);
	}
	public function kategori()
	{
		$isi['content'] = 'master/v_kategori';
		$this->load->view('v_dashboard', $isi);
	}
}
