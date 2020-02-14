<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Anggota_model');
  }

  public function index()
  {
    $data['judul'] = 'Data Anggota';
    $data['anggota'] = $this->Anggota_model->getAllAnggota();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/topbar');
    $this->load->view('templates/sidebar');
    $this->load->view('anggota/index', $data);
    $this->load->view('templates/footer');
  }

  public function tambah()
  {
    $data['judul'] = 'Tambah Data Anggota';
    $data['kelas'] = $this->Anggota_model->getAllKelas();
    $data['kode'] = $this->Anggota_model->kodeAnggota();

    $this->form_validation->set_rules('kd_anggota', 'Kode Anggota', 'required');
    $this->form_validation->set_rules('nama', 'Nama', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/topbar');
      $this->load->view('templates/sidebar');
      $this->load->view('anggota/tambah', $data);
      $this->load->view('templates/footer');
    } else {
      $config['upload_path']     = './assets/img/anggota/';
      $config['allowed_types']   = 'jpg|png';
      $config['max_size']        = 1024;

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('foto')) {
        $this->session->set_flashdata('message',
        '<div class="alert alert-danger" role="alert">Nama Kelas Sudah Ada</div>');
        redirect('anggota/tambah');
      } else {
        $this->Anggota_model->tambahDataAnggota();
        $this->session->set_flashdata('flash', 'Disimpan');
        redirect('anggota');
      }
    }
  }

  public function edit($kd_anggota)
  {
    $data['judul'] = 'Form Edit Data';
    $data['kelas'] = $this->Anggota_model->getAllKelas();
    $data['anggota'] = $this->Anggota_model->getAllAnggota();
    $data['kode'] = $this->Anggota_model->getAnggotaByKode($kd_anggota);

    $this->form_validation->set_rules('kd_anggota', 'Kode Anggota', 'required');
    $this->form_validation->set_rules('nama', 'Nama', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/topbar');
      $this->load->view('templates/sidebar');
      $this->load->view('anggota/edit', $data);
      $this->load->view('templates/footer');
    } else {
      // berhasil
      $upload_image = $_FILES['foto']['name'];

      if ($upload_image) {
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['upload_path'] = './assets/img/anggota/';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
          $old_image = $data['kode']['foto'];

          if ($old_image) {
            unlink(FCPATH . 'assets/img/anggota/' . $old_image);
          }

          $new_image = $this->upload->data('file_name');
        } else {
          print_r($this->upload->display_errors());
        }
      }

      $this->Anggota_model->editDataAnggota($new_image);
      $this->session->set_flashdata('flash', 'Diubah!');
      redirect('anggota');
    }
  }

  public function hapus($kd_anggota)
  {
    $data['kode'] = $this->Anggota_model->getAnggotaByKode($kd_anggota);

    $old_image = $data['kode']['foto'];
    if ($old_image) {
      unlink(FCPATH . 'assets/img/anggota/' . $old_image);
    }

    $this->Anggota_model->hapusDataAnggota($kd_anggota);
    $this->session->set_flashdata('flash', 'Dihapus!');
    redirect('anggota');
  }
}
