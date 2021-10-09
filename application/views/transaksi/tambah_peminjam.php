<section>
  <div class="container-fluid">
  <div class="col-md-12">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title"><?= $judul;?></h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form method="post" action="<?= base_url()?>Peminjaman/simpan" class="form-horizontal" >
      <div class="box-body">
 
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">No Peminjam</label>
          <div class="col-sm-10">
            <input type="text" name="pinjam_id" value="<?= $kode;?>" class="form-control" readonly>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Pinjam</label>
          <div class="col-sm-2">
            <input type="date" name="tgl_pinjam" class="form-control" value="<?= date('Y-m-d');?>" readonly>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Anggota</label>
          <div class="col-sm-10">
            <select name="anggota" class="form-control" >
              <option value=""> - Pilih Anggota - </option>
              <?php foreach ($anggota as $key => $value) {?>
                <option value="<?= $value['id_anggota'] ?>"><?=$value['nis'] ?> - <?= $value['nama_anggota'] ?></option>
              <?php } ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Buku 1</label>
          <div class="col-sm-10">
            <select name="buku_id1" class="form-control" required>
              <option value=""> - Pilih Buku - </option>
              <?php foreach ($buku as $key => $value) {?>
                <?php if ($value['jumlah'] >= 0): ?>
                  <option value="<?= $value['buku_id'] ?>"><?=$value['judul'] ?> - ISBN : <?= $value['isbn'] ?></option>
                <?php endif ?>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Buku 2</label>
          <div class="col-sm-10">
            <select name="buku_id2" class="form-control">
              <option value=""> - Pilih Buku - </option>
              <?php foreach ($buku as $key => $value) {?>
                <?php if ($value['jumlah'] > 0): ?>
                 <option value="<?= $value['buku_id'] ?>"><?=$value['judul'] ?> - ISBN : <?= $value['isbn'] ?></option>
                <?php endif ?>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Buku 3</label>
          <div class="col-sm-10">
            <select name="buku_id3" class="form-control">
              <option value=""> - Pilih Buku - </option>
              <?php foreach ($buku as $key => $value) {?>
                <?php if ($value['jumlah'] >= 0): ?>
                  <option value="<?= $value['buku_id'] ?>"><?=$value['judul'] ?> - ISBN : <?= $value['isbn'] ?></option>
                <?php endif ?>
              <?php } ?>
            </select>
          </div>
        </div>

        
        
      <div class="box-footer">
        <a href="<?= base_url()?>Peminjaman" class="btn btn-warning">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
  </div>        
  </div>
</section>