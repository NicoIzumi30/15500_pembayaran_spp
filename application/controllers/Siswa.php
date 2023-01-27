<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function index()
    {
        if (!$this->session->userdata('nisn')) {
            redirect('auth_siswa');
        }
        $nisn = $this->session->userdata('nisn');
        $data['siswa'] = $this->M_dashboard->getSiswaWhere($nisn);
        $data['bulan'] = $this->db->get_where('bulan', ['nisn' => $nisn])->result();
        $data['tagihan'] = $this->db->get_where('tagihan', ['nisn' => $nisn])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('template/footer');
    }
}