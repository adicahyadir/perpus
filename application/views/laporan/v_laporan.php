<section class="content">
 <!-- Page Heading -->
 <div class="container-fluid">
 	<h1>Laporan Transaksi</h1>

	</div>
		<?php echo form_open('laporan/cetak') ?>
  <div class="row px-3 py-3">
          <div class="col-lg-3">
              <div class="form-group">
              <label for="label">Tanggal Awal</label>
              <input type="date" name="tglawal" id="tglawal" class="form-control" />
              </div>
            </div>

            <div class="col-lg-3">
              <div class="form-group">
                <!-- <input type="text" name="item_code" class="form-control" id="item_code_create" hidden> -->
                <label for="label">Tanggal Akhir</label>
                <input type="date" name="tglakhir" id="tglakhir" class="form-control" />
              </div>
            </div>

            <div class="col-lg-3">
              <div class="form-group">
                <input type="text" name="item_code" class="form-control" id="item_code_create" hidden>
                <label for="label">Status</label>
                <select name="status" class="form-control" id="status" autofocus required>
                  <option value="">Pilih Status</option>
                  <option value="0">Peminjaman</option>
                  <option value="1">Pengembalia</option>
                </select>
              </div>
            </div>
          </div>
          <button class="btn btn-outline-success btn-lg" name="laporan" type="submit"><i class="fa fa-search">Cetak Laporan Pertanggal</i>
					</button> 
              	<?php echo form_close() ?>
          
           <div class="row px-3 py-0">
            <div class="col-lg-6">
              <div class="form-group">
           
              	
                <!-- <a id="masuk" href="" onclick="this.href='/laporan/cetak/'+ document.getElementById('tglawal').value + '/' + 
                document.getElementById('tglakhir').value +'/'+ document.getElementById('status').value " target="_BLANK" class="btn btn-primary col-md-12">Cetak Laporan Pertanggal <i class="fas fa-print"></i></a> -->
              </div>
            </div>
          </div>
</form>


</section>
