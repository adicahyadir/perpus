<section class="content">
<div class="col-md-12">
  <div class="box box-info">
    <!-- <div class="box-header with-border">
      <h3 class="box-title"><?= $judul;?></h3>
    </div> -->
    <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary"><?= $judul;?></h6>
     </div>
 
    <form method="post" action="<?= base_url()?>penerbit/update" class="form-horizontal" >
      <div class="box-body">
        
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">No-Penerbit</label>
          <div class="col-sm-10">
            <input type="text" name="id_penerbit" value="<?= $data['id_penerbit'] ?>" class="form-control" readonly>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Nama Penerbit</label>
          <div class="col-sm-10">
            <input type="text" name="nama_penerbit" class="form-control" value="<?= $data['nama_penerbit'] ?>" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
          <div class="col-sm-10">
            <input type="text" name="alamat" class="form-control" value="<?= $data['alamat'] ?>" required>
          </div>
        </div>

      <div class="box-footer">
        <a href="<?= base_url()?>penerbit" class="btn btn-warning">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>
</section>