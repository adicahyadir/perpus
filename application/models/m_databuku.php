<?php

class M_databuku Extends CI_Model
{
    public function __construct()
    {
        $this->table = "databuku";
    }

    public function getAllBuku()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('pengarang', 'pengarang.id_pengarang = ' . $this->table . '.id_pengarang');
        $this->db->join('penerbit', 'penerbit.id_penerbit = ' . $this->table . '.id_penerbit');
        $this->db->join('kategori', 'kategori.id_kategori = ' . $this->table . '.id_kategori');
        $this->db->join('rak', 'rak.id_rak = ' . $this->table . '.id_rak');
        $this->db->join('bahasa', 'bahasa.id_bahasa = ' . $this->table . '.id_bahasa');
        return $this->db->get()->result_array();
    }
   
    public function delete($id)
	{
        return $this->db->delete($this->table, array("id_buku" => $id));
	}
}