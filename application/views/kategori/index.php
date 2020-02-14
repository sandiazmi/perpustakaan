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
              <h4>Tabel Data Kategori</h4>
              <div class="ml-auto">
                <a href="<?= base_url() ?>kategori/tambah" class="btn btn-primary btn-xs"><i class="fa fa-user-plus"></i> Tambah Data</a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1" width="100%">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th class="text-center">Nama Kategori</th>
                      <th></th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($kategori as $kt) : ?>
                      <tr>
                        <td class="text-center"><?= $i; ?></td>
                        <td class="text-center"><?= $kt['nm_kategori']; ?></td>
                        <td></td>
                        <td>
                          <a href="<?= base_url(); ?>kategori/edit/<?= $kt['id_kategori']; ?>"><i class="far fa-edit"></i></a>
                          <a class="tombol-hapus" href="<?= base_url(); ?>kategori/hapus/<?= $kt['id_kategori']; ?>"><i class="fas fa-trash"></i></a>
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