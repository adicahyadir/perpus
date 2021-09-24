<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kategori');
	}
	public function index()
	{
		$isi['content'] = 'master/kategori/v_kategori';
		$isi['title']   = 'Kategori';
		$isi['data'] = $this->db->get('kategori')->result();
		$this->load->view('v_dashboard', $isi);
	}
	
	public function simpan()
	{
		$data['nama_kategori'] = $this->input->post('nama_kategori');

		$this->db->insert('kategori', $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Berhasil di Simpan');
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
			$this->session->set_flashdata('info','Data Berhasil di Ubah');
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
			$this->session->set_flashdata('info', 'Data Berhasil DiHapus');
			redirect('kategori');
		}
	}
}