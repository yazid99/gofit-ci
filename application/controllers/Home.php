<?php
    class Home extends CI_Controller {
        public function index()
        {
            $this->load->view('templates/headerindex');
            $this->load->view('home/index');
            $this->load->view('templates/footerindex');
        }

        public function katalog()
        {
            $this->load->view('templates/headerindex');
            $this->load->view('misc/index');
            $this->load->view('templates/footerindex');
        }
}