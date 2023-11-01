<?php

class Jenis_Barang extends CI_Controller{

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_jenisbarang');
    }

    public function index()
    {
        $isi['content'] = 'barang/v_jenisbarang';
        $isi['judul'] = 'Data Jenis Barang';
        $isi['data'] = $this->db->get('jenis_barang')->result();
        // var_dump($isi['data']);
        $this->load->view('v_dashboard', $isi);
    }

    public function tambah_jenisbarang()
    {
        $isi['content'] = 'barang/form_jenisbarang';
        $isi['judul'] = 'Tambah Jenis Barang';
        $this->load->view('v_dashboard', $isi);
    }

    public function simpan()
    {
        $data['jenisbarang'] = $this->input->post('jenisbarang');
        $query = $this->db->insert('jenis_barang', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil disimpan');
            redirect('jenis_barang');
        }
    }

    public function edit($id)
    {
        $isi['content'] = 'barang/edit_jenisbarang';
        $isi['judul'] = 'Edit Data Jenis Barang';
        $isi['data'] = $this->M_jenisbarang->edit($id);
        $this->load->view('v_dashboard', $isi);
    }

    public function update()
    {
        $id_jenisbarang = $this->input->post('id_jenisbarang');
        $jenis_barang = array(
            'id_jenisbarang' => $this->input->post('id_jenisbarang'),
            'jenisbarang' => $this->input->post('jenisbarang'),
        );
        $query = $this->M_jenisbarang->update($id_jenisbarang, $jenis_barang);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil diupdate');
            redirect('jenis_barang');
        }
    }

    public function hapus($id)
    {
    $query = $this->M_jenisbarang->hapus($id);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil dihapus');
            redirect('jenis_barang');
        }
    }
}