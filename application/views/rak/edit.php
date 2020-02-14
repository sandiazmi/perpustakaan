<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="card bg-light mt-3">
        <div class="card-header">
          <h4>Edit Data Rak</h4>
        </div>
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <input type="hidden" name="id_rak" value="<?= $rak['id_rak']; ?>">
              <label for="nm_rak">Nama Rak</label>
              <input type="text" name="nm_rak" id="nm_rak" class="form-control" value="<?= $rak['nm_rak']; ?>">
              <small class="form-text text-danger"><?= form_error('nm_rak'); ?></small>
            </div>
            <div class="float-right">
              <button type="submit" name="edit" class="btn btn-primary">Edit Data</button>
            </div>
          </form>
        </div>
      </div>
  </section>
</div>