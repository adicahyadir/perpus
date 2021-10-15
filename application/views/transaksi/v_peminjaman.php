<section class="content">
 <!-- Page Heading -->
 <div class="container-fluid">  
    <h1 class="h3 mb-2 text-gray-800">Peminjaman</h1>
    <p class="mb-4">Daftar Peminjam buku</p>

    
    <div class=" mb-4" style="position: float-right">
        <a href="<?= base_url()?>Peminjaman/tambah_peminjam" class="btn btn-success"></i>Tambah</a>
        <?= $this->session->flashdata('info_p');?>
    </div>
        <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Peminjaman</h6>
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
                          <th>Tanggal Kembali</th>
                          <th>Denda</th>
                          <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          $no = 1; 
                          foreach ($peminjaman as $p): 
                            $harga = 0;
                            if ($p['status'] == 1) {
                            $tgl_kembali = $p['tgl_pinjam'] + 259200;
                            ?>
                          <tr>
                            <td><?=$no++ ?></td>
                            <td><?=$p['pinjam_id'] ?></td>
                            <td><?=$p['buku_id'] ?></td>
                            <td><?=$p['id_anggota'] ?></td>
                            <td><?=$p['nama_anggota'] ?></td>
                            <td><?=date("d-M-Y",$p['tgl_pinjam']) ?></td>
                            <td><?=date("d-M-Y",$tgl_kembali) ?></td>

                            <?php if ($tgl_kembali < time()): 
                              $denda = time() - $tgl_kembali;

                              do {
                                $harga += $harga_denda;
                                $denda -= 86400;
                              } while ($denda > 86400);
                              ?>
                              
                            <?php endif ?>

                            <td><?=$harga ?></td>
                            <td><button class="btn btn-warning"  data-toggle="modal" data-target="#exampleModal<?=$p['id_pinjam'] ?>" ><i class="fa fa-sign-out"> Dikembalikan</i></button></td>
                          </tr>
                        <?php } ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 </div>
 <?php foreach ($peminjaman as $p) { ?>
  <?php 
    $harga = 0;
    $tgl_kembali = $p['tgl_pinjam'] + 259200;

    if ($tgl_kembali < time()){
      $denda = time() - $tgl_kembali;

      do {
        $harga += $harga_denda;
        $denda -= 86400;
      } while ($denda > 86400);
    }
   ?> 
<!-- Modal -->
<div class="modal fade" id="exampleModal<?=$p['id_pinjam'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pengembalian</h5>
      </div>

      <form method="post" action="<?= base_url()?>peminjaman/update" class="form-horizontal" >
        <div class="modal-body">
          <div class="col-md-12">
            <div class="box-body">
            <div class="form-group">
              <h6>Yakin untuk mengembalikan buku : <?=$p['buku_id'] ?></h6>
            <input type="hidden" name="id_pinjam" value="<?=$p['id_pinjam'] ?>" class="form-control">
            <input type="hidden" name="buku_id" value="<?=$p['buku_id'] ?>" class="form-control">
            <input type="hidden" name="denda" value="<?=$harga ?>" class="form-control">
            </div>
            </div>
          </div>        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Kembalikan</button>
        </div>
      </form>

    </div>
  </div>
</div>
<?php } ?>
</section>