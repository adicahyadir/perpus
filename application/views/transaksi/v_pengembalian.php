<section class="content">
 <!-- Page Heading -->
 <div class="container-fluid">
 	<!-- DataTales Example -->
     <h1 class="h3 mb-2 text-gray-800">Data Pengembalian Buku</h1>
     <div class=" mb-4" style="position: float-right">
           <!--  <a href="#" class="btn btn-success ">Tambah</a> -->
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Pengembalian</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>No Pinjam</th>
                      <th>Buku</th>
                      <th>ID Anggota</th>
                      <th>Nama</th>
                      <th>Tanggal Pinjam</th>
                      <th>Tanggal Dikembalikan</th>
                      <th>Denda</th>       
                    </tr>
                  </thead>
                 
                  <tbody>
                   <?php
                      $no = 1; 
                      foreach ($peminjaman as $p): 
                        if ($p['status'] == 0) {
                        ?>
                      <tr>
                        <td><?=$no++ ?></td>
                        <td><?=$p['pinjam_id'] ?></td>
                        <td><?=$p['buku_id'] ?></td>
                        <td><?=$p['id_anggota'] ?></td>
                        <td><?=$p['nama_anggota'] ?></td>
                        <td><?=date("Y-m-d",$p['tgl_pinjam']) ?></td>
                        <td><?=date("Y-m-d",$p['tgl_balik']) ?></td>
                        <td><?=$p['denda'] ?></td>
                      </tr>
                  <?php } ?>
                  <?php endforeach ?>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
 </div>
</section>