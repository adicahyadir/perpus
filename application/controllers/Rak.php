<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rak extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_rak');
	}

	public function index()
	{
		$isi['content'] = 'master/rak/v_rak';
		// $isi['judul']   = 'Rak Buku';
		$isi['data'] = $this->db->get('rak')->result();
		$this->load->view('v_dashboard', $isi);
	}
	public function tambah_rak()
	{
	    $isi['content'] = 'master/rak/form_rak';
		$isi['judul']   = 'Form tambah Rak Buku';
		$this->load->view('v_dashbord', $isi);
	}
	public function simpan()
	{
		$data['nama_rak'] = $this->input->post('nama_rak');
		$data['baris_rak'] = $this->input->post('baris_rak');
		$this->db->insert('rak', $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Berhasil di Simpan');
			redirect('rak');
		}
	
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
			$this->session->set_flashdata('info','Data Berhasil di Ubah');
			redirect('rak');
		}
	}

	public function edit($id)
	{
		$isi['data'] = $this->m_rak->edit($id);
		$this->load->view('v_dashboard', $isi);
		$data = $this->id_rak;
	}

	public function hapus($id)
	{
		$query = $this->m_rak->hapus($id);
		if ($query = true){
			$this->session->set_flashdata('info', 'Data Berhasil DiHapus');
			redirect('rak');
		}
	}
}