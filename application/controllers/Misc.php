<?php
class Misc extends CI_CONTROLLER
{
    public function index()
    {
        $data['title'] = 'Katalog';
        $this->load->view('templates/headerindex');
        $this->load->view('misc/index');
        $this->load->view('templates/footerindex');
    }
    
}