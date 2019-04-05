<?php 
class Users_Model extends CI_Model {
    private $_table = 'tb_users';

    public function tambahDataUser()
    {
        $data = [
            "nama" => $this->input->post('name', true),
            "email" => $this->input->post('email', true),
            "username" => $this->input->post('username', true),
            "password" =>$this->input->post('password', true),
        ];

        return $this->db->insert($this->_table,$data);
    }

    public function user_auth($username, $password)
    {
        $this->db->where("email = '$username' or username = '$username'");
        $this->db->where('password',$password); 
        $query = $this->db->get('tb_users');
        return $query->row_array();
    }
}