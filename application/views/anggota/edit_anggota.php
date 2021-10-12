<section class="content">
<div class="col-md-12">
  <div class="box box-info">
    <!-- <div class="box-header with-border">
      <h3 class="box-title"><?= $judul;?></h3>
    </div> -->
    <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary"><?= $judul;?></h6>
     </div>
  
    <form method="post" action="<?= base_url()?>anggota/update" class="form-horizontal" >
      <div class="box-body">
        
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">No Anggota</label>
          <div class="col-sm-10">
            <input type="text" name="id_anggota" value="<?= $data['id_anggota'] ?>" class="form-control" readonly>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Nis</label>
          <div class="col-sm-10">
            <input type="number" name="nis" class="form-control" value="<?= $data['nis'] ?>" required>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Nama Anggota</label>
          <div class="col-sm-10">
            <input type="text" name="nama_anggota" class="form-control" value="<?= $data['nama_anggota'] ?>" required>
          </div>
        </div>
         <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
          <div class="col-sm-10">
            <input type="text" name="jenkel" class="form-control" value="<?= $data['jenkel'] ?>" required>
          </div>
        </div>
         <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Kelas</label>
          <div class="col-sm-10">
            <input type="number" name="kelas" class="form-control" value="<?= $data['kelas'] ?>" required>
          </div>
        </div>
         <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
          <div class="col-sm-10">
            <input type="text" name="alamat" class="form-control" value="<?= $data['alamat'] ?>" required>
          </div>
        </div>
         <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">No Hp</label>
          <div class="col-sm-10">
            <input type="number" name="no_hp" class="form-control" value="<?= $data['no_hp'] ?>" required>
          </div>
        </div>

      <div class="box-footer">
        <a href="<?= base_url()?>anggota" class="btn btn-warning">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>
</section>