<?php
class Login extends CI_CONTROLLER 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_Model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('login/index');
    }

    public function proses_login()
    {
        $user = $this->input->post("username"); 
        $pass = $this->input->post("password");

        $login = $this->Users_Model->user_auth($user, $pass);

        if(!empty($login)){
            $this->session->set_userdata($login);
            redirect(base_url());
        }else{
            $this->session->set_flashdata('gagal','Username atau password salah');
            redirect('login/index');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout', 'Anda telah berhasil logout');
        redirect(base_url());
    }
}