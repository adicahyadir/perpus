<?php 

 class M_peminjaman Extends CI_Model{

 	public function pinjam_id()
 	{
		$this->db->select('RIGHT(peminjaman.pinjam_id,3) as kode', FALSE);
		$this->db->order_by('pinjam_id','DESC');
		$this->db->limit(1);
		$query = $this->db->get('peminjaman');
		if ($query->num_rows()<>0) {
			$data = $query->row();
			$kode = intval($data->kode)+1; 
		}else{
			$kode = 1;
		}

		 $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
		 $kodejadi = "PJ".$kodemax;
		 return $kodejadi;
	}
	public function anggota(){
		$this->db->select('*');
		$this->db->from('anggota');
		$this->db->order_by('nis', 'ASC');

		return $this->db->get()->result_array();
	}
	public function buku(){
		$this->db->select('*');
		$this->db->from('databuku');
		$this->db->order_by('buku_id','ASC');
		

		return $this->db->get()->result_array();	
	}
	public function peminjaman(){

		$query = "SELECT `peminjaman`.*,`anggota`.* 
					FROM `peminjaman` JOIN `anggota`
				ON `peminjaman`.`id_anggota` = `anggota`.`id_anggota`
				ORDER BY `id_pinjam`
				";

		return $this->db->query($query)->result_array();
	}
	public function update($id_pinjam, $data, $field, $table)
	{
		$this->db->where($field, $id_pinjam);
		$this->db->update($table, $data);
	}
 }