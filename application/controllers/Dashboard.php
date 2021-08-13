<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->m_squrity->getSqurity();
		$isi['content'] = 'v_home';
		// $isi['judul']	= 'Dashboard';
		$this->load->view('v_dashboard',$isi);
	}
	
}
