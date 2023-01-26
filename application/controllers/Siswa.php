<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function index()
    {
        $nisn = '3012200401';
        $data['siswa'] = $this->M_dashboard->getSiswaWhere($nisn);
        $data['tagihan'] = $this->db->get_where('bulan', ['nisn' => $nisn])->result();
        $this->load->view('template/header');
        $this->load->view('siswa/index', $data);
        $this->load->view('template/footer');
    }
}