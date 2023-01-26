<?php
class M_dashboard extends CI_Model
{
    public function getSiswa()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas', 'left');
        $this->db->join('spp', 'spp.id_spp = siswa.id_spp', 'left');
        $query = $this->db->get();
        return $query->result();
    }
    public function getSiswaWhere($nisn)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas', 'left');
        $this->db->join('spp', 'spp.id_spp = siswa.id_spp', 'left');
        $this->db->where(['siswa.nisn' => $nisn]);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function search($keyword)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas', 'left');
        $this->db->join('spp', 'spp.id_spp = siswa.id_spp', 'left');
        $this->db->like('nama', $keyword, 'both');
        $query = $this->db->get();
        return $query->result();
    }
    public function pembayaran()
    {
        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->join('petugas', 'petugas.id_petugas = pembayaran.id_petugas', 'left');
        $this->db->join('siswa', 'siswa.nisn = pembayaran.nisn', 'left');
        $this->db->join('spp', 'spp.id_spp = pembayaran.id_spp', 'left');
        $query = $this->db->get();
        return $query->result();
    }
}