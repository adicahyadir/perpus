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
          <h2>Cetak Laporan Anggota</h2>
        </label>
      </div>
      <div class="box-body col-lg col-md-6">
        <label></label>
        <select class="form-control col-lg" name="kelas" required>
          <option disabled selected value> -- Pilih Kelas -- </option>
      
        </select>
      </div>
      <br>
      <!-- /.box-body -->
      <div class="box-footer col-sm-9 col-md-6">
        <button type="submit" class="btn btn-info " ><i class="fa fa-print"></i>  Cetak</button>
      </div>
    </form>
  </div>

 <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nis</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>No_hp</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            foreach ($data as $row) {?>
                <tr>
                    <td><?= $no++;?></td>
                    <td><?= $row->nis;?></td>
                    <td><?= $row->nama_anggota;?></td>
                    <td><?= $row->jenkel;?></td>
                    <td><?= $row->kelas;?></td>
                    <td><?= $row->alamat;?></td>
                    <td><?= $row->no_hp;?></td>
                </tr>
            <?php } ?>
            
            </tbody>
        </table>
    </div>
   </div>

</section>
