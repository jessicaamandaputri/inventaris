
<head>
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
</head>
<!-- Begin Page Content -->
<!-- <?php 
$tgl_pinjam = date('Y-m-d');
$tgl_kembali = date('Y-m-d');
?> -->
	<div class="row">

		<div class="col-lg-8">
			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url()?>Pinjam/simpan" autocomplete="off">
						<div class="form-group col-lg-12">
							<label>ID Pinjam</label>
							<input type="text" name="id_pinjam" value="<?= $id_pinjam;?>" class="form-control" readonly>
						</div>

                        <div class="form-group col-lg-12">
							<label>Nama Peminjam</label>
                            <select name="id_anggota" class="form-control select2" required>
                               <option value="">-- Pilih Nama Peminjam --</option>
                               <?php 
                               foreach ($id_anggota as $row) {?>
                               <option value="<?=$row->id_anggota;?>"><?= $row->nama_anggota;?></option>
                               <?php }
                               ?>
                            </select>
						</div>

						<div class="form-group col-lg-12">
							<label>Nama Barang</label>
							<select name="id_barang" id="id_barang" class="form-control select2" required>
                               <option value="">-- Pilih Barang --</option>
                               <?php 
                               foreach ($id_barang as $row) {?>
                               <option value="<?=$row->id_barang;?>"><?= $row->nama_barang;?></option>
                               <?php }
                               ?>
                            </select>
						</div>

                        <div class="form-group col-lg-12">
							<label>Tanggal Pinjam</label>
                            <input type="date" name="tgl_pinjam" value="<?= $tgl_pinjam;?>" id="tgl_pinjam" class="form-control" required readonly>
						</div>

                        <!-- <div class="form-group col-lg-12">
                            <label for="durasi">Lama Pinjam (Hari)</label>
                            <input type="number" name="durasi" id="durasi" class="form-control" required>
                        </div> -->

						<div class="form-group col-lg-12">
							<label>Tanggal Kembali</label>
                            <input type="date" name="tgl_kembali" value="<?= $tgl_pinjam;?>" id="tgl_kembali" class="form-control" required>
						</div>

                        <div class="form-group col-lg-12">
							<label>Jumlah Pinjam</label>
                            <input type="number" name="jumlah_pinjam" class="form-control">
                        </div>

                        <div class="form-group col-lg-6">
                            <a href="<?= base_url()?>PSinjam" class="btn btn-warning">Cancel</a>
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
<script>
    $('#id_barang').change(function() {
        var id=$(this).val();
    $.ajax({
        url : '<?= base_url()?>pinjam/jumlah',
        data : {id:id},
        method : 'post',
        dataType : 'json',
        success:function(hasil){
        var.jumlah = JSON.stringify(hasil.jumlah);
        var.jumlah1 = jumlah.split('"').join('');
        if(jumlah1 <= 0) {
            alert('Maaf, stok untuk barang ini sedang kosong');
            location.reload();
        }
        }
    });
    });
</script>
<script>
    // document.getElementById('tgl_pinjam').addEventListener('change', function() {
    //     hitungTanggalKembali();
    // });

    // document.getElementById('durasi').addEventListener('change', function() {
    //     hitungTanggalKembali();
    // });

    // function hitungTanggalKembali() {
    //     var tanggalPinjam = new Date(document.getElementById('tgl_pinjam').value);
    //     var durasi = parseInt(document.getElementById('durasi').value); // Durasi dalam hari
        
    //     if (!isNaN(durasi)) {
    //         var tanggalKembali = new Date(tanggalPinjam);
    //         tanggalKembali.setDate(tanggalPinjam.getDate() + durasi);
            
    //         // Format tanggal kembali sebagai "YYYY-MM-DD" (format yang diterima oleh input tanggal)
    //         var tanggalKembaliFormatted = tanggalKembali.toISOString().substr(0, 10);
            
    //         document.getElementById('tgl_kembali').value = tanggalKembaliFormatted;
    //     }
    // }
</script>
