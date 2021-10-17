<section class="content">
<br>
   <div class="box box-info">
    <div class="box-header with-border">
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" action="laporan/cetak" target="_blank" method="post">
      <div class="box-body col-lg col-md-6">
        <label>
          <h2>Cetak Laporan</h2>
          <h4>Peminjaman dan Pengembalian</h4>
        </label>
        <select class="form-control col-lg" name="bulan">
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
        <select class="form-control col-lg" name="tahun" required>
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
