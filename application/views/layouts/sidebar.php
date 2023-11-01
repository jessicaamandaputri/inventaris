<?php
if ($this->session->userdata('level') == 'administrator') {?>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-text mx-3">APLIKASI INVENTARIS</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url()?>Dashboard">
        <i class="fas fa-fw fa-home"></i>
        <span>Beranda</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Menu Utama
</div>

<!-- Nav Item - Data Anggota -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url()?>Anggota">
        <i class="fas fa-fw fa-users"></i>
        <span>Data Anggota</span></a>
</li>

<!-- Nav Item - MasterBarang Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMasterBarang"
        aria-expanded="true" aria-controls="collapseMasterBarang">
        <i class="fas fa-fw fa-box"></i>
        <span>Data Master Barang</span>
    </a>
    <div id="collapseMasterBarang" class="collapse" aria-labelledby="headingMasterBarang"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="<?= base_url()?>Barang">Data Barang</a>
        <a class="collapse-item" href="<?= base_url()?>Jenis_barang">Jenis Barang</a>
        </div>
    </div>
</li>

<!-- Nav Item - Transaksi Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTransaksi"
        aria-expanded="true" aria-controls="collapseTransaksi">
        <i class="fas fa-fw fa-credit-card"></i>
        <span>Transaksi</span>
    </a>
    <div id="collapseTransaksi" class="collapse" aria-labelledby="headingTransaksi"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="<?= base_url()?>Pinjam">Peminjaman</a>
        <a class="collapse-item" href="<?= base_url()?>Kembali">Pengembalian</a>
        </div>
    </div>
</li>

<!-- Nav Item - Laporan Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLaporan"
        aria-expanded="true" aria-controls="collapseLaporan">
        <i class="fas fa-fw fa-file"></i>
        <span>Laporan</span>
    </a>
    <div id="collapseLaporan" class="collapse" aria-labelledby="headingLaporan"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="<?= base_url()?>Laporan/pinjam">Laporan Peminjaman</a>
        <a class="collapse-item" href="<?= base_url()?>Laporan/kembali">Laporan Pengembalian</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Lainnya
</div>

<!-- Nav Item - Logout-->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url()?>Login/logout">
    <i class="fas fa-sign-out-alt"></i>
    <span>Logout</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>

<?php } else { ?>
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3">APLIKASI INVENTARIS</div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url()?>Dashboard">
            <i class="fas fa-fw fa-home"></i>
            <span>Beranda</span></a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider">
    
    <!-- Heading -->
    <div class="sidebar-heading">
        Menu Utama
    </div>
    
    <!-- Nav Item - Data Anggota -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url()?>Anggota">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Anggota</span></a>
    </li>
    
    <!-- Nav Item - MasterBarang Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMasterBarang"
            aria-expanded="true" aria-controls="collapseMasterBarang">
            <i class="fas fa-fw fa-box"></i>
            <span>Data Master Barang</span>
        </a>
        <div id="collapseMasterBarang" class="collapse" aria-labelledby="headingMasterBarang"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url()?>Barang">Data Barang</a>
            <a class="collapse-item" href="<?= base_url()?>Jenis_barang">Jenis Barang</a>
            </div>
        </div>
    </li>
    
    <!-- Nav Item - Transaksi Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTransaksi"
            aria-expanded="true" aria-controls="collapseTransaksi">
            <i class="fas fa-fw fa-credit-card"></i>
            <span>Transaksi</span>
        </a>
        <div id="collapseTransaksi" class="collapse" aria-labelledby="headingTransaksi"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url()?>Pinjam">Peminjaman</a>
            <a class="collapse-item" href="<?= base_url()?>Kembali">Pengembalian</a>
            </div>
        </div>
    </li>
    
    <!-- Nav Item - Laporan Collapse Menu -->
    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLaporan"
            aria-expanded="true" aria-controls="collapseLaporan">
            <i class="fas fa-fw fa-file"></i>
            <span>Laporan</span>
        </a>
        <div id="collapseLaporan" class="collapse" aria-labelledby="headingLaporan"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url()?>laporan/pinjam">Laporan Peminjaman</a>
            <a class="collapse-item" href="<?= base_url()?>laporan/kembali">Laporan Pengembalian</a>
            </div>
        </div>
    </li> -->
    
    <!-- Divider -->
    <hr class="sidebar-divider">
    
    <!-- Heading -->
    <div class="sidebar-heading">
        Lainnya
    </div>
    
    <!-- Nav Item - Logout-->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url()?>Login/logout">
        <i class="fas fa-sign-out-alt"></i>
        <span>Logout</span></a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
    </ul>
<?php }
?>
