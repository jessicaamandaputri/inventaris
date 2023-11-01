<?php 
if (!empty($this->session->flashdata('info'))) {?>
<div class="alert alert-success" role="alert"><?= $this->session->flashdata('info');?></div>
<?php }
?>

<div class="row mb-3">
    <div class="col-md-12">
        <a href="<?= base_url()?>Anggota/tambah_anggota" class="btn btn-primary">
        <i class="fas fa-plus"></i>  
        Tambah Anggota</a>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID Anggota</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No. Telp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($data as $row) {?> 
                        <tr>
                        <td><?= $row->id_anggota;?></td>
                        <td><?= $row->nama_anggota;?></td>
                        <td><?= $row->jk;?></td>
                        <td><?= $row->alamat;?></td>
                        <td><?= $row->no_hp;?></td>
                        <td>
                            <a href="<?= base_url()?>Anggota/edit/<?= $row->id_anggota;?>" class="btn btn-success btn-xs"><i class="fas fa-pen"></i></a>
                            <a href="<?= base_url()?>Anggota/hapus/<?= $row->id_anggota;?>"class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')"><i class="fas fa-trash"></i></a>
                        </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
