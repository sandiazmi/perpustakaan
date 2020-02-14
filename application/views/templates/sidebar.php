<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="">SMK KARYA GUNA 1</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">KG1</a>
    </div>
    <ul class="sidebar-menu">
      <li class="active">
        <a href="#" class="nav-link"><i class="fas fa-th"></i> <span>Dashboard</span></a>
      </li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Data Master</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="<?= base_url('buku'); ?>">Data Buku</a></li>
          <li><a class="nav-link" href="<?= base_url('anggota'); ?>">Data Anggota</a></li>
        </ul>
      </li>
      <li class="menu-header">Settings</li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
          <span>Settings</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="<?= base_url('kategori'); ?>">Data Kategori</a></li>
          <li><a class="nav-link" href="<?= base_url('kelas'); ?>">Data Kelas</a></li>
          <li><a class="nav-link" href="<?= base_url('rak'); ?>">Data Rak</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-th"></i> <span>Transaksi</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="layout-default.html">Pinjam Buku</a></li>
          <li><a class="nav-link" href="layout-default.html">Pengembalian Buku</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-th"></i> <span>Laporan</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="layout-default.html">Data Buku</a></li>
          <li><a class="nav-link" href="layout-default.html">Peminjaman Buku</a></li>
          <li><a class="nav-link" href="layout-default.html">Pengembalian Buku</a></li>
        </ul>
      </li>

      <li class="">
        <a href="#" class="nav-link"><i class="fas fa-th"></i> <span>Logout</span></a>
      </li>

    </ul>
  </aside>
</div>