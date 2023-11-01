<?php

class login extends CI_Controller{

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_login');
    }

    public function index()
    {
        $this->load->view('v_login');
    }

    public function proses_login()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $this->M_login->proses_login($user, $pass);
    }
        
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
    }
?>