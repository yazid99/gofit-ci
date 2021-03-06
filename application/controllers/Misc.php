<?php
class Misc extends CI_CONTROLLER
{  
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_Model');
        $this->load->model('M_lapangan');


        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['lapangans']= $this->M_lapangan->getall();
        $this->load->view('templates/headerindex');
        $this->load->view('misc/index',$data);
        $this->load->view('templates/footerindex');
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('name','Name','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required');
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('pasconfirm','Password confirmation', 'required|matches[password]');

        if($this->form_validation->run()==FALSE){
            $this->load->view('misc/registrasi');  
        }else{
            $this->Users_Model->tambahDataUser();
			$this->session->set_flashdata('flash','Registrasi');
			redirect('login/index');
        }

    }
    
    public function booklapangan($id_l,$id_p)
    {
        $this->M_lapangan->insertbookingan($id_p,$id_l);
        $this->session->set_flashdata('berhasil','mantap');
        redirect('C_cart');
    }   
    
}