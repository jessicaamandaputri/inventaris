<?php

class Anggota extends CI_Controller{

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_anggota');
    }

    public function index()
    {
        $isi['content'] = 'anggota/v_anggota';
        $isi['judul'] = 'Data Anggota';
        $isi['data'] = $this->db->get('anggota')->result();
        $this->load->view('v_dashboard', $isi);
    }

    public function tambah_anggota()
    {
        $isi['content'] = 'anggota/form_anggota';
        $isi['judul'] = 'Tambah Data Anggota';
        $isi['id_anggota'] = $this->M_anggota->id_anggota();
        $this->load->view('v_dashboard', $isi);
    }

    public function simpan()
    {
        $isi['upload_path'] = 'assets/img/anggota';
        $isi['allowed_types'] = 'jpg|png';
        $isi['max_size'] = '1024';
        $this->load->library('upload', $isi);
        $this->upload->do_upload('pass_foto');
        $file_name= $this->upload->data();

        $data = array(
            'id_anggota' => $this->input->post('id_anggota'),
            'nama_anggota' => $this->input->post('nama_anggota'),
            'jk' => $this->input->post('jk'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'pass_foto' => $file_name['file_name']
        );
        $query = $this->db->insert('anggota', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil disimpan');
            redirect('anggota');
        }
    }

        public function edit($id)
    {
        $isi['content'] = 'anggota/edit_anggota';
        $isi['judul'] = 'Edit Data Anggota';
        $isi['data'] = $this->M_anggota->edit($id);
        $this->load->view('v_dashboard', $isi);
    }

    public function update()
    {
        $id_anggota = $this->input->post('id_anggota');
        $data = array(
            'id_anggota' => $this->input->post('id_anggota'),
            'nama_anggota' => $this->input->post('nama_anggota'),
            'jk' => $this->input->post('jk'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'pass_foto' => $this->input->post('pass_foto')
        );
        $query = $this->M_anggota->update($id_anggota, $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil diupdate');
            redirect('anggota');
        }
    }

    public function hapus($id)
    {
    $query = $this->M_anggota->hapus($id);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil dihapus');
            redirect('anggota');
        }
    }
}
?>