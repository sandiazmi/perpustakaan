<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="card bg-light mt-3">
        <div class="card-header">
          <h4>Edit Data Buku</h4>
        </div>
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="kd_buku">Kode Buku</label>
              <input type="text" name="kd_buku" id="kd_buku" class="form-control" value="<?= $buku['kd_buku']; ?>">
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" name="judul" id="judul" class="form-control" value="<?= $buku['judul']; ?>">
                  <small class=" form-text text-danger"><?= form_error('judul'); ?></small>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="pengarang">Pengarang</label>
                  <input type="text" name="pengarang" id="pengarang" class="form-control" value="<?= $buku['pengarang']; ?>">
                  <small class=" form-text text-danger"><?= form_error('pengarang'); ?></small>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="penerbit">Penerbit</label>
                  <input type="text" name="penerbit" id="penerbit" class="form-control" value="<?= $buku['penerbit']; ?>">
                  <small class=" form-text text-danger"><?= form_error('penerbit'); ?></small>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="jumlah">Jumlah</label>
                  <input type="text" name="jumlah" id="jumlah" class="form-control" value="<?= $buku['jumlah']; ?>">
                  <small class=" form-text text-danger"><?= form_error('jumlah'); ?></small>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label>Kategori Buku</label>
                  <select class="form-control" name="kategori" id="kategori">
                    <?php foreach ($kategori as $kt) : ?>
                      <?php if ($kt['id_kategori'] == $buku['id_kategori']) : ?>
                        <option value="<?= $kt['id_kategori'] ?>" selected><?= $kt['nm_kategori']; ?></option>
                      <?php else : ?>
                        <option value="<?= $kt['id_kategori'] ?>"><?= $kt['nm_kategori']; ?></option>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label>Rak</label>
                  <select class="form-control" name="rak" id="rak">
                    <?php foreach ($rak as $rk) : ?>
                      <?php if ($rk['id_rak'] == $buku['id_rak']) : ?>
                        <option value="<?= $rk['id_rak']; ?>" selected><?= $rk['nm_rak']; ?></option>
                      <?php else : ?>
                        <option value="<?= $rk['id_rak']; ?>"><?= $rk['nm_rak']; ?></option>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="text" class="form-control datepicker" name="tgl_input" id="tgl_input" value="<?= $buku['tgl_input']; ?>">
                  <small class=" form-text text-danger"><?= form_error('tgl_input'); ?></small>
                </div>
              </div>
            </div>
            <div class="float-right">
              <button type="submit" name="edit" class="btn btn-primary">Edit Data</button>
            </div>
          </form>
        </div>
      </div>
  </section>
</div>