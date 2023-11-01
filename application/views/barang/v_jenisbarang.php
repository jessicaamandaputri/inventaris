<?php 
if (!empty($this->session->flashdata('info'))) {?>
<div class="alert alert-success" role="alert"><?= $this->session->flashdata('info');?></div>
<?php }
?>

<div class="row mb-3">
    <div class="col-md-12">
        <a href="<?= base_url()?>Jenis_barang/tambah_jenisbarang" class="btn btn-primary">
        <i class="fas fa-plus"></i>  
        Tambah Jenis Barang</a>
    </div>
</div>
<div class="card shadow mb-4">
<div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID Jenis Barang</th>
                        <th>Jenis Barang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($data as $row) {?> 
                        <tr>
                        <td><?= $row->id_jenisbarang;?></td>
                        <td><?= $row->jenisbarang;?></td>
                        <td>
                            <a href="<?= base_url()?>Jenis_barang/edit/<?= $row->id_jenisbarang;?>" class="btn btn-success btn-xs"><i class="fas fa-pen"></i></a>
                            <a href="<?= base_url()?>Jenis_barang/hapus/<?= $row->id_jenisbarang;?>"class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')"><i class="fas fa-trash"></i></a>
                        </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
