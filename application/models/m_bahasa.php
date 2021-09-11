<?php

class M_bahasa Extends CI_Model{

	public function edit($id)
	{
		$this->db->where('id_bahasa', $id);
		return $this->db->get('bahasa')->row_array();
	}
	public function update($id_bahasa, $data)
	{
		$this->db->where('id_bahasa', $id_bahasa);
		$this->db->update('bahasa');
	}
	public function hapus($id)
	{
		$this->db->where('id_bahasa', $id);
		$this->db->delete('bahasa');
	}
}