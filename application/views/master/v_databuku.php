<section class="content">
 <!-- Page Heading -->
 <div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Buku</h1>
    <p class="mb-4">Daftar Buku Perpustakaan</p>

    <!-- DataTales Example -->
    <div class="mb-4" style="position: float-right">
            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal1">Tambah</a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-2">
            <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
        </div>
        <div class="card-body ">
            <div class="table-responsive">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="">
                    <thead class="table-primary"> 
                        <tr>
                            <th>No</th>
                            <th>No Isbn</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Tahun Masuk</th>
                            <th>Jumlah Halaman</th>
                            <th>Penerbit</th>
                            <th>Bahasa</th>
                            <th>Kategori</th>
                            <th>Rak</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($data as $row) { ?>
                      <tr>
                        <td><?= $row['buku_id'] ?></td>
                        <td><?= $row['isbn'] ?></td>
                        <td><?= $row['judul'] ?></td>
                        <td><?= $row['nama_pengarang'] ?></td>
                        <td><?= $row['tahun'] ?></td>
                        <td><?= $row['halaman'] ?></td>
                        <td><?= $row['nama_penerbit'] ?></td>
                        <td><?= $row['nama_bahasa'] ?></td>
                        <td><?= $row['nama_kategori'] ?></td>
                        <td><?= $row['nama_rak'] ?></td>
                        <td>
                          <a href="<?= base_url()?>databuku/edit/<?= $row['buku_id'];?>"><button  class="btn btn-success" ><i class="fa fa-edit"></i>Edit</button></a>
                          <a href="<?= base_url()?>databuku/hapus/<?= $row['buku_id'];?>"><button  class="btn btn-danger" onclick="return confirm('Yakin untuk Menghapus Data?')"  ><i class="fa fa-trust"></i>Hapus</button></a>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>

  <!-- Modal tambah-->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
      </div>
      <form method="post" action="<?= base_url()?>databuku/simpan" class="form-horizontal" >
        <div class="modal-body">
          <div class="col-md-12">
            <div class="box-body">
                <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Buku Id</label>
                    <input type="text" name="nama_rak" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                </div> -->
                 <div class="form-group">
                    <label for="exampleInputEmail1">Isbn</label>
                    <input type="text" name="isbn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isbn 0x" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Pengarang</label>
                    <select class="form-control select2" required="required"  name="id_pengarang">
                      <option disabled selected value> -- Pilih Pengarang -- </option>
                      <?php foreach ($data as $pilih): ?>
                        <option value="<?= $pilih['id_pengarang']  ?>"><?= $pilih['nama_pengarang']  ?></option>
                      <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tahun</label>
                    <input type="date" name="tahun" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tahun" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Halaman</label>
                    <input type="number" name="halaman" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Halaman" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Penerbit</label>
                    <select class="form-control select2" required="required"  name="id_penerbit">
                      <option disabled selected value> -- Pilih Penerbit -- </option>
                      <?php foreach ($data as $pilih): ?>
                        <option value="<?= $pilih['id_penerbit']  ?>"><?= $pilih['nama_penerbit']  ?></option>
                      <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Bahasa</label>
                    <select class="form-control select2" required="required"  name="id_bahasa">
                      <option disabled selected value> -- Pilih Bahasa -- </option>
                      <?php foreach ($data as $pilih): ?>
                        <option value="<?= $pilih['id_bahasa']  ?>"><?= $pilih['nama_bahasa'] ?></option>
                      <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kategori</label>
                    <select class="form-control select2" required="required"  name="id_kategori">
                      <option disabled selected value> -- Pilih Kategori -- </option>
                      <?php foreach ($data as $pilih): ?>
                        <option value="<?= $pilih['id_kategori']  ?>"><?= $pilih['nama_kategori']  ?></option>
                      <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Rak</label>
                    <select class="form-control select2" required="required"  name="id_rak">
                        <option disabled selected value> -- Pilih Rak -- </option>
                        <?php foreach ($data as $pilih): ?>
                          <option value="<?= $pilih['id_rak']  ?>"><?= $pilih['nama_rak']  ?></option>
                        <?php endforeach ?>
                    </select>
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