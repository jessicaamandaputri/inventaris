
<head>
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
</head>
<!-- Begin Page Content -->

	<div class="row">

		<div class="col-lg-8">
			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url()?>Barang/update" autocomplete="off" enctype="multipart/form-data"	>
						<div class="form-group col-lg-12">
							<label>ID Barang</label>
							<input type="text" name="id_barang"  value="<?= $data['id_barang'];?>" class="form-control" readonly>
						</div>
						<div class="form-group col-lg-12">
							<label>Nama Barang</label>
							<input type="text" name="nama_barang" value="<?= $data['nama_barang'];?>" class="form-control" required>
						</div>
                        <div class="form-group col-lg-12">
							<label>Jenis Barang</label>
                            <select name="id_jenisbarang" class="form-control select2" >
                               <?php 
                               foreach ($jenisbarang as $row) {
                                if ($data['id_jenisbarang'] == $row->id_jenisbarang) {?>
                                    <option value="<?= $row->id_jenisbarang?>" selected> <?= $row->jenisbarang;?> </option>
                                <?php } else {?>
                                    <option value="<?= $row->id_jenisbarang?>"> <?= $row->jenisbarang;?> </option>
                                <?php }
                                }
                               ?>
                            </select>
						</div>
						<div class="form-group col-lg-12">
							<label>spesifikasi</label>
                            <textarea name="spesifikasi" cols="30" rows="5"class="form-control" required><?= $data['spesifikasi'];?></textarea>
						</div>
                        <div class="form-group col-lg-12">
							<label>Jumlah</label>
                            <input type="number" name="jumlah" value="<?= $data['jumlah'];?>" class="form-control" required>
                        </div>
                        <div class="form-group col-lg-12">
							<label>Foto Barang</label><br>
							<input type="file" value="<?= $data['foto_barang'];?>" name="foto_barang">
						</div>
						<div class="form-group col-lg-6">
                            <a href="<?= base_url()?>Barang" class="btn btn-warning">Cancel</a>
                            <button type="submit" class="btn btn-primary btn-flat">Update</button>
						</div>
				</div>
			</div>
		</div>
	</div>

</div>

</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<script>
	$('.js-single').select2({
		placeholder: 'Select an option'
	});

</script>