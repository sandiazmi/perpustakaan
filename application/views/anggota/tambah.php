<div class="main-content">
	<section class="section">
		<div class="section-body">
			<div class="card bg-light mt-3">
				<div class="card-header">
					<h3>Tambah Data Anggota</h3>
				</div>
				<div class="card-body">
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="kd_anggota">Kode</label>
							<input type="text" name="kd_anggota" id="kd_anggota" class="form-control" value="<?= $kode; ?>" readonly>
							<small class="form-text text-danger"><?= form_error('kd_anggota'); ?></small>
						</div>
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" name="nama" id="nama" class="form-control">
							<small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>

						<div class="form-group">
							<label>Upload Foto</label>
							<input type="file" name="foto" class="form-control">
						</div>

						<div class="form-group">
							<label>Daftar Kelas</label>
							<select class="form-control" name="kelas" id="kelas">
								<option value="">--Pilih kelas--</option>
								<?php foreach ($kelas as $kls) : ?>
									<option value="<?= $kls['id_kelas'] ?>"><?= $kls['nama_kelas']; ?></option>
								<?php endforeach; ?>
							</select>
						</div>

						<div class="float-right">
							<button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
						</div>
					</form>
				</div>
			</div>
	</section>
</div>
