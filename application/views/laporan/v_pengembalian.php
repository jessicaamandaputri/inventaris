
<div class="card shadow mb-4">
    <div class="card-header">
        <form method="post" action="<?= base_url()?>Laporan/kembali">
            <div class="row">
                <div class="col-md-2">
                    <h5 class="text-primary" style="font-size: 19px;"><b>Filter Laporan Pengembalian</b></h5>
                </div>

                <div class="col-md-2">
                    <input type="text" name="tgl_awal" class="form-control" placeholder="Tanggal Awal" onfocus="(this.type='date')">
                </div>

                <div class="col-md-2">
                    <input type="text" name="tgl_akhir" class="form-control" placeholder="Tanggal Akhir" onfocus="(this.type='date')">
                </div>
                
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary btn-block btn-filter"><i class="fas fa-filter"></i> Filter</button>
                </div> 
                
                <div class="col-md-2">
                    <button type="submit" value="<?= base_url()?>laporan/kembali" class="btn btn-warning btn-block btn-refresh">Refresh</button>
                </div>

                <div class="col-md-2">
                    <a href="<?= base_url()?>Laporan/pdf_pengembalian" type="submit" class="btn btn-danger btn-block btn-pdf" target="_blank"><i class="fas fa-file"></i> PDF</a>
                </div>


            </div>
        </form>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Peminjam</th>
                        <th>Nama Barang</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Tanggal Kembali</th>
                        <th>Tanggal Dikembalikan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                $no = 1;
                foreach ($data as $row) {?> 
                <tr>
                <td><?= $no++;?></td>
                <td><?= $row->nama_anggota;?></td>
                        <td><?= $row->nama_barang;?></td>
                        <td><?= $row->tgl_pinjam;?></td>
                        <td><?= $row->tgl_kembali;?></td>
                        <td><?= $row->tgl_kembalikan;?></td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
