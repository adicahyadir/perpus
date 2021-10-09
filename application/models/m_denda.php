<?php

class M_denda Extends CI_Model{
	
	public function edit($id)
	{
		$this->db->where('id_denda', $id);
		return $this->db->get('denda')->row_array();
	}
	public function update($id_denda, $data)
	{
		$this->db->where('id_denda', $id_denda);
		$this->db->update('denda', $data);
	}

	public function hapus($id)
	{
		$this->db->where('id_denda', $id);
		$this->db->delete('denda');
	}
}