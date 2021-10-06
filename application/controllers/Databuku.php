 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Databuku extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//load library form validasi
		$this->load->library('form_validation');
		//load model admin
		$this->load->model('m_admin');
		$this->load->model('m_databuku');
	}

	public function index()
	{
		if($this->m_admin->logged_id())
		{
			$isi['title'] = 'Data Buku';
			$isi['content'] = 'master/v_databuku';
			$isi['data'] = $this->m_databuku->getAllBuku();
			$isi['bahasa'] = $this->db->get('bahasa')->result();
			$isi['penerbit'] = $this->db->get('penerbit')->result();
			$isi['pengarang'] = $this->db->get('pengarang')->result();
			$isi['katagori'] = $this->db->get('kategori')->result();
			$isi['rak'] = $this->db->get('rak')->result();
			$this->load->view('v_dashboard', $isi);

		}else{

			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("login");

		}


	}

	public function tambah_buku()
	{
		$isi['content'] = 'master/v_databuku';
		$isi['buku_id']	= $this->db->get('databuku')->result();
		$this->load->view('v_databuku', $isi);
	}


	public function simpan()
	{

		$data = array(
			'id_buku' 		=> $this->input->post('id_buku'),
			'buku_id' 		=> $this->input->post('buku_id'),
			'isbn'			=> $this->input->post('isbn'),
			'judul' 		=> $this->input->post('judul'),
			'tahun' 		=> $this->input->post('tahun'),
			'halaman'		=> $this->input->post('Halaman'),
			'jumlah'		=> $this->input->post('jumlah'),
			'id_pengarang'	=> $this->input->post('id_pengarang'),
			'id_penerbit'	=> $this->input->post('id_penerbit'),
			'id_kategori'   => $this->input->post('id_kategori'),
			'id_rak' 	    => $this->input->post('id_rak'),
			'id_bahasa'		=> $this->input->post('id_bahasa')

		);
		$query = $this->db->insert('databuku', $data);
		if ($query = true){
			$this->session->set_flashdata('info','Data Berhasil di Simpan');
			redirect('databuku');
		}
	}


	public function edit($id)
	{
		$isi['title'] 		= 'Edit Data Buku';
		$isi['content'] 	= 'master/edit_buku';
		$isi['data']		= $this->m_databuku->edit($id);
		$isi['bahasa'] = $this->db->get('bahasa')->result();
		$isi['penerbit'] = $this->db->get('penerbit')->result();
		$isi['pengarang'] = $this->db->get('pengarang')->result();
		$isi['katagori'] = $this->db->get('kategori')->result();
		$isi['rak'] = $this->db->get('rak')->result();
		$this->load->view('v_dashbord', $isi);
	}

	public function update()
	{
		$buku_id = $this->input->post('buku_id');
		$data = array(
			'id_buku' 		=> $this->input->post('id_buku'),
			'buku_id' 		=> $this->input->post('buku_id'),
			'isbn'			=> $this->input->post('isbn'),
			'judul' 		=> $this->input->post('judul'),
			'tahun' 		=> $this->input->post('tahun'),
			'halaman'		=> $this->input->post('Halaman'),
			'jumlah'		=> $this->input->post('jumlah'),
			'id_pengarang'	=> $this->input->post('id_pengarang'),
			'id_penerbit'	=> $this->input->post('id_penerbit'),
			'id_kategori'   => $this->input->post('id_kategori'),
			'id_rak' 	    => $this->input->post('id_rak'),
			'id_bahasa'		=> $this->input->post('id_bahasa')
		);

		$query = $this->m_databuku->update($buku_id, $data);
		if ($query = true){
			$this->session->set_flashdata('info','Data Berhasil di Ubah');
			redirect('databuku');
		}
	}

	public function hapus($id)
	{
		$query = $this->m_databuku->hapus($id);
		if ($query = true){
			$this->session->set_flashdata('info','Data Berhasil di Hapus');
			redirect('databuku');
		}		
	}
	
}
