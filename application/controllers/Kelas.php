<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Kelas_model', 'kelas');
  }

  public function index()
  {
    $data['judul'] = 'Data Kelas';
    $data['kelas'] = $this->kelas->getAllKelas();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/topbar');
    $this->load->view('templates/sidebar');
    $this->load->view('kelas/index', $data);
    $this->load->view('templates/footer');
  }

  public function tambah()
  {
    $data['judul'] = 'Form Tambah Data Kelas';

    $this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/topbar');
      $this->load->view('templates/sidebar');
      $this->load->view('kelas/tambah');
      $this->load->view('templates/footer');
    } else {
      $nama_kelas = $this->input->post('nama_kelas');

      $query = $this->kelas->validasi($nama_kelas);

      if ($query->num_rows() >= 1) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Nama Kelas Sudah Ada</div>');
        redirect('kelas/tambah');
      } else {
        $this->kelas->tambahDataKelas();
        $this->session->set_flashdata('flash', 'Disimpan');
        redirect('kelas');
      }
    }
  }

  public function edit($id_kelas)
  {
    $data['judul'] = 'Form edit data kelas';
    $data['kelas'] = $this->kelas->getKelasById($id_kelas);

    $this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/topbar');
      $this->load->view('templates/sidebar');
      $this->load->view('kelas/edit', $data);
      $this->load->view('templates/footer');
    } else {
      $this->kelas->editDataKelas();
      $this->session->set_flashdata('flash', 'Diedit');
      redirect('kelas');
    }
  }

  public function hapus($id_kelas)
  {
    $this->kelas->hapusDataKelas($id_kelas);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('kelas');
  }
}
