<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rak extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_rak');
		//load library form validasi
		$this->load->library('form_validation');
		//load model admin
		$this->load->model('m_admin');
	}

	public function index()
	{ 
		if($this->m_admin->logged_id())
		{
			$isi['content'] = 'master/rak/v_rak';
			$isi['title']   = 'Rak Buku';
			$isi['data'] = $this->db->get('rak')->result();
			$this->load->view('v_dashboard', $isi);		

		}else{

			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("login");

		}
	}
	
	public function simpan()
	{
		$data = array(
			'id_rak' => $this->input->post('id_rak'),
			'nama_rak' => $this->input->post('nama_rak'),
			'baris_rak' => $this->input->post('baris_rak')
		);
		$this->db->insert('rak', $data);
		if ($query = true) {
			$this->session->set_flashdata('info_r', '<span class="alert alert-success">Data Berhasil di Tambahkan</span>');
			redirect('rak');
		}
	//

	}

	public function update()
	{
		$id_rak = $this->input->post('id_rak');
		$data = array(
			'id_rak' => $this->input->post('id_rak'),
			'nama_rak' => $this->input->post('nama_rak'),
			'baris_rak' => $this->input->post('baris_rak')
		);
		$query = $this->m_rak->update($id_rak, $data);
		if ($query = true) {
			$this->session->set_flashdata('info_r','<span class="alert alert-success">Data Berhasil di Ubah</span>');
			redirect('rak');
		}
	}

	public function edit($id)
	{
		$isi['content'] = 'master/rak/edit_rak';
		$isi['judul'] = 'Form Edit Rak' ;
		$isi['title']   = 'Edit Rak Buku';
		$isi['data'] = $this->m_rak->edit($id);
		$this->load->view('v_dashboard', $isi);
		
	}

	public function hapus($id)
	{
		$query = $this->m_rak->hapus($id);
		if ($query = true){
			$this->session->set_flashdata('info_r', '<span class="alert alert-danger">Data Berhasil DiHapus</span>');
			redirect('rak');
		}
	}
}