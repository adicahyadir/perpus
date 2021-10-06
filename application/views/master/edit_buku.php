<section class="content">
<div class="col-md-12">
  <div class="box box-info">
    
    <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary"><?= $judul;?></h6>
     </div> 
  
     <form method="post" action="<?= base_url()?>databuku/update" class="form-horizontal" >
        <div class="modal-body">
          <div class="col-md-12">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Buku Id</label>
                    <input type="text" class="form-control" name="buku_id" value="<?= $data['buku_id'];?>"  readonly >
                    </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Isbn</label>
                    <input type="text" name="isbn" value="<?= $data['isbn'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" name="judul" value="<?= $data['judul'];?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Pengarang</label>
                    <select class="form-control select2" required="required"  name="id_pengarang">
                      <option disabled selected value> -- Pilih Pengarang -- </option>
                      <?php foreach ($pengarang as $pilih): ?>
                        <option value=<?=$pilih->id_pengarang  ?>><?=$pilih->nama_pengarang  ?></option>
                      <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tahun</label>
                    <input type="date" name="tahun" value="<?= $data['tahun'];?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Halaman</label>
                    <input type="number" name="Halaman" value="<?= $data['halaman'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Buku</label>
                    <input type="number" name="jumlah" value="<?= $data['jumlah'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Penerbit</label>
                    <select class="form-control select2" required="required"  name="id_penerbit">
                      <option disabled selected value> -- Pilih Penerbit -- </option>
                      <?php foreach ($penerbit as $pilih): ?>
                        <option value=<?=$pilih->id_penerbit  ?>><?= $pilih->nama_penerbit  ?></option>
                      <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Bahasa</label>
                    <select class="form-control select2" required="required"  name="id_bahasa">
                      <option disabled selected value> -- Pilih Bahasa -- </option>
                      <?php foreach ($bahasa as $pilih): ?>
                        <option value=<?=$pilih->id_bahasa  ?>><?= $pilih->nama_bahasa  ?></option>
                      <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kategori</label>
                    <select class="form-control select2" required="required"  name="id_kategori">
                      <option disabled selected value> -- Pilih Kategori -- </option>
                      <?php foreach ($katagori as $pilih): ?>
                        <option value=<?=$pilih->id_kategori  ?>><?= $pilih->nama_kategori  ?></option>
                      <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Rak</label>
                    <select class="form-control select2" required="required"  name="id_rak">
                        <option disabled selected value> -- Pilih Rak -- </option>
                        <?php foreach ($rak as $pilih): ?>
                        <option value=<?=$pilih->id_rak  ?>><?= $pilih->nama_rak  ?></option>
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
</section>