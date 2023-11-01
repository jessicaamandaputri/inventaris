<?php

class m_squirty extends CI_Model{

    public function getSquirty()
    {
        $username = $this->session->userdata('username');
        if (empty($username)){
            $this->session->sess_destroy();
            redirect('login');
        }
    }
}