<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Anggota extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_anggota');
		//load library form validasi
		$this->load->library('form_validation');
		//load model admin
		$this->load->model('m_admin');
	}

	public function index()
	{
		if($this->m_admin->logged_id())
		{
			$isi['content'] = 'anggota/v_anggota';
			$isi['title']   = 'Daftar Anggota';
			$isi['data'] = $this->db->get('anggota')->result();
			$this->load->view('v_dashboard', $isi);	

		}else{

			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("login");

		}
	}
	public function simpan()
	{
		$data = array(
			'id_anggota' => $this->input->post('id_anggota'),
			'nis' => $this->input->post('nis'),
			'nama_anggota' => $this->input->post('nama_anggota'),
			'jenkel' => $this->input->post('jenkel'),
			'kelas' => $this->input->post('kelas'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp')
		);
		$this->db->insert('anggota',$data);
		if ($query = true) {
			$this->session->set_flashdata('info','Data Berhasil di Ubah');
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

		$query = $this->m_anggota->update($id_anggota, $data);
		if ($query = true) {
			$this->session->set_flashdata('info','Data Berhasil di Ubah');
			redirect('anggota');
		}
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