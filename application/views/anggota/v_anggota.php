<section class="content">
 <!-- Page Heading -->
 <div class="container-fluid">
    <h1 class="h3 text-gray-800"><?= $judul;?></h1>
    
    <p class="mb-4">anggota terdaftar di Perpustakaan <a target="_blank"
            href="#">MTs Sa Miftahul Falah</a>.</p>
    
    <?php if (!empty($this->session->flashdata('info'))) {?>
        <div class="alert alert-success" role="alert">
        <?= $this->session->flashdata('info'); ?>
        </div>
    <?php }
    ?>

    <!-- DataTales Example -->
   
        <div class=" mb-4" style="position: float-right">
            <a href="<?= base_url()?>anggota/tambah_anggota" class="btn btn-success "><i class="fas fa-plus"></i> Tambah</a>
        </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-1 font-weight-bold text-primary">Tabel Anggota</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id Anggota</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Kelas</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                  <!--   <tfoot>
                        <tr>
                            <th>id Anggota</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Kelas</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>AKSI</th>
                        </tr>
                    </tfoot> -->
                    <tbody>
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
</section>