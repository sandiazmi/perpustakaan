<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_model extends CI_Model
{

  public function getAllKelas()
  {
    $this->db->select('*');
    $this->db->from('tbl_kelas');
    $this->db->order_by('id_kelas', 'DESC');
    return $this->db->get()->result_array();
  }

  public function getKelasById($id_kelas)
  {
    return $this->db->get_where('tbl_kelas', ['id_kelas' => $id_kelas])->row_array();
  }

  public function tambahDataKelas()
  {
    $this->db->insert('tbl_kelas', ['nama_kelas' => $this->input->post('nama_kelas')]);
  }

  public function validasi($nama_kelas)
  {
    // $query = $this->db->query("SELECT nama_kelas FROM tbl_kelas WHERE nama_kelas='$nama_kelas'");

    $this->db->select('nama_kelas');
    $this->db->where('nama_kelas', $nama_kelas);

    return $this->db->get('tbl_kelas');
  }

  public function editDataKelas()
  {
    $data = [
      'nama_kelas' => $this->input->post('nama_kelas', true)
    ];
    $this->db->where('id_kelas', $this->input->post('id_kelas'));
    $this->db->update('tbl_kelas', $data);
  }

  public function hapusDataKelas($id_kelas)
  {
    $this->db->where('id_kelas', $id_kelas);
    $this->db->delete('tbl_kelas');
  }
}
