<?php
class M_laporan Extends CI_Model
{
	public function laporan($dari, $sampai)
	{
		$query = "SELECT `peminjaman`.*,`anggota`.*,`databuku`.*
			FROM ((`peminjaman` 
			INNER JOIN `anggota` ON `peminjaman`.`id_anggota` = `anggota`.`id_anggota`)
			INNER JOIN `databuku` ON `peminjaman`.`buku_id` = `databuku`.`buku_id`)

			WHERE `peminjaman`.`tgl_pinjam` BETWEEN $dari AND $sampai
			ORDER BY `peminjaman`.`tgl_pinjam` ASC
			";

		return $this->db->query($query)->result_array();
	}
}