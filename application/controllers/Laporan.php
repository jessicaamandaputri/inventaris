<?php

class Laporan extends CI_Controller{

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_laporan');
        $this->load->library('pdf_report');
    }

    public function pinjam()
    {
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');

        $this->session->set_userdata('tanggal awal', $tgl_awal);
        $this->session->set_userdata('tanggal akhir', $tgl_akhir);

        if(empty($tgl_awal) || empty($tgl_akhir)){
            $isi['content'] = 'laporan/v_peminjaman';
            $isi['judul'] = 'Laporan Peminjaman';
            $isi['data'] = $this->M_laporan->getAllData();
        }else{
        $isi['content'] = 'laporan/v_peminjaman';
        $isi['judul'] = 'Laporan Peminjaman';
        $isi['data'] = $this->M_laporan->filterData($tgl_awal, $tgl_akhir);
        }
        $this->load->view('v_dashboard', $isi);

    }

    public function pdf_pinjam()
    {
        if (empty($this->session->userdata('tanggal_awal')) || empty($this->session->userdata('tanggal_akhir'))){
        $isi['data'] = $this->M_laporan->getAllData();
        $this->load->view('laporan/pdf_peminjaman', $isi);
    }else{
        $isi['data'] = $this->M_laporan->filterData($this->session->userdata('tanggal_awal'), $this->session->userdata('tanggal_akhir'));
        $this->load->view('laporan/pdf_peminjaman', $isi);
    }
    }

    public function kembali()
    {
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');

        $this->session->set_userdata('tanggal awal', $tgl_awal);
        $this->session->set_userdata('tanggal akhir', $tgl_akhir);

        if(empty($tgl_awal) || empty($tgl_akhir)){
            $isi['content'] = 'laporan/v_pengembalian';
            $isi['judul'] = 'Laporan Pengembalian';
            $isi['data'] = $this->M_laporan->get_all_data();
        }else{
        $isi['content'] = 'laporan/v_pengembalian';
        $isi['judul'] = 'Laporan Pengembalian';
        $isi['data'] = $this->M_laporan->filterData($tgl_awal, $tgl_akhir);
        }
        $this->load->view('v_dashboard', $isi);

    }

    public function pdf_kembali()
    {
        if (empty($this->session->userdata('tanggal_awal')) || empty($this->session->userdata('tanggal_akhir'))){
            $isi['data'] = $this->M_laporan->get_all_data();
            $this->load->view('laporan/pdf_pengembalian', $isi);
        }else{
            $isi['data'] = $this->M_laporan->filterData($this->session->userdata('tanggal_awal'), $this->session->userdata('tanggal_akhir'));
            $this->load->view('laporan/pdf_pengembalian', $isi);
        }
}
}
?>