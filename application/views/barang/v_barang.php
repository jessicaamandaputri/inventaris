<?php 
if (!empty($this->session->flashdata('info'))) {?>
<div class="alert alert-success" role="alert"><?= $this->session->flashdata('info');?></div>
<?php }
?>

<div class="row mb-3">
    <div class="col-md-12">
        <a href="<?= base_url()?>Barang/tambah_barang" class="btn btn-primary">
        <i class="fas fa-plus"></i>  
        Tambah Barang</a>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID Barang</th>
                        <th>Foto Barang</th>
                        <th>Nama Barang</th>
                        <th>Jenis Barang</th>
                        <th>Spesifikasi</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($data->result()as $row) {?> 
                        <tr>
                        <td><?= $row->id_barang;?></td>
                        <td><img src="<?= base_url()?>./assets/img/barang/<?=$row->foto_barang;?>" width="100"></td>
                        <td><?= $row->nama_barang;?></td>
                        <td><?= $row->jenisbarang;?></td>
                        <td><?= $row->spesifikasi;?></td>
                        <td><?= $row->jumlah;?></td>
                        <td>
                            <a href="<?= base_url()?>Barang/edit/<?= $row->id_barang;?>" class="btn btn-success btn-xs"><i class="fas fa-pen"></i></a>
                            <a href="<?= base_url()?>Barang/hapus/<?= $row->id_barang;?>"class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')"><i class="fas fa-trash"></i></a>
                        </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
