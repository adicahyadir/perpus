<?php 
	class M_bukuz extends CI_Model{
		public function get_all(){
			  $this->db->select('*');
        $this->db->from('databuku');
        $this->db->join('pengarang', 'pengarang.id_pengarang = ' . 'databuku' . '.id_pengarang');
        $this->db->join('penerbit', 'penerbit.id_penerbit = ' . 'databuku'. '.id_penerbit');
        $this->db->join('kategori', 'kategori.id_kategori = ' . 'databuku' . '.id_kategori');
        $this->db->join('rak', 'rak.id_rak = ' . 'databuku' . '.id_rak');
        $this->db->join('bahasa', 'bahasa.id_bahasa = ' . 'databuku' . '.id_bahasa');
        return $this->db->get()->result_array();

		}
		public function get_bukuz_keyword($keyword){
			$this->db->select('*');
			$this->db->from('databuku');
        $this->db->join('pengarang', 'pengarang.id_pengarang = ' . 'databuku' . '.id_pengarang');
        $this->db->join('penerbit', 'penerbit.id_penerbit = ' . 'databuku'. '.id_penerbit');
        $this->db->join('kategori', 'kategori.id_kategori = ' . 'databuku' . '.id_kategori');
        $this->db->join('rak', 'rak.id_rak = ' . 'databuku' . '.id_rak');
        $this->db->join('bahasa', 'bahasa.id_bahasa = ' . 'databuku' . '.id_bahasa');

			$this->db->like('judul',$keyword);
			$this->db->or_like('isbn',$keyword);
			$this->db->or_like('nama_penerbit',$keyword);
			$this->db->or_like('nama_kategori',$keyword);
			$this->db->or_like('nama_pengarang',$keyword);
			 return $this->db->get()->result_array();
			
		}
	}