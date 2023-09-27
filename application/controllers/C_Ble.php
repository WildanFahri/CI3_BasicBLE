<?php

class C_Ble extends CI_Controller
{
	public  function __construct()
	{
		parent::__construct();
		$this->load->model('M_Ble');
	}
	public function index()
	{
		$data['title'] = 'Halaman Heart Rate';
		$this->load->view('Templates/header', $data);
		$this->load->view('V_Ble/index');
		$this->load->view('Templates/footer');
	}

	public function chart()
	{
		$data['title'] = 'Halaman Grafik';
		$this->load->view('Templates/header', $data);
		$this->load->view('V_Ble/chart');
		$this->load->view('Templates/footer');
	}

	public function ambildata()
	{
		$dataBle = $this->M_Ble->getAllData('data')->result();
		echo json_encode($dataBle);
	}

	public function ambildataterakhir()
	{
		$dataBle = $this->M_Ble->getLastData('data')->result();
		echo json_encode($dataBle);
	}

	public function grafik()
	{
		$data = $this->M_Ble->datagrafik();
		echo json_encode($data);
	}
}
