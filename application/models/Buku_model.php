<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku_model extends CI_Model
{
  public function getAllBuku()
  {
    $this->db->select('*');
    $this->db->from('tbl_buku');
    $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_buku.id_kategori');
    $this->db->join('tbl_rak', 'tbl_rak.id_rak = tbl_buku.id_rak');
    return $this->db->get()->result_array();
  }

  public function getBukuByKode($kd_buku)
  {
    return $this->db->get_where('tbl_buku', ['kd_buku' => $kd_buku])->row_array();
  }

  public function getAllKategori()
  {
    return $this->db->get('tbl_kategori')->result_array();
  }

  public function getAllRak()
  {
    return $this->db->get('tbl_rak')->result_array();
  }

  public function tambahDataBuku()
  {
    $data = [
      'kd_buku' => $this->input->post('kd_buku', true),
      'judul' => $this->input->post('judul', true),
      'pengarang' => $this->input->post('pengarang', true),
      'penerbit' => $this->input->post('penerbit', true),
      'jumlah' => $this->input->post('jumlah', true),
      'tgl_input' => $this->input->post('tgl_input', true),
      'id_kategori' => $this->input->post('kategori', true),
      'id_rak' => $this->input->post('rak', true),

    ];

    $this->db->insert('tbl_buku', $data);
  }

  public function editDataBuku()
  {
    $data = [
      'kd_buku' => $this->input->post('kd_buku', true),
      'judul' => $this->input->post('judul', true),
      'pengarang' => $this->input->post('pengarang', true),
      'penerbit' => $this->input->post('penerbit', true),
      'jumlah' => $this->input->post('jumlah', true),
      'tgl_input' => $this->input->post('tgl_input', true),
      'id_kategori' => $this->input->post('kategori', true),
      'id_rak' => $this->input->post('rak', true),
    ];

    $this->db->where('kd_buku', $this->input->post('kd_buku'));
    $this->db->update('tbl_buku', $data);
  }

  public function hapusDataBuku($kd_buku)
  {
    $this->db->where('kd_buku', $kd_buku);
    $this->db->delete('tbl_buku');
  }

  public function kodeBuku()
  {
    $this->db->select('RIGHT(tbl_buku.kd_buku, 4) as kode', FALSE);
    $this->db->order_by('kd_buku', 'DESC');
    $this->db->limit('1');

    $query = $this->db->get('tbl_buku');

    if ($query->num_rows() <> 0) {
      $data = $query->row();
      $kode = intval($data->kode) + 1;
    } else {
      $kode = 1;
    }

    $kode_max = str_pad($kode, 4, "0", STR_PAD_LEFT);
    $kode_buku = "BK" . $kode_max;
    return $kode_buku;
  }
}
