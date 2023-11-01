<?php

class M_jenisbarang extends CI_Model{ 
    
    public function edit($id)
    {
        $this->db->where('id_jenisbarang', $id);
        return $this->db->get('jenis_barang')->row_array();
    }

    public function update($id_jenisbarang, $data)
    {
        $this->db->where('id_jenisbarang', $id_jenisbarang);
        $this->db->update('jenis_barang', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id_jenisbarang', $id);
        $this->db->delete('jenis_barang');
    }
}