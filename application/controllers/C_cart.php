<?php
class C_cart extends CI_controller
{

	public function index()
	{
		$this->load->model('M_lapangan');
		$data['laps'] = $this->M_lapangan->getBookingan($this->session->userdata('id'));
		$this->load->view('templates/headerindex');
    	$this->load->view('misc/cart',$data);
    	$this->load->view('templates/footerindex');
	}


	public function deleteCartContent($id_b)
	{
		$this->load->model('M_lapangan');
		$this->M_lapangan->deleteBookingan($id_b);
		redirect('C_cart');
	}

}
?>