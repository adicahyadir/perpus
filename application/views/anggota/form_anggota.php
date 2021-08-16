<section class="content">
  <!-- Horizontal Form -->
  <div class="container-fluid">
    <h1 class="h3 text-gray-800">Form Tambah Anggota</h1>
      <div class="card card-info">
        <div class="card-header">
          <h4 class="card-title"><?= $judul;?></h4>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="<?= base_url()?>anggota/simpan" class="form-horizontal">
          <div class="card-body">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Id Anggota</label>
              <div class="col-sm-10">
                <input type="text" name="id_anggota" value="<?= $id_anggota;?>" class="form-control" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">NIS</label>
              <div class="col-sm-10">
                <input type="text" name="nis" class="form-control" placeholder="Nomor induk siswa" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Anggota</label>
              <div class="col-sm-10">
                <input type="text" name="nama_anggota" class="form-control" placeholder="Nama Anggota" required>
              </div>
            </div>
             <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-10">
                <select name="jenkel" class="form-control" required>
                    <option value=""> - Pilih Jenis Kelamin - </option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
              </div>
            </div>
             <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-10">
                <select name="kelas" class="form-control" required>
                    <option value=""> - Pilih Kelas - </option>
                    <option value="Kelas 7">Kelas 7</option>
                    <option value="Kelas 8">Kelas 8</option>
                    <option value="Kelas 9">Kelas 9</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                <textarea name="alamat" class="form-control" cols="30" rows="5" required>
                </textarea>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor Handphone</label>
              <div class="col-sm-10">
                <input type="text" name="no_hp" class="form-control" placeholder="No. Hp"  required>
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