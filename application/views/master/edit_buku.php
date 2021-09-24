<section class="content">
<div class="col-md-12">
  <div class="box box-info">
    
    <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary"><?= $judul;?></h6>
     </div>
  
    <form method="post" action="<?= base_url()?>databuku/update" class="form-horizontal" >
      <div class="box-body">
        
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">No-Buku</label>
          <div class="col-sm-10">
            <input type="text" name="id_rak" value="<?= $data['id_rak'] ?>" class="form-control" readonly>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Isbn</label>
          <div class="col-sm-10">
            <input type="text" name="nama_rak" class="form-control" value="<?= $data['nama_rak'] ?>" required>
          </div>
        </div>


        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Judul</label>
          <div class="col-sm-10">
            <input type="text" name="nama_rak" class="form-control" value="<?= $data['nama_rak'] ?>" required>
          </div>
        </div>


        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Pengarang</label>
          <div class="col-sm-10">
            <input type="text" name="nama_rak" class="form-control" value="<?= $data['nama_rak'] ?>" required>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Tahun</label>
          <div class="col-sm-10">
            <input type="text" name="nama_rak" class="form-control" value="<?= $data['nama_rak'] ?>" required>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Halaman</label>
          <div class="col-sm-10">
            <input type="text" name="nama_rak" class="form-control" value="<?= $data['nama_rak'] ?>" required>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Penerbit</label>
          <div class="col-sm-10">
            <input type="text" name="nama_rak" class="form-control" value="<?= $data['nama_rak'] ?>" required>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Bahasa</label>
          <div class="col-sm-10">
            <input type="text" name="nama_rak" class="form-control" value="<?= $data['nama_rak'] ?>" required>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Kategori</label>
          <div class="col-sm-10">
            <input type="text" name="nama_rak" class="form-control" value="<?= $data['nama_rak'] ?>" required>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Rak</label>
          <div class="col-sm-10">
            <input type="text" name="nama_rak" class="form-control" value="<?= $data['nama_rak'] ?>" required>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Nama Rak</label>
          <div class="col-sm-10">
            <input type="text" name="nama_rak" class="form-control" value="<?= $data['nama_rak'] ?>" required>
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