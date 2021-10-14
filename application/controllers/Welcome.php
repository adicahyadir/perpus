<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function __construct()
	{
		parent::__construct();
	
		$this->load->model('m_bukuz');
	}
	public function index()
	{
		$data['title']   = 'Rak Buku';
		$data['bukuz'] = $this->m_bukuz->get_all();
			
		$this->load->view('welcome_message',$data);
	}
	public function search(){
			$keyword = $this->input->post('keyword');
			$data['bukuz']= $this->m_bukuz->get_bukuz_keyword($keyword);
			$this->load->view('welcome_message',$data);
		}
}
