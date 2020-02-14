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
              <h4>Tabel Dataaaaaaaaaaaaa Anggota</h4>
              <div class="ml-auto">
                <a href="<?= base_url(); ?>anggota/tambah" class="btn btn-primary btn-xs"><i class="fa fa-user-plus"></i> Tambah Data</a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered" id="table-1" width="100%">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th class="text-center">Kode Anggota</th>
                      <th>Nama Anggota</th>
                      <th>Foto</th>
                      <th>Kelas</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($anggota as $ag) : ?>
                      <tr>
                        <td class="text-center"><?= $i; ?></td>
                        <td class="text-center"><?= $ag['kd_anggota']; ?></td>
                        <td><?= $ag['nama']; ?></td>
                        <td>
                          <img src="<?= base_url('assets/img/anggota/' . $ag['foto']); ?>" width="50">
                        </td>
                        <td><?= $ag['nama_kelas']; ?></td>
                        <td>
                          <a href="<?= base_url(); ?>anggota/edit/<?= $ag['kd_anggota']; ?>"><i class="far fa-edit"></i></a>
                          <a class="tombol-hapus" href="<?= base_url(); ?>anggota/hapus/<?= $ag['kd_anggota']; ?>"><i class="fas fa-trash"></i></a>
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