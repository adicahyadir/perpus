<section class="content">
 <!-- Page Heading -->
 <div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Pengarang</h1>
    <p class="mb-4">Pengarang buku</p>

    <!-- DataTales Example -->
    <div class="mb-4" style="position: float-right">
            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal1">Tambah</a>
            <?= $this->session->flashdata('info_dp');?>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Pengarang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>Pengarang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    foreach ($data as $row) {?>
                        <tr>
                            <td><?= $no++;?></td>
                            <td><?= $row->nama_pengarang;?></td>
                            <td>
                                <a href="<?= base_url()?>pengarang/edit/<?= $row->id_pengarang;?>"><button class="btn btn-success"><i class="fa fa-edit"></i>Edit</button></a>
                                <a href="<?= base_url()?>pengarang/hapus/<?= $row->id_pengarang;?>" onclick="return confirm('Yakin untuk Menghapus Data?')" ><button class="btn btn-danger"><i class="fa fa-trust"></i>Hapus</button></a>
                            </td>
                        </tr>
                    <?php } ?>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengarang</h5>
      </div>
      <form method="post" action="<?= base_url()?>pengarang/simpan" class="form-horizontal" >
        <div class="modal-body">
          <div class="col-md-12">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pengarang</label>
                    <input type="text" name="nama_pengarang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pengarang" required>
                </div>
            </div>
          </div>        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>

    </div>
  </div>
</div>


</section>