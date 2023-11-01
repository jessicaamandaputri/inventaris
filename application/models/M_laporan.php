<?php

class M_laporan extends CI_Model{

    public function getAllData()
    {
        $this->db->select('*');
        $this->db->from('pinjam');
        $this->db->join('barang', 'pinjam.id_barang = barang.id_barang');
        $this->db->join('anggota', 'pinjam.id_anggota = anggota.id_anggota');
        return $this->db->get()->result();
    }

    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('kembalikan');
        $this->db->join('barang', 'kembalikan.id_barang = barang.id_barang');
        $this->db->join('anggota', 'kembalikan.id_anggota = anggota.id_anggota');
        return $this->db->get()->result();
    }

    public function filterData($tgl_awal, $tgl_akhir)
    {
        $this->db->select('*');
        $this->db->from('pinjam');
        $this->db->join('barang', 'pinjam.id_barang = barang.id_barang');
        $this->db->join('anggota', 'pinjam.id_anggota = anggota.id_anggota');
        $this->db->where('pinjam.tgl_pinjam >=', $tgl_awal);
        $this->db->where('pinjam.tgl_pinjam <=', $tgl_akhir);
        return $this->db->get()->result();
    }

}