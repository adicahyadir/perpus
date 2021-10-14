<?php

class M_databuku Extends CI_Model
{

    public function buku_id()
    {
        $this->db->select('RIGHT(databuku.buku_id,3) as kode', FALSE);
        $this->db->order_by('buku_id','DESC');
        $this->db->limit(1);
        $query = $this->db->get('databuku');
        if ($query->num_rows()<>0) {
            $data = $query->row();
            $kode = intval($data->kode)+1; 
        }else{
            $kode = 1;
        }

         $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
         $kodejadi = "BK".$kodemax;
         return $kodejadi;
    }
        

    public function getAllBuku()
    {
        $this->db->select('*');
        $this->db->from('databuku');
        $this->db->join('pengarang', 'pengarang.id_pengarang = ' . 'databuku' . '.id_pengarang');
        $this->db->join('penerbit', 'penerbit.id_penerbit = ' . 'databuku'. '.id_penerbit');
        $this->db->join('kategori', 'kategori.id_kategori = ' . 'databuku' . '.id_kategori');
        $this->db->join('rak', 'rak.id_rak = ' . 'databuku' . '.id_rak');
        $this->db->join('bahasa', 'bahasa.id_bahasa = ' . 'databuku' . '.id_bahasa');
        return $this->db->get()->result_array();
    }
   
    public function edit($id)
    {
        $this->db->where('buku_id', $id);
        return $this->db->get('databuku')->row_array();
    }

	public function update($buku_id, $data)
	{
		$this->db->where('buku_id', $buku_id);
		$this->db->update('databuku', $data);
	}

    public function hapus($id)
    {
        $this->db->where('buku_id', $id);
        $this->db->delete('databuku');
    }
    public function get_bukuz_keyword($keyword){
            $this->db->select('*');
            $this->db->from('databuku');
            $this->db->like('isbn',$keyword);
            $this->db->or_like('judul',$keyword);
            return $this->db->get()->result();
        }
}