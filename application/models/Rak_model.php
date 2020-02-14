<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rak_model extends CI_Model
{
  public function getAllRak()
  {
    return $this->db->get('tbl_rak')->result_array();
  }

  public function getRakById($id_rak)
  {
    return $this->db->get_where('tbl_rak', ['id_rak' => $id_rak])->row_array();
  }

  public function tambahDataRak()
  {
    $data = [
      'nm_rak' => $this->input->post('nm_rak', true)
    ];

    $this->db->insert('tbl_rak', $data);
  }

  public function editDataRak()
  {
    $data = [
      'nm_rak' => $this->input->post('nm_rak', true)
    ];

    $this->db->where('id_rak', $this->input->post('id_rak'));
    $this->db->update('tbl_rak', $data);
  }

  public function hapusDataRak($id_rak)
  {
    $this->db->where('id_rak', $id_rak);
    $this->db->delete('tbl_rak');
  }
}
