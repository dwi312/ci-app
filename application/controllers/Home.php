<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data['bg'] = 'dark';
        $data['judul'] = 'Home';

        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}
