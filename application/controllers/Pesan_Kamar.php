<?php

class Pesan_Kamar extends CI_Controller{
    public function index()
	{
		$this->load->view('patial_home/header');
		$this->load->view('patial_home/navigasi');
		$this->load->view('patial_home/modals');
		$this->load->view('patial_home/js');
		$this->load->view('content/Pesan_Kamar');
		$this->load->view('patial_home/footer');
		
	}
}