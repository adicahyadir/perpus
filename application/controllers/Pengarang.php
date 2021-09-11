<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengarang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pengarang');
	}
	public function index()
	{
		$isi['content'] = 'master/pengarang/v_pengarang';
		$isi['title']   = 'Pengarang';
		$isi['data'] = $this->db->get('pengarang')->result();
		$this->load->view('v_dashboard', $isi);
	}
	// public function tambah_pengarang()
	// {
	//     $isi['content'] = 'master/pengarang/form_pengarang';
	// 	$isi['judul']   = 'Form tambah Pengarang';
	// 	$this->load->view('v_dashbord', $isi);
	// }
	public function simpan()
	{
		$data['nama_pengarang'] = $this->input->post('nama_pengarang');
		$this->db->insert('pengarang', $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Berhasil di Simpan');
			redirect('pengarang');
		}
	
	}
	public function update()
	{
		$id_pengarang = $this->input->post('id_pengarang');
		$data = array(
			'id_pengarang' => $this->input->post('id_pengarang'),
			'nama_pengarang' => $this->input->post('nama_pengarang'),
			
		);

		$query = $this->m_pengarang->update($id_pengarang, $data);
		if ($query = true) {
			$this->session->set_flashdata('info','Data Berhasil di Ubah');
			redirect('pengarang');
		}
	}

	public function edit($id)
	{
		$isi['content'] = 'master/pengarang/edit_pengarang';
		$isi['judul'] = 'Form Edit Pengarang' ;
		$isi['data'] = $this->m_pengarang->edit($id);
		$this->load->view('v_dashboard', $isi);
		
	}

	public function hapus($id)
	{
		$query = $this->m_pengarang->hapus($id);
		if ($query = true){
			$this->session->set_flashdata('info', 'Data Berhasil DiHapus');
			redirect('pengarang');
		}
	}
}