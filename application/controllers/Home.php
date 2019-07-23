<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
   public function index($nama = '')
   {
      $data['nama'] = $nama;
      $data['judul'] = 'Halaman Home';
      $this->load->view('templates/header', $data);
      $this->load->view('home/index');
      $this->load->view('templates/footer');
   }
}
