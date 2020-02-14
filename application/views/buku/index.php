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
              <h4>Tabel Data Buku</h4>
              <div class="ml-auto">
                <a href="<?= base_url() ?>buku/tambah" class="btn btn-primary btn-xs"><i class="fa fa-user-plus"></i> Tambah Data</a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1" width="100%">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th>Kode Buku</th>
                      <th>Judul</th>
                      <th>Pengarang</th>
                      <th>Penerbit</th>
                      <th>Jumlah</th>
                      <th>Tanggal</th>
                      <th>Kategori</th>
                      <th>Rak</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($buku as $bk) : ?>
                      <tr>
                        <td><?= $i; ?></td>
                        <td><?= $bk['kd_buku']; ?></td>
                        <td><?= $bk['judul']; ?></td>
                        <td class="align-middle"><?= $bk['pengarang']; ?></td>
                        <td><?= $bk['penerbit']; ?></td>
                        <td><?= $bk['jumlah']; ?></td>
                        <td><?= $bk['tgl_input']; ?></td>
                        <td><?= $bk['nm_kategori']; ?></td>
                        <td><?= $bk['nm_rak']; ?></td>
                        <td>
                          <a href="<?= base_url(); ?>buku/edit/<?= $bk['kd_buku']; ?>"><i class="far fa-edit"></i></a>
                          <a class="tombol-hapus" href="<?= base_url(); ?>buku/hapus/<?= $bk['kd_buku']; ?>"><i class="fas fa-trash"></i></a>
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