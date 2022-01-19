<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"> 
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	.Search {
    margin-top: 10px
}

.btn:hover {
    color: #006400
}

.input-text:focus {
    box-shadow: 0px 0px 0px;
    border-color: #006400;
    outline: 0px
}

.form-control {
    border: 1px solid #006400
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
    <div class="container-fluid">
        <a href="<?= base_url()?>welcome" class="navbar-brand mr-3">Perpustakaan MTs MiftahulFalah</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- <div class="navbar-nav">
                <a href="#" class="nav-item nav-link active">Beranda</a>
                <a href="#" class="nav-item nav-link">Kategori</a>
                <a href="#" class="nav-item nav-link">Info buku</a>
            </div> -->
            <!-- <div class="navbar-nav ml-auto">
                <a href="<?= base_url()?>login" class="nav-item nav-link">Log in</a>
            </div> -->
		
        </div>
		<a href="<?= base_url()?>login" class="btn btn-outline-success mr-3">Log in</a>
    </div>    
</nav>
<div class="container">
    <div class="jumbotron">
		<h1>SEARCH BY - Kategori</h1> 
		<br>
		<div class="Search justify-content-center">
		<div class="row">
			<?php echo form_open('welcome/search') ?>
			<div class="col-md-8">
				<div class="input-group mb-3"> 
					
					<input type="text" name="keyword" class="form-control input-text" placeholder="Search products...." aria-label="Recipient's username" aria-describedby="basic-addon2">
					<div class="input-group-append"> 
						<button class="btn btn-outline-success btn-lg" name="search_submit" type="submit"><i class="fa fa-search"></i>
					</button> 
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<?php echo form_close() ?>
		<br>
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead class="table-primary">
					<tr> 
						<th>No</th>
						<th>ISBN</th>
						<th>JUDUL</th>
						<th>PENERBIT</th>
						<th>PENGARANG</th>
						<th>KATEGORI</th>
					</tr>
				</thead>
				<tbody>
				<?php 
						$no = 1;
                      foreach ($bukuz as $row) { ?>
                      	
                      <tr>
                       <td><?= $no++ ?></td>
                        <td><?= $row['isbn'] ?></td>
                        <td><?= $row['judul'] ?></td>
                        <td><?= $row['nama_penerbit'] ?></td>
                        <td><?= $row['nama_pengarang'] ?></td>
                        <td><?= $row['nama_kategori'] ?> </td>
                      </tr>
                      <?php } ?>
				</tbody>
			</table>
		</div>
    </div>
    <hr>
    <footer>
        <div class="row">
            <div class="col-md-6">
                <p>Copyright &copy; 2021 MTs Miftahul Falah </p>
            </div>
            <!-- <div class="col-md-6 text-md-right">
                <a href="#" class="text-dark">Terms of Use</a> 
                <span class="text-muted mx-2">|</span> 
                <a href="#" class="text-dark">Privacy Policy</a>
            </div> -->
        </div>
    </footer>
</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</html>