<section class="content">
	  <div class="col-md-12">
  <div class="box box-info">
    <div class="box-header with-border">
     
      <h3 class="box-title"><?= $judul;?></h3>

    </div>

    <form method="post" action="<?= base_url()?>denda/update" class="form-horizontal" >
      <div class="box-body">
        
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">No Denda</label>
          <div class="col-sm-10">
            <input type="text" name="id_denda" value="<?= $data['id_denda'] ?>" class="form-control" readonly>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Harga Denda</label>
          <div class="col-sm-10">
            <input type="text" name="harga_denda" class="form-control" value="<?= $data['harga_denda'] ?>" required>
          </div>
        </div>
      <div class="box-footer">
        <a href="<?= base_url()?>denda" class="btn btn-warning">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>        
</section>