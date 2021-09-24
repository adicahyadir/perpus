<?php

class M_rak Extends CI_Model{
 	 
 	public function edit($id)
	{
		$this->db->where('id_rak', $id);
		return $this->db->get('rak')->row_array();
	}
	public function update($id_rak, $data)
	{
		$this->db->where('id_rak', $id_rak);
		$this->db->update('rak', $data);
	}
	public function hapus($id)
	{
		$this->db->where('id_rak', $id);
		$this->db->delete('rak');
	}
}