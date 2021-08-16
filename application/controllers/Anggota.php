<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_anggota');
	}

	public function index()
	{
		$isi['content'] = 'anggota/v_anggota';
		$isi['judul']	= ' Data Anggota';
		$this->load->view('v_dashboard', $isi);
	}
	public function tambah_anggota()
	{
		$isi['content'] 	= 'anggota/form_anggota';
		$isi['judul']		= 'Form Tambah Anggota';
		$isi['id_anggota']	= $this->m_anggota->id_anggota();
		$this->load->view('v_dashboard', $isi);
	}
	
	public function simpan()
	{
		$data = array(
			'id_anggota'	 => $this->input->post('id_anggota'),
			'nis'			 => $this->input->post('nis'),
			'nama_anggota' 	 => $this->input->post('nama_anggota'),
			'jenkel' 		 => $this->input->post('jenkel'),
			'kelas' 		 => $this->input->post('kelas'),
			'alamat' 		 => $this->input->post('alamat'),
			'no_hp' 		 => $this->input->post('no_hp')
		);
		$query = $this->db->insert('anggota', $data);
		if ($query = true) {
			$this->session->set_flashdata('info','Data Berhasil di Simpan');
			redirect('anggota');
		}
	}
}
