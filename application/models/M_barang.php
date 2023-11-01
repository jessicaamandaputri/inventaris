<?php

class M_barang extends CI_Model{

    public function id_barang()
    {
       $this->db->select('RIGHT(barang.id_barang,3) as kode', FALSE);
       $this->db->order_by('id_barang', 'DESC');
       $this->db->limit(1);
       $query = $this->db->get('barang');
       if ($query->num_rows()<>0){
        $data = $query->row();
        $kode = intval($data->kode)+1;
       }else{
        $kode = 1;
       }
       $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
       $kodejadi = "BR".$kodemax;
       return $kodejadi;
    }

    public function get_data_barang()
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('jenis_barang', 'barang.id_jenisbarang = jenis_barang.id_jenisbarang');
        return $this->db->get();
    }

    public function edit($id)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('jenis_barang', 'barang.id_jenisbarang = jenis_barang.id_jenisbarang');
        $this->db->where('barang.id_barang', $id);
        return $this->db->get()->row_array();
    }

    public function update($id_barang, $data)
    {
        $this->db->where('id_barang', $id_barang);
        $this->db->update('barang', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id_barang', $id);
        $this->db->delete('barang');
    }
}