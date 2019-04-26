<?php
    class Home extends CI_Controller {
        public function index()
        {
            $this->load->view('templates/headerindex');
            $this->load->view('home/index');
            $this->load->view('templates/footerindex');
        }

        public function lapangan($id)
    	{
    	$this->load->model('M_lapangan');
        $data['lapangan'] = $this->M_lapangan->selectLapangan($id);

        $this->load->view('templates/headerindex');
        $this->load->view('misc/V_product',$data);
        $this->load->view('templates/footerindex');
   		}
}