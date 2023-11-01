<?php

class Barang extends CI_Controller{

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_barang');
    }

    public function index()
    {
        $isi['content'] = 'barang/v_barang';
        $isi['judul'] = 'Data barang';
        $isi['data'] = $this->M_barang->get_data_barang();
        $this->load->view('v_dashboard', $isi);
    }

    public function tambah_barang()
    {
        $isi['content'] = 'barang/form_barang';
        $isi['judul'] = 'Tambah Data barang';
        $isi['id_barang'] = $this->M_barang->id_barang();
        $isi['jenisbarang'] = $this->db->get('jenis_barang')->result();
        $this->load->view('v_dashboard', $isi);
    }

    public function simpan()
    {
        $config['upload_path'] = './assets/img/barang';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';

        $this->load->library('upload', $config);

        $this->upload->do_upload('foto_barang');
        $file_name= $this->upload->data();

        $data = array(
            'id_barang' => $this->input->post('id_barang'),
            'nama_barang' => $this->input->post('nama_barang'),
            'id_jenisbarang' => $this->input->post('id_jenisbarang'),
            'spesifikasi' => $this->input->post('spesifikasi'),
            'jumlah' => $this->input->post('jumlah'),
            'foto_barang' => $file_name['file_name']
        );
        $query = $this->db->insert('barang', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil disimpan');
            redirect('barang');
        }
    }

        public function edit($id)
    {
        $isi['content'] = 'barang/edit_barang';
        $isi['judul'] = 'Edit Data barang';        
        // $isi['id_barang'] = $this->M_barang->id_barang();
        $isi['jenisbarang'] = $this->db->get('jenis_barang')->result();
        $isi['data'] = $this->M_barang->edit($id);
        $this->load->view('v_dashboard', $isi);
    }

    public function update()
    {
        $config['upload_path'] = './assets/img/barang';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';

        $this->load->library('upload', $config);
        
        $this->upload->do_upload('foto_barang');
        $file_name= $this->upload->data();

        $id_barang = $this->input->post('id_barang');
        $data = array(
            'id_barang' => $this->input->post('id_barang'),
            'nama_barang' => $this->input->post('nama_barang'),
            'id_jenisbarang' => $this->input->post('id_jenisbarang'),
            'spesifikasi' => $this->input->post('spesifikasi'),
            'jumlah' => $this->input->post('jumlah'),
            'foto_barang' => $file_name['file_name']

        );
        $query = $this->M_barang->update($id_barang, $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil diupdate');
            redirect('barang');
        }
    }

    public function hapus($id)
    {
    $query = $this->M_barang->hapus($id);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil dihapus');
            redirect('barang');
        }
    }
}
?>