<section class="content">
 <!-- Page Heading -->
 <div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Denda</h1>
    <p class="mb-4">Harga Denda</p>

    <!-- DataTales Example -->
  <!--   <div class="mb-4" style="position: float-right">
            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal1">Tambah</a>
    </div> -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Denda</h6>
            <?= $this->session->flashdata('info_dd');?>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered"  width="100%" cellspacing="0">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>Denda</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    // $no = 1;
                    foreach ($data as $row) {?>
                        <tr>
                            <td><?= $row->id_denda; ?></td>
                            <td>Rp . <?= $row->harga_denda;?> -,</td>
                        <td>
                                <a href="<?= base_url()?>denda/edit/<?= $row->id_denda;?>"><button class="btn btn-success"><i class="fa fa-edit"></i>Edit</button></a>
                                <!-- <a href="<?= base_url()?>denda/hapus/<?= $row->id_denda;?>" onclick="return confirm('Yakin untuk Menghapus Data?')" ><button class="btn btn-danger"><i class="fa fa-trust"></i>Hapus</button></a> -->
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Denda</h5>
      </div>
      <form method="post" action="<?= base_url()?>denda/simpan" class="form-horizontal" >
        <div class="modal-body">
          <div class="col-md-12">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Harga Denda</label>
                    <input type="text" name="harga_denda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Denda Rp. 500" required>
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