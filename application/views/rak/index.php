<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
      <?php if ($this->session->flashdata('flash')) : ?>
      <?php endif; ?>
      <div class="row">
        <div class="col-12">
          <div class="card bg-light mt-3">
            <div class="card-header">
              <h4>Tabel Data Rak</h4>
              <div class="ml-auto">
                <a href="<?= base_url() ?>rak/tambah" class="btn btn-primary btn-xs"><i class="fa fa-user-plus"></i> Tambah Data</a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1" width="100%">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th class="text-center">Nama Rak</th>
                      <th></th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($rak as $rk) : ?>
                      <tr>
                        <td class="text-center"><?= $i; ?></td>
                        <td class="text-center"><?= $rk['nm_rak']; ?></td>
                        <td></td>
                        <td>
                          <a href="<?= base_url(); ?>rak/edit/<?= $rk['id_rak']; ?>"><i class="far fa-edit"></i></a>
                          <a class="tombol-hapus" href="<?= base_url(); ?>rak/hapus/<?= $rk['id_rak']; ?>"><i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                      <?php $i++; ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>