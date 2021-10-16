<aside class="main-sidebar">
<section class="sidebar">
<!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url()?>dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Halaman Utama</span></a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pengguna"
            aria-expanded="true" aria-controls="pengguna">
            <i class="fas fa-user-plus"></i>
            <span>Data Keanggotaan</span>
        </a>
        <div id="pengguna" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Keanggotaan</h6>
                <!-- <a class="collapse-item" href="#">Petugas</a> -->
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
                <a class="collapse-item" href="<?= base_url()?>databuku">Data Buku</a>
                <a class="collapse-item" href="<?= base_url()?>rak">Rak Buku</a>
                <a class="collapse-item" href="<?= base_url()?>kategori">Kategori Buku</a>
                <a class="collapse-item" href="<?= base_url()?>penerbit">Penerbit</a>
                <a class="collapse-item" href="<?= base_url()?>pengarang">Pengarang</a>
                <a class="collapse-item" href="<?= base_url()?>bahasa">Bahasa</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-dollar-sign"></i>
            <span>Peminjaman & Pengembalian</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Peminjaman & Pengembalian</h6>
                <a class="collapse-item" href="<?= base_url()?>Peminjaman">Peminjaman</a>
                <a class="collapse-item" href="<?= base_url()?>Pengembalian">Pengembalian</a>
                <a class="collapse-item" href="<?= base_url()?>Denda">Denda</a>
            </div>
        </div>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url()?>laporan">
            <i class="far fa-file-alt"></i>
            <span>Laporan</span></a>
    </li>
</section>
</aside>