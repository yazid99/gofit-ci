<?php 
class M_lapangan extends CI_Model {
    private $_table = 'tb_lapangan';

    public function getall()
    {
        return $this->db->get($this->_table)->result();
    }

    public function selectLapangan($id)
    {
        $this->db->where('id_lapangan',$id);
        $query = $this->db->get($this->_table);
        return $query->row();
    }

    public function insertbookingan($id_l,$id_p)
    {
        $data = array(
            "id_pengguna" => $id_p,
            "id_lapangan" =>$id_l,
        );

        return $this->db->insert('id_bookingan',$data);
    }

    public function getBookingan($id)
    {
        $text = "SELECT tb_lapangan.nama_lapangan as nama_lapangan, tb_lapangan.gambar as gambar,tb_lapangan.deskripsi_lapangan as deskripsi_lapangan, id_bookingan.id_book as id_bookingan from id_bookingan join tb_lapangan on tb_lapangan.id_lapangan = id_bookingan.id_lapangan where id_bookingan.id_pengguna = $id";
        return $this->db->query($text)->result();
    }

    public function deleteBookingan($id)
    {
        return $this->db->delete('id_bookingan',array('id_book'=>$id));   
    }
}