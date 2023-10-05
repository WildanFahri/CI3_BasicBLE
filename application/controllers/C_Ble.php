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
		$data['ble'] = $this->M_Ble->getAllData();
		$this->load->view('Templates/header', $data);
		$this->load->view('V_Ble/index', $data);
		$this->load->view('Templates/footer');
	}

	public function chart()
	{
		$data['title'] = 'Halaman Grafik';
		$data['nama1'] = $this->M_Ble->getNama1();
		// $data['nama2'] = $this->M_Ble->getNama2();
		// $data['nama3'] = $this->M_Ble->getNama3();
		// $data['nama4'] = $this->M_Ble->getNama4();
		$this->load->view('Templates/header', $data);
		$this->load->view('V_Ble/chart', $data);
		$this->load->view('Templates/footer');
	}

	public function ambilnama1()
	{
		$nama = $this->M_Ble->getNama1();
		echo json_encode($nama);
	}
	public function ambilnama2()
	{
		$nama = $this->M_Ble->getNama2();
		echo json_encode($nama);
	}
	public function ambilnama3()
	{
		$nama = $this->M_Ble->getNama3();
		echo json_encode($nama);
	}
	public function ambilnama4()
	{
		$nama = $this->M_Ble->getNama4();
		echo json_encode($nama);
	}

	public function ambildata1()
	{
		$dataBle = $this->M_Ble();
		echo json_encode($dataBle);
	}
	public function ambildata2()
	{
		$dataBle = $this->M_Ble();
		echo json_encode($dataBle);
	}
	public function ambildata3()
	{
		$dataBle = $this->M_Ble();
		echo json_encode($dataBle);
	}
	public function ambildata4()
	{
		$dataBle = $this->M_Ble();
		echo json_encode($dataBle);
	}

	public function ambildataterakhir1()
	{
		$dataBle = $this->M_Ble->getLastData1();
		echo json_encode($dataBle);
	}
	public function ambildataterakhir2()
	{
		$dataBle = $this->M_Ble->getLastData2();
		echo json_encode($dataBle);
	}
	public function ambildataterakhir3()
	{
		$dataBle = $this->M_Ble->getLastData3();
		echo json_encode($dataBle);
	}
	public function ambildataterakhir4()
	{
		$dataBle = $this->M_Ble->getLastData4();
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
