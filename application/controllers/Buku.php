<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    // load model
    $this->load->model('Buku_model');
    // form validation
    $this->load->library('form_validation');
  }

  // tampil databuku
  public function index()
  {
    $data['judul'] = 'Data Buku';

    $data['buku'] = $this->Buku_model->getAllBuku();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/topbar');
    $this->load->view('templates/sidebar');
    $this->load->view('buku/index', $data);
    $this->load->view('templates/footer');
  }


  // tambah data buku
  public function tambah()
  {
    $data['judul'] = 'Form Tambah Data Buku';


    $data['kategori'] = $this->Buku_model->getAllKategori();
    $data['rak'] = $this->Buku_model->getAllRak();
    $data['kode_buku'] = $this->Buku_model->kodeBuku();
    $this->validasi();

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/topbar');
      $this->load->view('templates/sidebar');
      $this->load->view('buku/tambah', $data);
      $this->load->view('templates/footer');
    } else {
      // jika berhasil
      $this->Buku_model->tambahDataBuku();
      $this->session->set_flashdata('flash', 'Disimpan!');
      redirect('buku');
    }
  }

  public function validasi()
  {
    // validation_rules
    $this->form_validation->set_rules('kd_buku', 'Kode Buku', 'required');
    $this->form_validation->set_rules('judul', 'Judul', 'required');
    $this->form_validation->set_rules('pengarang', 'Pengarang', 'required');
    $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
    $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');
    $this->form_validation->set_rules('tgl_input', 'Tanggal', 'required');
    $this->form_validation->set_rules('kategori', 'Kategori', 'required');
    $this->form_validation->set_rules('rak', 'Rak', 'required');
  }

  // edit data buku
  public function edit($kd_buku)
  {
    $data['judul'] = 'Edit Data Buku';

    $data['buku'] = $this->Buku_model->getBukuByKode($kd_buku);
    $data['kategori'] = $this->Buku_model->getAllKategori();
    $data['rak'] = $this->Buku_model->getAllRak();

    $this->validasi();

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/topbar');
      $this->load->view('templates/sidebar');
      $this->load->view('buku/edit', $data);
      $this->load->view('templates/footer');
    } else {
      // jika berhasil
      $this->Buku_model->editDataBuku();
      $this->session->set_flashdata('flash', 'Diubah!');
      redirect('buku');
    }
  }

  // hapus data buku
  public function hapus($kd_buku)
  {
    $this->Buku_model->hapusDataBuku($kd_buku);
    $this->session->set_flashdata('flash', 'Dihapus!');
    redirect('buku');
  }
}
