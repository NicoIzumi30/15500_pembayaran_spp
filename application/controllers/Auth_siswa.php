<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_siswa extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('nisn')) {
            redirect('siswa');
        }
        $this->form_validation->set_rules('nisn', 'NISN', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login_siswa');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $nisn = htmlspecialchars($this->input->post('nisn'));
        $password = htmlspecialchars($this->input->post('password'));
        $user = $this->db->get_where('_siswa', ['nisn' => $nisn])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'id_siswa' => $user['id'],
                    'nisn' => $user['nisn'],
                ];
                $this->session->set_userdata($data);
                redirect('siswa');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong password!
              </div>');
                redirect('auth_siswa');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        NISN is not regitered!
      </div>');
            redirect('auth_siswa');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('nisn');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        You have been logged out! 
      </div>');
        redirect('auth_siswa');
    }
}