
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
					<form method="post" action="<?=base_url()?>Anggota/simpan" autocomplete="off">
						<div class="form-group col-lg-12">
							<label>ID Anggota</label>
							<input type="text" name="id_anggota"  value="<?= $id_anggota;?>" class="form-control" readonly>
						</div>
						<div class="form-group col-lg-12">
							<label>Nama Anggota</label>
							<input type="text" name="nama_anggota" class="form-control" required>
						</div>
                        <div class="form-group col-lg-12">
							<label>Jenis Kelamin</label>
                            <select name="jk" class="form-control" required>
                                <option disabled selected> -- Pilih Jenis Kelamin -- </option>
                                <option value="Laki-laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
						</div>
						<div class="form-group col-lg-12">
							<label>Alamat</label>
                            <textarea name="alamat" cols="30" rows="5" class="form-control" required></textarea>
						</div>
                        <div class="form-group col-lg-12">
							<label>No. Telpon</label>
                            <input type="number" name="no_hp" class="form-control" required>
                        </div>
						<div class="form-group col-lg-6">
                            <a href="<?= base_url()?>Anggota" class="btn btn-warning">Cancel</a>
							<button type="reset" class="btn btn-info">Reset</button>
                            <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
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
