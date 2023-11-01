<?php

class Kembali extends CI_Controller{

    public function index()
    {
        $isi['content'] = 'transaksi/v_kembali';
        $isi['judul'] = 'Data Pengembalian Barang';
        $this->load->model('M_kembali');
        $isi['data'] = $this->M_kembali->getAllData();
        $this->load->view('v_dashboard', $isi);
    }
}