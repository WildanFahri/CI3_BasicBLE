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

	public function ambildata1()
	{
		$dataBle = $this->M_Ble->getAllData('data1')->result();
		echo json_encode($dataBle);
	}
	public function ambildata2()
	{
		$dataBle = $this->M_Ble->getAllData('data2')->result();
		echo json_encode($dataBle);
	}
	public function ambildata3()
	{
		$dataBle = $this->M_Ble->getAllData('data3')->result();
		echo json_encode($dataBle);
	}
	public function ambildata4()
	{
		$dataBle = $this->M_Ble->getAllData('data4')->result();
		echo json_encode($dataBle);
	}

	public function ambildataterakhir1()
	{
		$dataBle = $this->M_Ble->getLastData('data1')->result();
		echo json_encode($dataBle);
	}
	public function ambildataterakhir2()
	{
		$dataBle = $this->M_Ble->getLastData('data2')->result();
		echo json_encode($dataBle);
	}
	public function ambildataterakhir3()
	{
		$dataBle = $this->M_Ble->getLastData('data3')->result();
		echo json_encode($dataBle);
	}
	public function ambildataterakhir4()
	{
		$dataBle = $this->M_Ble->getLastData('data4')->result();
		echo json_encode($dataBle);
	}

	public function grafik1()
	{
		$data = $this->M_Ble->datagrafik1();
		echo json_encode($data);
	}

	public function grafik2()
	{
		$data = $this->M_Ble->datagrafik2();
		echo json_encode($data);
	}

	public function grafik3()
	{
		$data = $this->M_Ble->datagrafik3();
		echo json_encode($data);
	}

	public function grafik4()
	{
		$data = $this->M_Ble->datagrafik4();
		echo json_encode($data);
	}
}
