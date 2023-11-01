<?php

class M_dashboard extends CI_Model{

    public function countAnggota()
    {
        return $this->db->count_all('anggota');
    }public function countBarang()
    {
        return $this->db->count_all('barang');
    }public function countPinjam()
    {
        return $this->db->count_all('pinjam');
    }public function countKembali()
    {
        return $this->db->count_all('kembalikan');
    }

}