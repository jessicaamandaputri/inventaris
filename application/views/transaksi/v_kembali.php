<?php 
if (!empty($this->session->flashdata('info'))) {?>
<div class="alert alert-success" role="alert"><?= $this->session->flashdata('info');?></div>
<?php }
?>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Peminjam</th>
                        <th>Nama Barang</th>
                        <th>Jumlah Kembali</th>
                        <th>Tanggal Pinjam</th>
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
                        <td><?= $row->jumlah_kembali;?></td>
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
