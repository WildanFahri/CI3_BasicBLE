<?php

class C_Nama extends CI_Controller
{
	public  function __construct()
	{
		parent::__construct();
		$this->load->model('M_Ble');
		$this->load->model('M_Home');
		$this->load->model('M_Nama');
		// if (!empty($this->M_Ble->nama())) {
		// 	$this->session->set_tempdata('nama1', $this->M_Ble->nama());
		// }
		// var_dump($this->M_Ble->nama());
	}
	public function index()
	{
		$data['title'] = 'Halaman Nama';
		$data['nama'] = $this->M_Nama->getAllData();
		$this->load->view('Templates/header', $data);
		$this->load->view('V_Nama/index', $data);
		$this->load->view('Templates/footer');
	}

	public function edit($id)
	{
		$data['title'] = 'Form Edit Nama';
		$data['nama'] = $this->M_Nama->getDataById($id);
		$this->form_validation->set_rules('nama', 'Nama', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Templates/header', $data);
			$this->load->view('V_Nama/edit', $data);
			$this->load->view('Templates/footer');
		} else {
			$this->M_Nama->update();
			$this->session->set_flashdata('flash', 'Diperbarui');
			redirect('C_Nama');
		}
	}
	// public function index()
	// {
	// 	$data['title'] = 'Halaman Nama';
	// 	$nama = $this->M_Nama->store();
	// $this->form_validation->set_rules('nama', 'Nama Siswa', 'required');
	// $this->form_validation->set_rules('nis', 'NIS', 'required|numeric');
	// $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
	// $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
	// $this->form_validation->set_rules('telepon', 'Telepon', 'required|numeric');
	// $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

	// if ($this->form_validation->run() == FALSE) {
	// $this->load->view('Templates/header', $data);
	// $this->load->view('V_Nama/index', $nama);
	// $this->load->view('Templates/footer');
	// } else {
	// $this->M_Nama->store();
	// $this->session->set_tempdata('nama1', $nama);
	// var_dump($nama);

	// $this->load->view('V_Nama/index');
	// }
	// }

	// public function create()
	// {
	// 	$data['title'] = 'Form Tambah Nama';
	// 	// $data['nama'] = $this->M_Nama->store();
	// 	$this->form_validation->set_rules('nama', 'Nama Siswa', 'required');
	// 	// $this->form_validation->set_rules('nis', 'NIS', 'required|numeric');
	// 	// $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
	// 	// $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
	// 	// $this->form_validation->set_rules('telepon', 'Telepon', 'required|numeric');
	// 	// $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

	// 	if ($this->form_validation->run() == FALSE) {
	// 		$this->load->view('Templates/header', $data);
	// 		$this->load->view('V_Nama/create');
	// 		$this->load->view('Templates/footer');
	// 	} else {
	// 		$this->M_Nama->store();
	// 		$this->session->set_tempdata('nama1', 'Berhasil');
	// 		// var_dump($nama);

	// 		// $this->load->view('V_Nama/index');
	// 	}
	// }
}
