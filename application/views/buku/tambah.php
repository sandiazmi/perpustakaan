<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="card bg-light mt-3">
        <div class="card-header">
          <h4>Tambah Data Buku</h4>
        </div>
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="kd_buku">Kode Buku</label>
              <input type="text" name="kd_buku" id="kd_buku" value="<?= $kode_buku; ?>" readonly class="form-control">
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" name="judul" id="judul" class="form-control">
                  <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="pengarang">Pengarang</label>
                  <input type="text" name="pengarang" id="pengarang" class="form-control">
                  <small class="form-text text-danger"><?= form_error('pengarang'); ?></small>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="penerbit">Penerbit</label>
                  <input type="text" name="penerbit" id="penerbit" class="form-control">
                  <small class="form-text text-danger"><?= form_error('penerbit'); ?></small>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="jumlah">Jumlah</label>
                  <input type="text" name="jumlah" id="jumlah" class="form-control">
                  <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label>Kategori Buku</label>
                  <select class="form-control" name="kategori" id="kategori">
                    <option value="">--Pilih Kategori--</option>
                    <?php foreach ($kategori as $kt) : ?>
                      <option value="<?= $kt['id_kategori'] ?>"><?= $kt['nm_kategori']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label>Rak</label>
                  <select class="form-control" name="rak" id="rak">
                    <option value="">--Pilih Rak--</option>
                    <?php foreach ($rak as $rk) : ?>
                      <option value="<?= $rk['id_rak']; ?>"><?= $rk['nm_rak']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="text" class="form-control datepicker" name="tgl_input" id="tgl_input">
                  <small class="form-text text-danger"><?= form_error('tgl_input'); ?></small>
                </div>
              </div>
            </div>
            <div class="float-right">
              <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
            </div>
          </form>
        </div>
      </div>
  </section>
</div>