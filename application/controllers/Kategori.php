<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kategori');
		//load library form validasi
		$this->load->library('form_validation');
		//load model admin
		$this->load->model('m_admin');
	}
	public function index()
	{
		
		if($this->m_admin->logged_id())
		{
			$isi['content'] = 'master/kategori/v_kategori';
			$isi['title']   = 'Kategori';
			$isi['data'] = $this->db->get('kategori')->result();
			$this->load->view('v_dashboard', $isi);

		}else{

			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("login");

		}
	}
	
	public function simpan()
	{
		$data = array(
			'id_kategori' => $this->input->post('id_kategori'),
			'nama_kategori' => $this->input->post('nama_kategori')
		);
		$this->db->insert('kategori', $data);
		if ($query = true) {
			$this->session->set_flashdata('info_k', '<span class="alert alert-success">Data Berhasil di Tambahkan</span>');
			redirect('kategori');
		}
	
	} 
	public function update()
	{
		$id_kategori = $this->input->post('id_kategori');
		$data = array(
			'nama_kategori' => $this->input->post('nama_kategori')
		);
		$query = $this->m_kategori->update($id_kategori, $data);
		if ($query = true) {
			$this->session->set_flashdata('info_k','<span class="alert alert-success">Data Berhasil di Ubah</span>');
			redirect('kategori');
		}
	}

	public function edit($id)
	{
		$isi['content'] = 'master/kategori/edit_kategori';
		$isi['judul'] = 'Form Edit Kategori';
		$isi['title'] = 'Form Edit Kategori';
		$isi['data'] = $this->m_kategori->edit($id);
		$this->load->view('v_dashboard', $isi);
		
	}

	public function hapus($id)
	{
		$query = $this->m_kategori->hapus($id);
		if ($query = true){
			$this->session->set_flashdata('info_k', '<span class="alert alert-danger">Data Berhasil DiHapus</span>');
			redirect('kategori');
		}
	}
}