<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="card bg-light mt-3">
        <div class="card-header">
          <h4>Edit Data Kelas</h4>
        </div>
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <input type="hidden" name="id_kelas" value="<?= $kelas['id_kelas']; ?>">
              <label for="nama_kelas">Nama Kelas</label>
              <input type="text" name="nama_kelas" id="nama_kelas" value="<?= $kelas['nama_kelas']; ?>" class="form-control">
              <small class="form-text text-danger"><?= form_error('nama_kelas'); ?></small>
            </div>
            <div class="float-right">
              <button type="submit" name="tambah" class="btn btn-primary">Edit Data</button>
            </div>
          </form>
        </div>
      </div>
  </section>
</div>