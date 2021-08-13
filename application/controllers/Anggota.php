<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	public function index()
	{
		$isi['content'] = 'anggota/v_anggota';
		$isi['judul']	= 'Daftar Data Anggota';
		$this->load->view('v_dashboard', $isi);
	}
	
}
