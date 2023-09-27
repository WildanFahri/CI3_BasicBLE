<?php

class C_Home extends CI_Controller
{
	public  function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['title'] = 'Halaman Home';
		$this->load->view('Templates/header', $data);
		$this->load->view('V_Home/index');
		$this->load->view('Templates/footer');
	}
}
