<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rak extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Rak_model');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['judul'] = 'Data Rak';
    $data['rak'] = $this->Rak_model->getAllRak();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/topbar');
    $this->load->view('templates/sidebar');
    $this->load->view('rak/index', $data);
    $this->load->view('templates/footer');
  }

  public function tambah()
  {
    $data['judul'] = 'Form Tambah Data Rak';

    $this->form_validation->set_rules('nm_rak', 'Nama Rak', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/topbar');
      $this->load->view('templates/sidebar');
      $this->load->view('rak/tambah');
      $this->load->view('templates/footer');
    } else {
      $this->Rak_model->tambahDataRak();
      $this->session->set_flashdata('flash', 'Disimpan');
      redirect('rak');
    }
  }

  public function edit($id_rak)
  {
    $data['judul'] = 'Edit Data Rak';
    $data['rak'] = $this->Rak_model->getRakById($id_rak);

    $this->form_validation->set_rules('nm_rak', 'Nama Rak', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/topbar');
      $this->load->view('templates/sidebar');
      $this->load->view('rak/edit', $data);
      $this->load->view('templates/footer');
    } else {
      $this->Rak_model->editDataRak();
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('rak');
    }
  }

  public function hapus($id_rak)
  {
    $this->Rak_model->hapusDataRak($id_rak);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('rak');
  }
}
