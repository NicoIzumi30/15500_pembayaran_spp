<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('dashboard');
        }
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $username = htmlspecialchars($this->input->post('username'));
        $password = htmlspecialchars($this->input->post('password'));
        $user = $this->db->get_where('petugas', ['username' => $username])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'id' => $user['id_petugas'],
                    'nama_petugas' => $user['nama_petugas'],
                    'username' => $user['username'],
                    'level' => $user['level'],
                    'create' => $user['created']
                ];
                $this->session->set_userdata($data);
                if ($user['level'] == 'petugas') {
                    redirect('dashboard/profile');
                } else {
                    redirect('dashboard');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong password!
              </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Username is not regitered!
      </div>');
            redirect('auth');
        }
    }
    public function register()
    {
        if ($this->session->userdata('username')) {
            redirect('dashboard');
        }
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[petugas.username]', ['is_unique' => 'This username has already registered!']);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password dont matches!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/register');
        } else {
            $data = [
                'nama_petugas' => htmlspecialchars($this->input->post('nama')),
                'username' => htmlspecialchars($this->input->post('username')),
                'password' => password_hash(htmlspecialchars($this->input->post('password1')), PASSWORD_DEFAULT),
                'level' => 'admin',
                'crated' => date('Y-m-d')
            ];
            $insert =  $this->db->insert('petugas', $data);
            if ($insert) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Congratulation! your account has been created. Please Login
              </div>');
                redirect('auth');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Registration Failed!!
              </div>');
                redirect('auth/register');
            }
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('nama_petugas');
        $this->session->unset_userdata('level');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('created');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        You have been logged out! 
      </div>');
        redirect('auth');
    }
}