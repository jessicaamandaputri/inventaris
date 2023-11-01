<?php

class Pinjam extends CI_Controller{

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_pinjam');
    }

    public function index()
    {
        $isi['content'] = 'transaksi/v_pinjam';
        $isi['judul'] = 'Data Peminjaman Barang';
        $isi['data'] = $this->M_pinjam->get_data_pinjam();
        $this->load->view('v_dashboard', $isi);
    }

    public function tambah_pinjam()
    {
        $isi['content'] = 'transaksi/form_pinjam';
        $isi['judul'] = 'Tambah Data Peminjaman';
        $isi['id_pinjam'] = $this->M_pinjam->id_pinjam();
        $isi['id_anggota'] = $this->db->get('anggota')->result();
        $isi['id_barang'] = $this->db->get('barang')->result();
        $this->load->view('v_dashboard', $isi);
    }

    public function simpan()
    {
        $data = array(
            'id_pinjam' => $this->input->post('id_pinjam'),
            'id_anggota' => $this->input->post('id_anggota'),
            'id_barang' => $this->input->post('id_barang'),
            'jumlah_pinjam' => $this->input->post('jumlah_pinjam'),
            'tgl_pinjam' => $this->input->post('tgl_pinjam'),
            'tgl_kembali' => $this->input->post('tgl_kembali')
        );
        $query = $this->db->insert('pinjam', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil disimpan');
            redirect('pinjam');
        }
    }

    public function kembalikan($id)
    {
        $data = $this->M_pinjam->getDataById_pinjam($id);
        $kembalikan = array(
            'id_anggota' => $data['id_anggota'],
            'id_barang' => $data['id_barang'],
            'jumlah_kembali' => $data['jumlah_pinjam'],
            'tgl_pinjam' => $data['tgl_pinjam'],
            'tgl_kembali' => $data['tgl_kembali'],
            'tgl_kembalikan' => date('Y-m-d')
        );
        $query = $this->db->insert('kembalikan', $kembalikan);
        if ($query = true) {
            $delete = $this->M_pinjam->deletepinjam($id);
            if($delete = true) {}
            $this->session->set_flashdata('info', 'Data berhasil dikembalikan');
            redirect('pinjam');
        }
        
    }

}
?>