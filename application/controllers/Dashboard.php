<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') == false) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['petugas'] = $this->db->get_where('petugas', ['level' => 'petugas'])->result();
        $data['siswa'] = $this->db->get('siswa')->result();
        $data['kelas'] = $this->db->get('kelas')->result();
        $data['pembayaran'] = $this->db->get('pembayaran')->result();
        $data['spp'] = $this->db->get('spp')->result();
        $this->load->view('template/header');
        $this->load->view('dashboard/index', $data);
        $this->load->view('template/footer');
    }
    public function profile()
    {
        $this->load->view('template/header');
        $this->load->view('dashboard/profile');
        $this->load->view('template/footer');
    }
    public function update_profile()
    {
        $id = $this->session->userdata('id');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[petugas.username]', ['is_unique' => 'This username has already registered!']);
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash-gagal', 'Di Update');
            redirect('dashboard/profile');
        } else {
            $data = [
                'nama_petugas' => htmlspecialchars($this->input->post('nama')),
                'username' => htmlspecialchars($this->input->post('username')),
            ];
            $where = [
                'id_petugas' => $id
            ];
            $this->db->where($where);
            $insert =  $this->db->update('petugas', $data);
            if (!$insert) {
                var_dump($insert);
            }
            $this->session->set_flashdata('flash', 'Di Update');
            redirect('dashboard/profile');
        }
    }
    public function changepassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('petugas', ['id_petugas' => $this->session->userdata('id')])->row_array();
        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[6]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[6]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header');
            $this->load->view('dashboard/changepassword');
            $this->load->view('template/footer');
        } else {
            $current_password = htmlspecialchars($this->input->post('current_password'));
            $new_password = htmlspecialchars($this->input->post('new_password1'));
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong current password!
                 </div>');
                redirect('dashboard/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    New Password cannot be the same as current password!
                 </div>');
                    redirect('dashboard/changepassword');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash);
                    $this->db->where('id_petugas', $data['user']['id']);
                    $this->db->update('petugas');
                    $this->session->set_flashdata('flash', 'Di Update');
                    redirect('dashboard/profile');
                }
            }
        }
    }
    public function petugas()
    {
        if ($this->session->userdata('level') == 'petugas') {
            redirect('dashboard/profile');
        }
        date_default_timezone_set('Asia/Jakarta');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[petugas.username]', ['is_unique' => 'This username has already registered!']);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password dont matches!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['petugas'] = $this->db->get_where('petugas', ['level' => 'petugas'])->result();
            $this->load->view('template/header');
            $this->load->view('dashboard/petugas', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                'nama_petugas' => htmlspecialchars($this->input->post('nama')),
                'username' => htmlspecialchars($this->input->post('username')),
                'password' => password_hash(htmlspecialchars($this->input->post('password1')), PASSWORD_DEFAULT),
                'level' => 'petugas',
                'created' => date("Y-m-d")
            ];
            $query =  $this->db->insert('petugas', $data);
            if ($query) {
                $this->session->set_flashdata('flash', 'Di Tambahkan');
                redirect('dashboard/petugas');
            } else {
                $this->session->set_flashdata('flash-gagal', 'Di Tambahkan');
                redirect('dashboard/petugas');
            }
        }
    }
    public function delete_petugas($id)
    {
        if ($this->session->userdata('level') == 'petugas') {
            redirect('dashboard/profile');
        }
        $this->db->where(['id_petugas' => $id]);
        $query = $this->db->delete('petugas');
        if ($query) {
            $this->session->set_flashdata('flash', 'Di Hapus');
            redirect('dashboard/petugas');
        } else {
            $this->session->set_flashdata('flash-gagal', 'Di Hapus');
            redirect('dashboard/petugas');
        }
    }
    public function update_petugas($id)
    {
        if ($this->session->userdata('level') == 'petugas') {
            redirect('dashboard/profile');
        }
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $user = $this->db->get_where('petugas', ['id_petugas' => $id])->row_array();
        $new_username = htmlspecialchars($this->input->post('username'));
        if ($new_username == $user['username']) {
            $this->form_validation->set_rules('username', 'Username', 'required|trim');
        } else {
            $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[petugas.username]', ['is_unique' => 'This username has already registered!']);
        }
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash-gagal', 'Di Update');
            redirect('dashboard/petugas');
        } else {
            $data = [
                'nama_petugas' => htmlspecialchars($this->input->post('nama')),
                'username' => htmlspecialchars($this->input->post('username')),
            ];
            $where = [
                'id_petugas' => $id
            ];
            $this->db->where($where);
            $query =  $this->db->update('petugas', $data);
            if (!$query) {
                $this->session->set_flashdata('flash-gagal', 'Di Update');
                redirect('dashboard/petugas');
            } else {
                $this->session->set_flashdata('flash', 'Di Updatee');
                redirect('dashboard/petugas');
            }
        }
    }
    public function kelas()
    {
        if ($this->session->userdata('level') == 'petugas') {
            redirect('dashboard/profile');
        }
        $data['title'] = 'Kelas';
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('kompetensi', 'Kompetensi', 'required');
        if ($this->form_validation->run() == false) {
            $data['kelas'] = $this->db->get_where('kelas')->result();
            $this->load->view('template/header', $data);
            $this->load->view('dashboard/kelas', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                'nama_kelas' => htmlspecialchars($this->input->post('kelas')),
                'kompetensi_keahlian' => htmlspecialchars($this->input->post('kompetensi'))

            ];
            $query = $this->db->insert('kelas', $data);
            if ($query) {
                $this->session->set_flashdata('flash', 'Di Tambahkan');
                redirect('dashboard/kelas');
            } else {
                $this->session->set_flashdata('flash-gagal', 'Di Tambahkan');
                redirect('dashboard/kelas');
            }
        }
    }
    public function update_kelas($id)
    {
        if ($this->session->userdata('level') == 'petugas') {
            redirect('dashboard/profile');
        }
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('kompetensi', 'Kompetensi', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash-gagal', 'Di Update');
            redirect('dashboard/kelas');
        } else {
            $data = [
                'nama_kelas' => htmlspecialchars($this->input->post('kelas')),
                'kompetensi_keahlian' => htmlspecialchars($this->input->post('kompetensi'))

            ];
            $this->db->where(['id_kelas' => $id]);
            $query = $this->db->update('kelas', $data);
            if ($query) {
                $this->session->set_flashdata('flash', 'Di Update');
                redirect('dashboard/kelas');
            } else {
                $this->session->set_flashdata('flash-gagal', 'Di Update!');
                redirect('dashboard/kelas');
            }
        }
    }
    public function delete_kelas($id)
    {
        if ($this->session->userdata('level') == 'petugas') {
            redirect('dashboard/profile');
        }
        $this->db->where(['id_kelas' => $id]);
        $query = $this->db->delete('kelas');
        if ($query) {
            $this->session->set_flashdata('flash', 'Di Hapus');
            redirect('dashboard/kelas');
        } else {
            $this->session->set_flashdata('flash-gagal', 'Di Hapus');
            redirect('dashboard/kelas');
        }
    }
    public function spp()
    {
        if ($this->session->userdata('level') == 'petugas') {
            redirect('dashboard/profile');
        }
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('nominal', 'Nominal', 'required');
        if ($this->form_validation->run() == false) {
            $data['spp'] = $this->db->get('spp')->result();
            $this->load->view('template/header');
            $this->load->view('dashboard/spp', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                'tahun' => htmlspecialchars($this->input->post('tahun')),
                'nominal' => htmlspecialchars($this->input->post('nominal'))
            ];
            $query = $this->db->insert('spp', $data);
            if ($query) {
                $this->session->set_flashdata('flash', 'Di Tambahkan');
                redirect('dashboard/spp');
            } else {
                $this->session->set_flashdata('flash-gagal', 'Di Tambahkan');
                redirect('dashboard/spp');
            }
        }
    }
    public function update_spp($id)
    {
        if ($this->session->userdata('level') == 'petugas') {
            redirect('dashboard/profile');
        }
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('nominal', 'Nominal', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash-gagal', 'Di Update');
            redirect('dashboard/spp');
        } else {
            $data = [
                'tahun' => htmlspecialchars($this->input->post('tahun')),
                'nominal' => htmlspecialchars($this->input->post('nominal'))
            ];
            $this->db->where(['id_spp' => $id]);
            $query = $this->db->update('spp', $data);
            if ($query) {
                $this->session->set_flashdata('flash', 'Di Update');
                redirect('dashboard/spp');
            } else {
                $this->session->set_flashdata('flash-gagal', 'Di Update!');
                redirect('dashboard/spp');
            }
        }
    }
    public function delete_spp($id)
    {
        if ($this->session->userdata('level') == 'petugas') {
            redirect('dashboard/profile');
        }
        $this->db->where(['id_spp' => $id]);
        $query = $this->db->delete('spp');
        if ($query) {
            $this->session->set_flashdata('flash', 'Di Hapus');
            redirect('dashboard/spp');
        } else {
            $this->session->set_flashdata('flash-gagal', 'Di Hapus');
            redirect('dashboard/spp');
        }
    }
    public function siswa()
    {
        if ($this->session->userdata('level') == 'petugas') {
            redirect('dashboard/profile');
        }
        $this->form_validation->set_rules('nisn', 'NISN', 'required');
        $this->form_validation->set_rules('nis', 'NIS', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('telp', 'Telp', 'required');
        $this->form_validation->set_rules('spp', 'SPP', 'required');
        if ($this->form_validation->run() == false) {
            // $data['siswa'] = $this->db->get('siswa')->result();
            $data['siswa'] = $this->M_dashboard->getSiswa();
            $this->load->view('template/header');
            $this->load->view('dashboard/siswa', $data);
            $this->load->view('template/footer');
        } else {
            $nisn = htmlspecialchars($this->input->post('nisn'));
            $data = [
                'nisn' => $nisn,
                'nis' => htmlspecialchars($this->input->post('nis')),
                'nama' => htmlspecialchars($this->input->post('nama')),
                'id_kelas' => htmlspecialchars($this->input->post('kelas')),
                'alamat' => htmlspecialchars($this->input->post('alamat')),
                'no_telp' => htmlspecialchars($this->input->post('telp')),
                'id_spp' => htmlspecialchars($this->input->post('spp')),

            ];
            $query = $this->db->insert('siswa', $data);
            if ($query) {
                $password = htmlspecialchars($this->input->post('nis'));
                $id_spp = htmlspecialchars($this->input->post('spp'));
                $spp = $this->db->get_where('spp', ['id_spp' => $id_spp])->row_array();
                $total_tagihan = $spp['nominal'] * 12;
                $dataLogin = [
                    'nisn' => $nisn,
                    'password' => password_hash($password, PASSWORD_DEFAULT)
                ];
                $dataBulan = [
                    [
                        'nisn' => $nisn,
                        'bulan' => 'Januari',
                        'status' => 'Belum Dibayar'
                    ],
                    [
                        'nisn' => $nisn,
                        'bulan' => 'Februari',
                        'status' => 'Belum Dibayar'
                    ],
                    [
                        'nisn' => $nisn,
                        'bulan' => 'Maret',
                        'status' => 'Belum Dibayar'
                    ],
                    [
                        'nisn' => $nisn,
                        'bulan' => 'April',
                        'status' => 'Belum Dibayar'
                    ],
                    [
                        'nisn' => $nisn,
                        'bulan' => 'Mei',
                        'status' => 'Belum Dibayar'
                    ],
                    [
                        'nisn' => $nisn,
                        'bulan' => 'Juni',
                        'status' => 'Belum Dibayar'
                    ],
                    [
                        'nisn' => $nisn,
                        'bulan' => 'Juli',
                        'status' => 'Belum Dibayar'
                    ],
                    [
                        'nisn' => $nisn,
                        'bulan' => 'Agustus',
                        'status' => 'Belum Dibayar'
                    ],
                    [
                        'nisn' => $nisn,
                        'bulan' => 'September',
                        'status' => 'Belum Dibayar'
                    ],
                    [
                        'nisn' => $nisn,
                        'bulan' => 'Oktober',
                        'status' => 'Belum Dibayar'
                    ],
                    [
                        'nisn' => $nisn,
                        'bulan' => 'November',
                        'status' => 'Belum Dibayar'
                    ],
                    [
                        'nisn' => $nisn,
                        'bulan' => 'Desember',
                        'status' => 'Belum Dibayar'
                    ],

                ];
                $dataTagihan = [
                    'nisn' => $nisn,
                    'total_tagihan' => $total_tagihan,
                    'kekurangan' => $total_tagihan
                ];

                $this->db->insert('_siswa', $dataLogin);
                $this->db->insert('tagihan', $dataTagihan);
                $this->db->insert_batch('bulan', $dataBulan);
                $this->session->set_flashdata('flash', 'Di Tambahkan');
                redirect('dashboard/siswa');
            } else {
                $this->session->set_flashdata('flash-gagal', 'Di Tambahkan');
                redirect('dashboard/siswa');
            }
        }
    }
    public function update_siswa($nisn)
    {
        if ($this->session->userdata('level') == 'petugas') {
            redirect('dashboard/profile');
        }
        $this->form_validation->set_rules('nis', 'NIS', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('telp', 'Telp', 'required');
        $this->form_validation->set_rules('spp', 'SPP', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash-gagal', 'Di Update');
            redirect('dashboard/siswa');
        } else {
            $id_spp = htmlspecialchars($this->input->post('spp'));
            $data = [
                'nis' => htmlspecialchars($this->input->post('nis')),
                'nama' => htmlspecialchars($this->input->post('nama')),
                'id_kelas' => htmlspecialchars($this->input->post('kelas')),
                'alamat' => htmlspecialchars($this->input->post('alamat')),
                'no_telp' => htmlspecialchars($this->input->post('telp')),
                'id_spp' => $id_spp,

            ];
            $where = [
                'nisn' => $nisn
            ];
            $this->db->where($where);
            $query = $this->db->update('siswa', $data);
            if ($query) {
                $this->session->set_flashdata('flash', 'Di Update');
                redirect('dashboard/siswa');
            } else {
                $this->session->set_flashdata('flash-gagal', 'Di Update');
                redirect('dashboard/siswa');
            }
        }
    }
    public function delete_siswa($nisn)
    {
        if ($this->session->userdata('level') == 'petugas') {
            redirect('dashboard/profile');
        }
        $this->db->where(['nisn' => $nisn]);
        $query = $this->db->delete('siswa');
        if ($query) {
            $this->session->set_flashdata('flash', 'Di Hapus');
            redirect('dashboard/siswa');
        } else {
            $this->session->set_flashdata('flash-gagal', 'Di Hapus');
            redirect('dashboard/siswa');
        }
    }
    public function transaksi()
    {
        $this->load->view('template/header');
        $this->load->view('dashboard/transaksi');
        $this->load->view('template/footer');
    }
    public function search()
    {
        $keyword = htmlspecialchars($this->input->get('keyword'));
        $siswa = $this->M_dashboard->search($keyword);
        $countSiswa = count($siswa);
        $output = "";
        $no = 1;
        if ($keyword) {
            foreach ($siswa as $student) {
                $output .= '<tr>
                <td>' . $no++ . '</td>
                <td>' . $student->nisn . '</td>
                <td>' . $student->nama . '</td>
                <td>' . $student->nama_kelas . '</td>
                <td><a class="btn btn-warning" href="' . base_url('dashboard/detail_tagihan/' . $student->nisn) . '">Details...</a>

                </td>

            </tr>';
            }
            if ($countSiswa == 0) {
                $output .= '<tr class="text-center">
                <td colspan="5">
                    <h6>Data Tidak Ditemukan</h6>
                </td>
            </tr>';
            }
        }
        $this->output->set_output($output);
    }
    public function detail_tagihan($nisn)
    {
        if ($nisn == null) {
            redirect('dashboard/transaksi');
        }
        $data['siswa'] = $this->db->get_where('siswa', ['nisn' => $nisn])->row_array();
        $data['tagihan'] = $this->db->get_where('bulan', ['nisn' => $nisn])->result();
        $this->load->view('template/header');
        $this->load->view('dashboard/detail_tagihan', $data);
        $this->load->view('template/footer');
    }
    public function pembayaran()
    {
        $this->form_validation->set_rules('nisn', 'NISN', 'required');
        $this->form_validation->set_rules('bulan', 'Bulan', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('id_spp', 'SPP', 'required');

        if ($this->form_validation->run() == false) {
            redirect('dashboard/transaksi');
        } else {
            $data['setValue'] = [
                'nisn' => htmlspecialchars($this->input->post('nisn')),
                'bulan' => htmlspecialchars($this->input->post('bulan')),
                'tahun' => htmlspecialchars($this->input->post('tahun')),
                'id_spp' => htmlspecialchars($this->input->post('id_spp')),
                'id_bulan' => htmlspecialchars($this->input->post('id_bulan')),
            ];
            $this->load->view('template/header');
            $this->load->view('dashboard/pembayaran', $data);
            $this->load->view('template/footer');
        }
    }

    public function bayarSPP()
    {
        $this->form_validation->set_rules('nisn', 'NISN', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('bulan', 'bulan', 'required');
        $this->form_validation->set_rules('tahun', 'tahun', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('id_spp', 'id', 'required');
        $this->form_validation->set_rules('id_bulan', 'id', 'required');
        if ($this->form_validation->run() == false) {
            var_dump($this->form_validation->run());
            // redirect('dashboard/transaksi');
        } else {
            $nisn = htmlspecialchars($this->input->post('nisn'));
            $id_petugas = $this->session->userdata('id');
            $id_bulan = htmlspecialchars($this->input->post('id_bulan'));
            $id_spp = htmlspecialchars($this->input->post('id_spp'));

            $data = [
                'id_petugas' => $id_petugas,
                'nisn' => $nisn,
                'tgl_bayar' => htmlspecialchars($this->input->post('tanggal')),
                'bulan_bayar' => htmlspecialchars($this->input->post('bulan')),
                'tahun_bayar' => htmlspecialchars($this->input->post('tahun')),
                'id_spp' => $id_spp,
                'jumlah_bayar' => htmlspecialchars($this->input->post('jumlah')),
            ];
            $query = $this->db->insert('pembayaran', $data);
            if ($query) {
                $this->db->set('status', 'Dibayar');
                $this->db->where('id_bulan', $id_bulan);
                $queryBulan = $this->db->update('bulan');
                if ($queryBulan) {
                    $tagihan  = $this->db->get_where('tagihan', ['nisn' => $nisn])->row_array();
                    $spp = $this->db->get_where('spp', ['id_spp' => $id_spp])->row_array();
                    $kekurangan = $tagihan['kekurangan'] - $spp['nominal'];
                    $this->db->set('kekurangan', $kekurangan);
                    $this->db->where('nisn', $nisn);
                    $this->db->update('tagihan');
                }
                $this->session->set_flashdata('pembayaran', 'Berhasil');
                redirect('dashboard/detail_tagihan/' . $nisn);
            } else {
                $this->session->set_flashdata('pembayaran-gagal', 'Gagal');
                redirect('dashboard/detail_tagihan/' . $nisn);
            }
        }
    }
    public function laporan()
    {
        $data['pembayaran'] = $this->M_dashboard->pembayaran();
        $this->load->view('template/header');
        $this->load->view('dashboard/laporan_pembayaran', $data);
        $this->load->view('template/footer');
    }

    public function printLaporan()
    {
        $this->load->view('dashboard/pdf_laporan');
        // Get output html
        $html = $this->output->get_output();

        // Load library
        $this->load->library('dompdf_gen');

        // Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan_Pembayaran_SPP.pdf");
    }
}