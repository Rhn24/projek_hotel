<?php

class Admin extends CI_Controller
{
    public function index()
	{
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/navigasi');
        $this->load->view('admin/index');
        $this->load->view('partial_admin/partial');
        $this->load->view('partial_admin/sidebar');
        $this->load->view('partial_admin/partial_akhir');
        $this->load->view('partial_admin/js');
        $this->load->view('partial_admin/footer');
    }
}