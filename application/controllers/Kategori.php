<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Kategori_model', 'kategori');
  }

  public function index()
  {
    $data['judul'] = 'Data Kategori Buku';
    $data['kategori'] = $this->kategori->getAllKategori();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/topbar');
    $this->load->view('templates/sidebar');
    $this->load->view('kategori/index', $data);
    $this->load->view('templates/footer');
  }

  public function tambah()
  {
    $data['judul'] = 'Form Tambah Data Kategori';

    $this->form_validation->set_rules('nm_kategori', 'Nama Kategori', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/topbar');
      $this->load->view('templates/sidebar');
      $this->load->view('kategori/tambah');
      $this->load->view('templates/footer');
    } else {
      $nm_kategori = $this->input->post('nm_kategori');
      $query = $this->kategori->validasi($nm_kategori);

      if ($query->num_rows() >= 1) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Nama Kategori Sudah Ada</div>');
        redirect('kategori/tambah');
      } else {
        // berhasil
        $this->kategori->tambahDataKategori();
        $this->session->set_flashdata('flash', 'Disimpan');
        redirect('kategori');
      }
    }
  }

  public function edit($id_kategori)
  {
    $data['judul'] = 'Form Edit Data Kategori';
    $data['kategori'] = $this->kategori->getKategoriById($id_kategori);

    $this->form_validation->set_rules('nm_kategori', 'Nama Kategori', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/topbar');
      $this->load->view('templates/sidebar');
      $this->load->view('kategori/edit', $data);
      $this->load->view('templates/footer');
    } else {
      // berhasil
      $this->kategori->editDataKategori();
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('kategori');
    }
  }

  public function hapus($id_kategori)
  {
    $this->kategori->hapusDataKategori($id_kategori);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('kategori');
  }
}
