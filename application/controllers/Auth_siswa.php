<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_siswa extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
		date_default_timezone_set("Asia/Bangkok");
    }
    public function index()
    {
        if ($this->session->userdata('nisn')) {
            redirect('siswa');
        } elseif ($this->session->userdata('username')) {
            redirect('dashboard');
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
				$date_login = date("d-m-Y h:i:s A");
				$data_logs = [
					'username' => $user['nisn'],
					'login' => $date_login,
					'logout' => '-',
					'level' => 'siswa'
				];
				$this->db->insert('logs',$data_logs);
				$lastid = $this->db->insert_id();
                $data = [
                    'id_siswa' => $user['id'],
                    'nisn' => $user['nisn'],
					'id_logs' => $lastid,
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
		$id_logs = $this->session->userdata('id_logs');
		$date_logout = date("d-m-Y h:i:s A");
		$this->db->set('logout', $date_logout);
		$this->db->where('id_logs', $id_logs);
		$this->db->update('logs');
        $this->session->unset_userdata('nisn');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        You have been logged out! 
      </div>');
        redirect('auth_siswa');
    }
}
