<section class="content">
  <!-- Horizontal Form -->
  <div class="container-fluid">
    <h1 class="h3 text-gray-800">Form Tambah Anggota</h1>
      <div class="card card-info">
        <div class="card-header">
          <h4 class="card-title"><?= $judul; ?></h4>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="<?= base_url(); ?>anggota/ubah" class="form-horizontal">
          <div class="card-body">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Id Anggota</label>
              <div class="col-sm-10">
                <input type="text" name="id_anggota" value="<?= $data['id_anggota']; ?>" class="form-control" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">NIS</label>
              <div class="col-sm-10">
                <input type="text" name="nis" class="form-control" value="<?= $data['nis']; ?>" placeholder="Nomor induk siswa" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Anggota</label>
              <div class="col-sm-10">
                <input type="text" name="nama_anggota" class="form-control" value="<?= $data['nama_anggota']; ?>"  placeholder="Nama Anggota" required>
              </div>
            </div>
             <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-10">
                <select name="jenkel" class="form-control" required>
                    <?php if ($data['jenkel'] == "Laki-Laki") { ?>
                         <option value="Laki-Laki" selected>Laki-Laki</option>
                      <?php } else { ?>
                         <option value="Perempuan" selected>Perempuan</option>
                    <?php } ?>
                </select>
              </div>
            </div>
             <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Kelas</label>
              <div class="col-sm-10">
                <select name="kelas" class="form-control" required>
                  <?php if ($data['kelas'] == "Kelas_7") { ?>
                    <option value="Kelas_7" selected>Kelas 7</option>
                  <?php } elseif ($data['kelas'] == "Kelas_8") {?>
                    <option value="Kelas_8" selected>Kelas 8</option>
                  <?php } else { ?>
                    <option value="Kelas_9" selected>Kelas 9</option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                <textarea name="alamat" class="form-control" cols="30" rows="5" required><?= $data['alamat'];?>
                </textarea>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor Handphone</label>
              <div class="col-sm-10">
                <input type="text" name="no_hp" class="form-control" value="<?= $data['no_hp']?>" placeholder="No. Hp"  required>
              </div>
            </div>
          </div>

          <div class="box-footer">
            <a href="<?= base_url()?>anggota" class="btn btn-warning mb-4 "> cancel </a>
            <button type="submit" class="btn btn-primary mb-4">Simpan</button>
          </div>
       
        </form>
      </div>
    </div>
</section>