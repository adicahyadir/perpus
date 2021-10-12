<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Denda extends CI_Controller {

	public function __construct()
	{ 
		parent::__construct();
		//load library form validasi
		$this->load->library('form_validation');
		//load model admin
		$this->load->model('m_admin');
		$this->load->model('m_denda');
	}

	public function index()
	{
		if($this->m_admin->logged_id())
		{
			$isi['content'] = 'transaksi/v_denda';
            $isi['title'] = 'Denda';
            $isi['data'] = $this->db->get('denda')->result();
		    $this->load->view('v_dashboard', $isi);

		}else{

			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("login");

		}
	}

	public function tambah_denda()
	{ 
	    $isi['content'] = 'denda';
		$isi['title'] = 'Denda';
		$isi['judul']   = 'Harga Denda';
		$this->load->view('v_dashbord', $isi);	
	}

	public function simpan()
	{
		$data['harga_denda'] = $this->input->post('harga_denda');
		$this->db->insert('denda', $data);
		if ($query = true) {
			$this->session->set_flashdata('info','Data Berhasil di Simpan');
			redirect('denda');
		}
	}

	public function update()
	{
		$id_denda = $this->input->post('id_denda');
		$data = array(
			'harga_denda' 	=> $this->input->post('harga_denda')
		);
		$query = $this->m_denda->update($id_denda, $data);
		if ($query = true){
			$this->session->set_flashdata('info','Data Berhasil di Ubah');
			redirect('denda');
		}
	}

	public function edit($id)
	{
		$isi['title'] 		= 'Edit Harga Denda';
		$isi['content'] 	= 'transaksi/edit_denda';
		$isi['judul'] 		= 'Form Edit Buku' ;
		$isi['data'] 		= $this->m_denda->edit($id);
		$this->load->view('v_dashboard', $isi);
	}

	// public function hapus($id)
	// {
	// 	$query = $this->m_denda->hapus($id);
	// 	if ($query = true){
	// 		$this->session->set_flashdata('info','Data Berhasil di Hapus');
	// 		redirect('denda');
	// 	}
	// }	
}
