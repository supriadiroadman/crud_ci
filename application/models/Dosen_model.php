<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen_model extends CI_Model
{

   public function getAllDosen()
   {
      return $this->db->get('dosen')->result_array();
   }

   public function tambahDataDosen()
   {
      $data = [
         'nip' => $this->input->post('nip'),
         'nama' => $this->input->post('nama'),
         'mata_kuliah' => $this->input->post('mata_kuliah')
      ];
      $this->db->insert('dosen', $data);
   }

   public function hapusDataDosen($id)
   {
      $this->db->delete('dosen', ['id' => $id]);
   }

   public function getDosenById($id)
   {
      return $this->db->get_where('dosen', ['id' => $id])->row_array();
   }

   public function ubahDataDosen($id)
   {
      $data = [
         'nip' => $this->input->post('nip'),
         'nama' => $this->input->post('nama'),
         'mata_kuliah' => $this->input->post('mata_kuliah')
      ];

      $this->db->where('id', $id);
      $this->db->update('dosen', $data);
   }

   public function searchDosen()
   {
      $keyword = $this->input->post('keyword');
      $this->db->like('nip', $keyword);
      $this->db->or_like('nama', $keyword);
      $this->db->or_like('mata_kuliah', $keyword);
      return $this->db->get('dosen')->result_array();
   }
}
