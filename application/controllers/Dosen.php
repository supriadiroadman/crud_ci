<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('Dosen_model');
      $this->load->library('form_validation');
   }


   public function index()
   {
      $data['judul'] = 'Halaman Dosen';
      $data['dosen'] = $this->Dosen_model->getAllDosen();

      if ($this->input->post('keyword')) {
         $data['dosen'] = $this->Dosen_model->searchDosen();
      }
      $this->load->view('templates/header', $data);
      $this->load->view('dosen/index', $data);
      $this->load->view('templates/footer');
   }

   public function tambahDataDosen()
   {
      $data['judul'] = 'Form Tambah Data Mahasiswa';

      $this->form_validation->set_rules('nip', 'NIP', 'trim|required');
      $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
      $this->form_validation->set_rules('mata_kuliah', 'Mata Kuliah', 'trim|required');


      if ($this->form_validation->run() == FALSE) {
         $this->load->view('templates/header', $data);
         $this->load->view('dosen/tambah', $data);
         $this->load->view('templates/footer');
      } else {
         $this->Dosen_model->tambahDataDosen();

         $this->session->set_flashdata('flash', 'Ditambahkan');
         redirect('dosen');
      }
   }

   public function hapus($id)
   {
      $this->Dosen_model->hapusDataDosen($id);
      $this->session->set_flashdata('flash', 'Dihapus');
      redirect('dosen');
   }

   public function ubah($id)
   {
      $data['dosen'] = $this->Dosen_model->getDosenById($id);

      $data['judul'] = 'Form Edit Data Dosen';

      $this->form_validation->set_rules('nip', 'NIP', 'trim|required');
      $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
      $this->form_validation->set_rules('mata_kuliah', 'Mata Kuliah', 'trim|required');

      if ($this->form_validation->run() == FALSE) {
         $this->load->view('templates/header', $data);
         $this->load->view('dosen/ubah', $data);
         $this->load->view('templates/footer');
      } else {
         $this->Dosen_model->ubahDataDosen($id);

         $this->session->set_flashdata('flash', 'Diubah');
         redirect('dosen');
      }
   }
}
