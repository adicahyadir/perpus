<html>
<head>
<?php $kosong = ' &nbsp'; ?>
    <title><?=  $kosong?></title>
</head>
<style type="text/css" media="print">
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */
    }
</style>
<body>
<div class="form-group">
    <h3><p align="center"><b>Laporan Kelola Barang</b></p></h3>
<table class="static" align="center" rules="all" border="1px" style="font-size:15px; width: 95%;">

        <thead class="table-dark">
		<tr>
			<td>ID Pinjam</td>
			<td>ID Buku</td>
      <td>ID Anggota</td>
      <td>Nama Anggota</td>
      <td>Tanggal Pinjam</td>
  
      <td>Status</td>
		</tr>
        </thead>

<tbody class="table">
  <?php $lastTrxID = ''; ?>
  <?php $lastTotal = ''; ?>
             <?php foreach ($cetak as $p) { ?>
            <tr>
                <td><?=$p['pinjam_id'] ?></td>
                <td><?=$p['buku_id'] ?></td>
                <td><?=$p['id_anggota'] ?></td>
                <td><?=$p['nama_anggota'] ?></td>
                <td><?=date("Y-m-d",$p['tgl_pinjam']) ?></td>	
                <td><?=$p['status'] ?></td>

</tr>
<?php
}
?>
             
        </tbody>
</table>


<script>
		window.print();
</script>

</body>
</html>