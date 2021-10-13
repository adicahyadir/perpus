<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$isi['title']   = 'Rak Buku';
		$this->load->view('welcome_message', $isi);
	}
}
