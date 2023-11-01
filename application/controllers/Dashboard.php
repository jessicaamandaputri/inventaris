<?php

class Dashboard extends CI_Controller{

public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_laporan');
        $this->load->library('pdf_report');
    } 
    public function index()
    {
        $this->m_squirty->getSquirty();
        $isi['content'] = 'v_beranda';
        $isi['judul'] = 'Dashboard';
        $this->load->model('M_dashboard');
        $isi['anggota'] = $this->M_dashboard->countAnggota();
        $isi['barang'] = $this->M_dashboard->countBarang();
        $isi['pinjam'] = $this->M_dashboard->countPinjam();
        $isi['kembali'] = $this->M_dashboard->countKembali();
        $this->load->view('v_dashboard', $isi);
    }
    }
?>