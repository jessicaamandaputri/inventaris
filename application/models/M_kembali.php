<?php

class M_kembali extends CI_Model{

    public function getAllData()
    {
        $this->db->select('*');
        $this->db->from('kembalikan');
        $this->db->join('barang', 'kembalikan.id_barang = barang.id_barang');
        $this->db->join('anggota', 'kembalikan.id_anggota = anggota.id_anggota');
        return $this->db->get()->result();
    }

}