<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//load library form validasi
		$this->load->library('form_validation');
		//load model admin
		$this->load->model('m_admin');
		$this->load->model('m_peminjaman'); 
	}

	public function index()
	{
		if($this->m_admin->logged_id())
		{
			$isi['content'] = 'transaksi/v_peminjaman';
            $isi['title'] = 'Peminjaman Buku';
			$isi['data'] 	= $this->db->get('peminjaman')->result();
			$isi['peminjaman']= $this->m_peminjaman->peminjaman();
			$isi['panggil_denda'] = $this->db->get('denda')->result();
		
		foreach ($isi['panggil_denda'] as $pd) {
			$isi['harga_denda'] = $pd->harga_denda;
		}
		$this->load->view('v_dashboard', $isi);

		}else{

			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("login");

		}
	}

	public function tambah_peminjam()
	{
		$isi['content'] = 'transaksi/tambah_peminjam';
		$isi['title'] 	= 'Tambah Peminjam';
		$isi['judul']   = 'Peminjaman';
		$isi['pinjam_id']	= $this->db->get('peminjaman')->result();
		$isi['kode']		= $this->m_peminjaman->pinjam_id();
		$isi['anggota'] 	= $this->m_peminjaman->anggota();
		$isi['buku']		= $this->m_peminjaman->buku();

		
		$this->load->view('v_dashboard', $isi);
	}

    public function simpan()
	{
		$buku_id1 = $this->input->post('buku_id1');
		$buku_id2 = $this->input->post('buku_id2');
		$buku_id3 = $this->input->post('buku_id3');
		$tanggal_pinjam = time();

		$buku['databuku'] = $this->db->get_where('databuku', ['buku_id'=> $buku_id1])->row_array();
		$stok = $buku['databuku']['jumlah'] - 1;
		$data = array(
			'jumlah' 	=> $stok
		);
		$query = $this->m_peminjaman->update($buku_id1, $data, 'buku_id', 'databuku');


		$data = array(
			'pinjam_id' 		=> $this->input->post('pinjam_id'),
			'id_anggota'			=> $this->input->post('anggota'),
			'buku_id' 			=> $buku_id1,
			'status' 			=> 1,
			'tgl_pinjam'		=> $tanggal_pinjam,
		);
		$query = $this->db->insert('peminjaman', $data);
		if ($buku_id2 != "") {			
			$buku['databuku'] = $this->db->get_where('databuku', ['buku_id'=> $buku_id2])->row_array();
			$stok = $buku['databuku']['jumlah'] - 1;
			$data = array(
				'jumlah' 	=> $stok
			);
			$query = $this->m_peminjaman->update($buku_id2, $data, 'buku_id', 'databuku');

			$data = array(
				'pinjam_id' 		=> $this->input->post('pinjam_id'),
				'id_anggota'			=> $this->input->post('anggota'),
				'buku_id' 			=> $buku_id2,
				'status' 			=> 1,
				'tgl_pinjam'		=> $tanggal_pinjam,
			);
			$query = $this->db->insert('peminjaman', $data);
		}
		if ($buku_id3) {			
			$buku['databuku'] = $this->db->get_where('databuku', ['buku_id'=> $buku_id1])->row_array();
			$stok = $buku['databuku']['jumlah'] - 1;
			$data = array(
				'jumlah' 	=> $stok
			);
			$query = $this->m_peminjaman->update($buku_id3, $data, 'buku_id', 'databuku');

			$data = array(
				'pinjam_id' 		=> $this->input->post('pinjam_id'),
				'id_anggota'			=> $this->input->post('anggota'),
				'buku_id' 			=> $buku_id3,
				'status' 			=> 1,
				'tgl_pinjam'		=> $tanggal_pinjam,
			);
			$query = $this->db->insert('peminjaman', $data);
		}
		if ($query = true){
			$this->session->set_flashdata('info','Data Berhasil di Tambahkan');
			redirect('peminjaman');
		}
	}
	public function update()
	{
		$id_pinjam = $this->input->post('id_pinjam');
		$buku_id = $this->input->post('buku_id');
		$buku['databuku'] = $this->db->get_where('databuku', ['buku_id'=> $buku_id])->row_array();
		$stok = $buku['databuku']['jumlah'] + 1;

		$data = array(
			'status' 	=> 0,
			'tgl_balik' => time(),
			'denda'	=> $this->input->post('denda')
		);
		$query = $this->m_peminjaman->update($id_pinjam, $data, 'id_pinjam', 'peminjaman');

		$data = array(
			'jumlah' 	=> $stok
		);
		$query = $this->m_peminjaman->update($buku_id, $data, 'buku_id', 'databuku');


		if ($query = true){
			$this->session->set_flashdata('info','Buku Berhasil Di Kembalikan');
			redirect('peminjaman');
		}
	}

	public function pengembalian()
	{
		$isi['content'] = 'transaksi/v_pengembalian';
		$isi['judul']   = 'Pengembalian';
		$isi['data'] 	= $this->db->get('peminjaman')->result();
		$isi['peminjaman']= $this->m_peminjaman->peminjaman();

		$this->load->view('v_dashboard', $isi);
	}
	
	
}