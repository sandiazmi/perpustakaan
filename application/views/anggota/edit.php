<div class="main-content">
  <section class="section">
    <div class="section-body">

      <div class="card bg-light mt-3">
        <div class="card-header">
          <h4>Edit Data Rak</h4>
				</div>
				
        <?= $this->session->flashdata('message'); ?>
        <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="kd_anggota">Kode Anggota</label>
              <input type="text" name="kd_anggota" id="kd_anggota" class="form-control" value="<?= $kode['kd_anggota']; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" name="nama" id="nama" class="form-control" value="<?= $kode['nama']; ?>">
              <small class="form-text text-danger"><?= form_error('nama'); ?></small>
            </div>

            <div class="form-group">
              <label for="">Ubah Foto</label>
              <div class="row">
                <div class="col-sm-2">
                  <img src="<?= base_url('assets/img/anggota/') . $kode['foto']; ?>" width="150" height="100">
                </div>
                <div class="col-sm-10">
                  <div>
                    <input type="file" name="foto" class="form-control">
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label>Kelas</label>
              <select class="form-control" name="kelas" id="kelas">
                <?php foreach ($kelas as $kls) : ?>
                  <?php if ($kls['id_kelas'] == $kode['id_kelas']) : ?>
                    <option value="<?= $kls['id_kelas']; ?>" selected><?= $kls['nama_kelas']; ?></option>
                  <?php else : ?>
                    <option value="<?= $kls['id_kelas']; ?>"><?= $kls['nama_kelas']; ?></option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="float-right">
              <button type="submit" name="edit" class="btn btn-primary">Edit Data</button>
            </div>
          </form>
        </div>
      </div>
  </section>
</div>
