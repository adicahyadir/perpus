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
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Buku Id</th>
                            <th>No Isbn</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Tahun</th>
                            <th>Halaman</th>
                            <th>Penerbit</th>
                            <th>Bahasa</th>
                            <th>Kategori</th>
                            <th>Rak</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    
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
                <div class="form-group">
                    <label for="exampleInputEmail1">Buku Id</label>
                    <input type="text" name="nama_rak" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Isbn</label>
                    <input type="text" name="baris_rak" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isbn 0x" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" name="baris_rak" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isbn 0x" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Pengarang</label>
                    <input type="text" name="baris_rak" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isbn 0x" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tahun</label>
                    <input type="text" name="baris_rak" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isbn 0x" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Halaman</label>
                    <input type="text" name="baris_rak" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isbn 0x" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Penerbit</label>
                    <input type="text" name="baris_rak" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isbn 0x" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Bahasa</label>
                    <input type="text" name="baris_rak" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isbn 0x" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kategori</label>
                    <input type="text" name="baris_rak" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isbn 0x" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Rak</label>
                    <input type="text" name="baris_rak" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isbn 0x" required>
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