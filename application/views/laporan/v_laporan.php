<section class="content">
 <!-- Page Heading -->
<!-- <div class="col-sm-9 col-md-6">
  <h1>Laporan Transkasi</h1>
</div> -->
		<!-- <?php echo form_open('laporan/cetak') ?>
  <div class="row px-3 py-3">
          <div class="col-lg-3">
              <div class="form-group">
              <label for="label">Tanggal Awal</label>
              <input type="date" name="tglawal" id="tglawal" class="form-control" />
              </div>
            </div>

            <div class="col-lg-3">
              <div class="form-group"> -->
                <!-- <input type="text" name="item_code" class="form-control" id="item_code_create" hidden> -->
               <!--  <label for="label">Tanggal Akhir</label>
                <input type="date" name="tglakhir" id="tglakhir" class="form-control" />
              </div>
            </div>

            <div class="col-lg-3">
              <div class="form-group">
                <input type="text" name="item_code" class="form-control" id="item_code_create" hidden>
                <label for="label">Status</label>
                <select name="status" class="form-control" id="status" autofocus required>
                  <option disabled selected value>Pilih Status</option>
                  <option value="0">Peminjaman</option>
                  <option value="1">Pengembalian</option>
                </select>
              </div>
            </div>
          </div> -->
       <!--    <div class="col-sm-9 col-md-6">
            <button class="btn btn-outline-success btn-lg " name="laporan" type="submit"><i class="fa fa-search">Cetak Laporan Pertanggal</i>
          </button> 
          </div>
          
              	<?php echo form_close() ?>
          
           <div class="row px-3 py-0">
            <div class="col-lg-6">
              <div class="form-group"> -->
           
              	
                <!-- <a id="masuk" href="" onclick="this.href='/laporan/cetak/'+ document.getElementById('tglawal').value + '/' + 
                document.getElementById('tglakhir').value +'/'+ document.getElementById('status').value " target="_BLANK" class="btn btn-primary col-md-12">Cetak Laporan Pertanggal <i class="fas fa-print"></i></a> -->
  <!--             </div>
            </div>
          </div>
</form>
<br>
<br>
 -->





<br>
   <div class="box box-info">
    <div class="box-header with-border">
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" action="laporan/cetak" target="_blank" method="post">
      <div class="box-body col-lg col-md-6">
        <label>
          <h2>Cetak Laporan Peminjaman Buku</h2>
        </label>
        <select class="form-control col-lg-3" name="bulan">
          <option disabled selected value> -- Pilih Bulan -- </option>
          <?php
            $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
            $jlh_bln=count($bulan);
            for($c=0; $c<$jlh_bln; $c+=1){
                echo"<option value=$c> $bulan[$c] </option>";
            }
          ?>
        </select>
      </div>
      <div class="box-body col-lg col-md-6">
        <label></label>
        <select class="form-control col-lg-3" name="tahun" required>
          <option disabled selected value> -- Pilih Tahun -- </option>
          <?php
            $now=date('Y');
            for ($a=2016;$a<=$now;$a++)
            {
                 echo "<option value='$a'>$a</option>";
            }
          ?>
        </select>
      </div>
      <br>
      <!-- /.box-body -->
      <div class="box-footer col-sm-9 col-md-6">
        <button type="submit" class="btn btn-info " ><i class="fa fa-print"></i>  Cetak</button>
      </div>
    </form>
  </div>

</section>
