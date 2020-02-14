<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota_model extends CI_Model
{
	public function getAllAnggota()
	{
		$this->db->select('*');
		$this->db->from('tbl_anggota');
		$this->db->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_anggota.id_kelas');
		$this->db->order_by('kd_anggota', 'DESC');

		return $this->db->get()->result_array();
	}

	public function getAllKelas()
	{
		return $this->db->get('tbl_kelas')->result_array();
	}

	public function getAnggotaByKode($kd_anggota)
	{
		return $this->db->get_where('tbl_anggota', ['kd_anggota' => $kd_anggota])->row_array();
	}

	public function tambahDataAnggota()
	{
		$data = [
			'kd_anggota' => $this->input->post('kd_anggota', true),
			'nama' => $this->input->post('nama', true),
			'foto' => $this->upload->data('file_name'),
			'id_kelas' => $this->input->post('kelas', true),

		];

		$this->db->insert('tbl_anggota', $data);
	}

	public function editDataAnggota($new_image)
	{
		$data = [
			'kd_anggota' => $this->input->post('kd_anggota'),
			'nama' => $this->input->post('nama'),
			'foto' => $new_image,
			'id_kelas' => $this->input->post('kelas')
		];
		$this->db->where('kd_anggota', $this->input->post('kd_anggota'));
		$this->db->update('tbl_anggota', $data);
	}

	public function kodeAnggota()
	{
		$this->db->select('RIGHT(tbl_anggota.kd_anggota, 3) as kode', FALSE);
		$this->db->order_by('kd_anggota', 'DESC');
		$this->db->limit('1');

		$query = $this->db->get('tbl_anggota');

		if ($query->num_rows() <> 0) {
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		} else {
			$kode = 1;
		}

		$kode_max = str_pad($kode, 3, "0", STR_PAD_LEFT);
		$kode_anggota = "2116" . $kode_max;
		return $kode_anggota;
	}

	public function hapusDataAnggota($kd_anggota)
	{
		$this->db->where('kd_anggota', $kd_anggota);
		$this->db->delete('tbl_anggota');
	}
}
