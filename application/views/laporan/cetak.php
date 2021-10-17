<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?=$judul; ?></title>
	<style>
		#tbl_cetak {
		  font-family: Arial, Helvetica, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

		#tbl_cetak td, #tbl_cetak th {
		  border: 1px solid #ddd;
		  padding: 8px;
		}

		#tbl_cetak tr:nth-child(even){background-color: #f2f2f2;}

		#tbl_cetak tr:hover {background-color: #ddd;}

		#tbl_cetak th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		  background-color: blue;
		  color: white;
		}
	</style>
</head>
<body>

	<table id="tbl_cetak">
	  <tr>
	    <th>Kode Peminjaman</th>
	    <th>Anggota</th>
	    <th>Kode Buku</th>
	    <th>Judul Buku</th>
	    <th>Tanggal Peminjaman</th>
	    <th>Tanggal Dikembalikan</th>
	    <th>Status</th>
	    <th>Denda</th>
	  </tr>
	  <?php foreach ($laporan as $key => $value): ?>
	  	<tr>
	  		<td><?=$value['pinjam_id'] ?></td>
	  		<td>[<?=$value['nis'] ?>] <?=$value['nama_anggota'] ?></td>
	  		<td><?=$value['buku_id'] ?></td>
	  		<td><?=$value['judul'] ?> </td>
	  		<td><?=date("d-m-Y",$value['tgl_pinjam']) ?></td>
	  		<?php if ($value['tgl_balik'] == 0){ ?>
	  			<td>-</td>
	  		<?php } else { ?>
	  			<td><?=date("d-m-Y",$value['tgl_balik']) ?></td>
	  		<?php } ?>
	  		<?php if ($value['status'] == 1){ ?>
	  			<td>Masih dipinjam</td>
	  		<?php } else { ?>
	  			<td>Telah dikembalikan</td>
	  		<?php } ?>
	  		<td><?=$value['denda'] ?></td>
	  	</tr>
	  <?php endforeach ?>
	</table>
</body>
</html>