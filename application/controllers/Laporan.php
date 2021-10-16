<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//load library form validasi
		$this->load->library('form_validation');
		//load model admin
		$this->load->model('m_admin');
		$this->load->model('m_anggota');
		$this->load->model('m_peminjaman');
	}


	public function index()
	{
		if($this->m_admin->logged_id())
		{

			$isi['content'] = 'laporan/v_laporan';
			$isi['title']   = 'Laporan';
			$isi['data'] = $this->db->get('anggota')->result();
			$this->load->view('v_dashboard', $isi);

		}else{

			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("login");

		}
		
}
	public function cetak()
    {
	// $tglawal = $this->input->post('tglawal');
	// $tglakhir = $this->input->post('tglakhir');
	// $status = $this->input->post('status');
    	$tgl = $this->input->get('tglawal');
		$tglhir = $this->input->get('tglakhir');
		$status = $this->input->get('status');
	// $isi['title']= 'Laporan';
	$isi['cetak']= $this->m_peminjaman->cetak($tgl,$tglhir,$status);
	// $isi['asup'] = $this->m_peminjaman->cetak($tgl, $tglhir,$status , 'tglawal', 'tglakhir', 'status');
	$this->load->view('laporan/V_report',$isi);
	}
}