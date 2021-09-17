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
		$isi['title']   = 'Daftar Anggota';
		$isi['data'] = $this->db->get('anggota')->result();
		$this->load->view('v_dashboard', $isi);
	}
	public function simpan()
	{

		$data['nis'] = $this->input->post('nis');
		$data['nama_anggota'] = $this->input->post('nama_anggota');
		$data['jenkel'] = $this->input->post('jenkel');
		$data['kelas'] = $this->input->post('kelas');
		$data['alamat'] = $this->input->post('alamat');
		$data['no_hp'] = $this->input->post('no_hp');
		$this->db->insert('anggota', $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Berhasil di Simpan');
			redirect('anggota');
		}
	
	}
	public function update()
	{
		$id_anggota = $this->input->post('id_anggota');
		$data = array(
			'id_anggota' => $this->input->post('id_anggota'),
			'nis' => $this->input->post('nis'),
			'nama_anggota' => $this->input->post('nama_anggota'),
			'jenkel' => $this->input->post('jenkel'),
			'kelas' => $this->input->post('kelas'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp')
		);
		 $this->db->set($data);
    	$this->db->insert($this->db->dbprefix . 'anggota');
		// $query = $this->m_anggota->update($id_anggota, $data);
		// if ($query = true) {
		// 	$this->session->set_flashdata('info','Data Berhasil di Ubah');
		// 	redirect('anggota');
		// }
	}
	public function edit($id)
	{
		$isi['content'] = 'anggota/edit_anggota';
		$isi['judul'] = 'Form Edit Anggota' ;
		$isi['title'] = 'Form Edit Anggota' ;
		$isi['data'] = $this->m_anggota->edit($id);
		$this->load->view('v_dashboard', $isi);
	}

	public function hapus($id)
	{
		$query = $this->m_anggota->hapus($id);
		if ($query = true){
			$this->session->set_flashdata('info', 'Data Berhasil DiHapus');
			redirect('anggota');
		}
	}
}