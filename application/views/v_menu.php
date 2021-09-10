<aside class="main-sidebar">
<section class="sidebar">
<!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url()?>dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->

    <!-- Heading -->
    <!-- <div class="sidebar-heading">
        Interface
    </div> -->
   <!--  <li class="nav-item">
        <a class="nav-link" href="<?= base_url()?>anggota">
            <i class="fas fa-user-plus"></i>
            <span>Data Anggota</span></a>
    </li> -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pengguna"
            aria-expanded="true" aria-controls="pengguna">
            <i class="fas fa-user-plus"></i>
            <span>Data Pengguna</span>
        </a>
        <div id="pengguna" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pengguna</h6>
                <a class="collapse-item" href="#">Petugas</a>
                <a class="collapse-item" href="<?= base_url()?>anggota">Anggota</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-book"></i>
            <span>Master Buku</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Master Buku</h6>
                <a class="collapse-item" href="<?= base_url()?>Buku">Data Buku</a>
                <a class="collapse-item" href="<?= base_url()?>Rak">Rak Buku</a>
                <a class="collapse-item" href="<?= base_url()?>Buku/kategori">Kategori Buku</a>
                <a class="collapse-item" href="#">Penerbit</a>
                <a class="collapse-item" href="#">Pengarang</a>
                <a class="collapse-item" href="#">Bahasa</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-dollar-sign"></i>
            <span>Transaksi</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Transaksi</h6>
                <a class="collapse-item" href="<?= base_url()?>Transaksi">Peminjaman</a>
                <a class="collapse-item" href="<?= base_url()?>Transaksi/pengembalian">Pengembalian</a>
                <a class="collapse-item" href="<?= base_url()?>Transaksi/denda">Denda</a>
            </div>
        </div>
    </li>
    
    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url()?>laporan">
            <i class="far fa-file-alt"></i>
            <span>Laporan</span></a>
    </li>
</section>
</aside>