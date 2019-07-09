<?php

class Home extends CI_Controller {

    //mengirimkan data menggunakan URL dan membuat tempalates header dan footer untuk di pakai tiap2 halaman
    public function index ($nama = 'Admin')
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}