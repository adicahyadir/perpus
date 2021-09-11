<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerbit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_penerbit');
	}
	public function index()
	{
		$isi['content'] = 'master/penerbit/v_penerbit';
		$isi['title']   = 'Penerbit';
		$isi['data'] = $this->db->get('penerbit')->result();
		$this->load->view('v_dashboard', $isi);
	}
	// public function tambah_penerbit()
	// {
	//     $isi['content'] = 'master/penerbit/form_penerbit';
	// 	$isi['judul']   = 'Form tambah Penerbit';
	// 	$this->load->view('v_dashbord', $isi);
	// }
	public function simpan()
	{
		$data['nama_penerbit'] = $this->input->post('nama_penerbit');
		$data['alamat'] = $this->input->post('alamat');
		$this->db->insert('penerbit', $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Berhasil di Simpan');
			redirect('penerbit');
		}
	
	}
	public function update()
	{
		$id_penerbit = $this->input->post('id_penerbit');
		$data = array(
			// 'id_penerbit' => $this->input->post('id_penerbit'),
			'nama_penerbit' => $this->input->post('nama_penerbit'),
			'alamat' => $this->input->post('alamat'),
		);
		$query = $this->m_penerbit->update($id_penerbit, $data);
		if ($query = true) {
			$this->session->set_flashdata('info','Data Berhasil di Ubah');
			redirect('penerbit');
		}
	}

	public function edit($id)
	{
		$isi['content'] = 'master/penerbit/edit_penerbit';
		$isi['judul'] = 'Form Edit Penerbit' ;
		$isi['data'] = $this->m_penerbit->edit($id);
		$this->load->view('v_dashboard', $isi);
		
	}

	public function hapus($id)
	{
		$query = $this->m_penerbit->hapus($id);
		if ($query = true){
			$this->session->set_flashdata('info', 'Data Berhasil DiHapus');
			redirect('penerbit');
		}
	}
}