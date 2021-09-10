<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function index()
	{
		$isi['content'] = 'master/v_databuku';
		$this->load->view('v_dashboard', $isi);
	}
	
}
