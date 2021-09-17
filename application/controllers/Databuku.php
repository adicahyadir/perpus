<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Databuku extends CI_Controller {

	public function index()
	{
		$isi['content'] = 'master/v_databuku';
		$isi['title'] = 'Data Buku';
		$this->load->view('v_dashboard', $isi);
	}
	
}
