<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bahasa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_bahasa');
		//load library form validasi
		$this->load->library('form_validation');
		//load model admin
		$this->load->model('m_admin');
	}
	public function index()
	{
		
		if($this->m_admin->logged_id())
		{
			$isi['content'] = 'master/bahasa/v_bahasa';
			$isi['title']   = 'Bahasa';
			$isi['data'] = $this->db->get('bahasa')->result();
			$this->load->view('v_dashboard', $isi);		

		}else{

			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("login");

		}
	}
	
	public function simpan()
	{ 
		$data['nama_bahasa'] = $this->input->post('nama_bahasa');
		$this->db->insert('bahasa', $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Berhasil di Simpan');
			redirect('bahasa');
		}
	
	}  
	public function update()
	{
		$id_bahasa = $this->input->post('id_bahasa');
		$data = array(
			'id_bahasa' => $this->input->post('id_bahasa'),
			'nama_bahasa' => $this->input->post('nama_bahasa'),
		);
		$query = $this->m_bahasa->update($id_bahasa, $data);
		if ($query = true) {
			$this->session->set_flashdata('info','Data Berhasil di Ubah');
			redirect('bahasa');
		}
	}

	public function edit($id)
	{
		$isi['content'] = 'master/bahasa/edit_bahasa';
		$isi['judul'] = 'Form Edit Bahasa' ;
		$isi['title']   = ' Edit Bahasa';
		$isi['data'] = $this->m_bahasa->edit($id);
		$this->load->view('v_dashboard', $isi);
		
	}

	public function hapus($id)
	{
		$query = $this->m_bahasa->hapus($id);
		if ($query = true){
			$this->session->set_flashdata('info', 'Data Berhasil DiHapus');
			redirect('bahasa');
		}
	}
}