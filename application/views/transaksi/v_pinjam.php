<?php 
if (!empty($this->session->flashdata('info'))) {?>
<div class="alert alert-success" role="alert"><?= $this->session->flashdata('info');?></div>
<?php }
?>

<div class="row mb-3">
    <div class="col-md-12">
        <a href="<?= base_url()?>Pinjam/tambah_pinjam" class="btn btn-primary">
        <i class="fas fa-plus"></i>  
        Tambah Peminjaman</a>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID Pinjam</th>
                        <th>Nama Peminjam</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($data->result()as $row) {
                        $tgl_kembali = new DateTime($row->tgl_kembali);
                        $tgl_sekarang = new DateTime();
                        $selisih = $tgl_sekarang->diff($tgl_kembali)->format("%a");
                        ?> 
                        <tr>
                        <td><?= $row->id_pinjam;?></td>
                        <td><?= $row->nama_anggota;?></td>
                        <td><?= $row->nama_barang;?></td>
                        <td><?= $row->jumlah_pinjam;?></td>
                        <td><?= $row->tgl_pinjam;?></td>
                        <td><?= $row->tgl_kembali;?></td>
                        <td>
                            <?php
                            if ($tgl_kembali >= $tgl_sekarang OR $selisih == 0) {
                                echo "<span class='badge badge-warning'>Dipinjam</span>";
                            }else{
                                echo "Telat <b style = 'color:red;'>".$selisih."</b> Hari <br> <span class='badge badge-danger'> Denda Perhari = 1000 ";
                            }
                            ?>
                        </td>
                        <td>
                            <a href="<?= base_url()?>Pinjam/kembalikan/<?= $row->id_pinjam;?>" class="btn btn-primary btn-xs" onclick="return confirm('Apakah Anda yakin barang ini sudah kembali?')">Kembali</a>
                        </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
