<?php

class M_pinjam extends CI_Model{

    public function id_pinjam()
    {
       $this->db->select('RIGHT(pinjam.id_pinjam,3) as kode', FALSE);
       $this->db->order_by('id_pinjam', 'DESC');
       $this->db->limit(1);
       $query = $this->db->get('pinjam');
       if ($query->num_rows()<>0){
        $data = $query->row();
        $kode = intval($data->kode)+1;
       }else{
        $kode = 1;
       }
       $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
       $kodejadi = "PJ".$kodemax;
       return $kodejadi;
    }

public function jumlah_barang($id)
{
    $this->db->select('jumlah');
    $this->db->from('barang');
    $this->db->where('id_barang', $id);
    return $this->db->get()->row_array();
}

    public function get_data_pinjam()
    {
        $this->db->select('*');
        $this->db->from('pinjam');
        $this->db->join('barang', 'pinjam.id_barang = barang.id_barang');
        $this->db->join('anggota', 'pinjam.id_anggota = anggota.id_anggota');
        return $this->db->get();
    }

    public function getDataById_pinjam($id)
    {
        $this->db->select('*');
        $this->db->from('pinjam');
        $this->db->join('barang', 'pinjam.id_barang = barang.id_barang');
        $this->db->join('anggota', 'pinjam.id_anggota = anggota.id_anggota');
        $this->db->where('pinjam.id_pinjam', $id);
        return $this->db->get()->row_array();
    }

    public function deletepinjam($id)
    {
        $this->db->where('id_pinjam', $id);
        $this->db->delete('pinjam');
    }
}