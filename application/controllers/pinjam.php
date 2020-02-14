<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pinjam extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->modal('Pinjam_model', 'pinjam');
  }

  public function index()
  {
    $data['judul'] = 'Tabel Pinjam Buku';
    $data['buku'] = $this->pinjam->getAllBuku();
    $data['kelas'] = $this->pinjam->getAllKelas();
    $data['anggota'] = $this->pinjam->getAllAnggota();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/topbar');
    $this->load->view('templates/sidebar');
    $this->load->view('pinjam/index', $data);
    $this->load->view('templates/footer');
  }
}
