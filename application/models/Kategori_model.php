<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
  public function getAllKategori()
  {
    $this->db->order_by('id_kategori', 'DESC');
    return $this->db->get('tbl_kategori')->result_array();
  }

  public function validasi($nm_kategori)
  {
    $this->db->select('nm_kategori');
    $this->db->where('nm_kategori', $nm_kategori);

    return $this->db->get('tbl_kategori');
  }

  public function getKategoriById($id_kategori)
  {
    return $this->db->get_where('tbl_kategori', ['id_kategori' => $id_kategori])->row_array();
  }

  public function tambahDataKategori()
  {
    $this->db->insert('tbl_kategori', ['nm_kategori' => $this->input->post('nm_kategori', true)]);
  }

  public function editDataKategori()
  {
    $this->db->where('id_kategori', $this->input->post('id_kategori'));
    $this->db->update('tbl_kategori', ['nm_kategori' => $this->input->post('nm_kategori', true)]);
  }

  public function hapusDataKategori($id_kategori)
  {
    $this->db->where('id_kategori', $id_kategori);
    $this->db->delete('tbl_kategori');
  }
}
