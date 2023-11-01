<div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100 py-2">
        <a href="<?= base_url()?>Barang">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                        Data Barang</div>
                    <h5 class="h5 mb-0 font-weight-bold text-gray-800"><?= $anggota;?></h5>
                </div>
                <div class="col-auto">
                    <i class="fas fa-box fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
        </a>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <a href="<?= base_url()?>Anggota">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Data Anggota</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $barang;?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-users fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
        </a>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <a href="<?= base_url()?>Pinjam">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Dipinjam</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pinjam;?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-arrow-right fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
        </a>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
    <a href="<?= base_url()?>Kembali">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Dikembalikan</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kembali;?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-arrow-left fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </a>
    </div>
</div>
</div>