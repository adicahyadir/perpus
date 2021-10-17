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
		$this->load->model('m_laporan');
		$this->load->model('m_anggota');
	}


	public function index()
	{
		if($this->m_admin->logged_id())
		{

			$isi['content'] = 'laporan/v_laporan';
			$isi['title']   = 'Laporan';
			// $isi['data'] = $this->db->get('anggota')->result();
			$this->load->view('v_dashboard', $isi);

		}else{

			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("login");

		}
		
	}

	public function L_anggota()
	{
			$isi['content'] = 'laporan/v_laporan_anggota';
			$isi['title']   = 'Laporan';
			$isi['data'] = $this->db->get('anggota')->result();
			$this->load->view('v_dashboard', $isi);
	}

	public function cetak()
	{
		$isi['judul']   = 'Laporan';

		$this->load->library('mypdf');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		if ($bulan == "") {
			$this->_cetakPerTahun($tahun);
		} else {

			$dari = "";
			$sampai = $bulan+1;


	        $bln=array("January","February","March","April","May","June","July","August","September","October","November","December");
	        $jlh_bln=count($bln);
	        if ($bulan < 11) {
	        	for($c=0; $c<$jlh_bln; $c+=1){
			        if ($c == $bulan) {
			        	$dari = $bln[$c];
			        }
			        if ($c == $sampai) {
			        	$sampai = $bln[$c];
			        }
			    }

			$time1 = strtotime("1 ".$dari." ".$tahun);
			$time2 = strtotime("1 ".$sampai." ".$tahun) - 1;
	        } else {
	        	$dari = "December";
	        	$sampai = "January";
	        	$tahun1 = $tahun + 1;

				$time1 = strtotime("1 ".$dari." ".$tahun);
				$time2 = strtotime("1 ".$sampai." ".$tahun1) - 1;
	        }
		    
		    $isi['laporan']= $this->m_laporan->laporan($time1, $time2);
		    $this->mypdf->generate('laporan/cetak', $isi,'nama-laporan','A4','landscape');
		}



	}
	private function _cetakPerTahun($tahun)
	{
		$tahun2 = $tahun + 1;
		$time1 = strtotime("1 January ".$tahun);
		$time2 = strtotime("1 January ".$tahun2) - 1;

		$isi['laporan']= $this->m_laporan->laporan($time1, $time2);
		$this->mypdf->generate('laporan/cetak', $isi,'nama-laporan','A4','landscape');
	}

}