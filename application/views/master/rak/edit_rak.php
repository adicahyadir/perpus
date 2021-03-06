<section class="content">
<div class="col-md-12">
  <div class="box box-info">
    <!-- <div class="box-header with-border">
      <h3 class="box-title"><?= $judul;?></h3>
    </div> -->
    <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary"><?= $judul;?></h6>
     </div>
 
    <form method="post" action="<?= base_url()?>rak/update" class="form-horizontal" >
      <div class="box-body">

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">No-Rak</label>
          <div class="col-sm-10">
            <input type="text" name="id_rak" value="<?= $data['id_rak'] ?>" class="form-control" readonly>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Rak</label>
          <div class="col-sm-10">
            <input type="text" name="nama_rak" class="form-control" value="<?= $data['nama_rak'] ?>" required>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Kategori</label>
          <div class="col-sm-10">
            <input type="text" name="baris_rak" class="form-control" value="<?= $data['baris_rak'] ?>" required>
          </div>
        </div>

      <div class="box-footer">
        <a href="<?= base_url()?>rak" class="btn btn-warning">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>
</section>