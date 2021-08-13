<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function index()
	{
		$isi['content'] = 'laporan/v_laporan';
		$this->load->view('v_dashboard', $isi);
	}
	
}
