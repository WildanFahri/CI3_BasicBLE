<?php

class M_Ble extends CI_model
{
	public function getAllData()
	{
		$this->db->join('device', 'data.device_id=device.id_device');
		return $this->db->get('data')->result_array();
	}

	public function getNama1()
	{
		$this->db->where('device_id', 1);
		$this->db->join('device', 'data.device_id=device.id_device');
		return $this->db->get('data')->row_array();
	}
	public function getNama2()
	{
		$this->db->where('device_id', 2);
		$this->db->join('device', 'data.device_id=device.id_device');
		return $this->db->get('data')->row_array();
	}
	public function getNama3()
	{
		$this->db->where('device_id', 3);
		$this->db->join('device', 'data.device_id=device.id_device');
		return $this->db->get('data')->row_array();
	}
	public function getNama4()
	{
		$this->db->where('device_id', 4);
		$this->db->join('device', 'data.device_id=device.id_device');
		return $this->db->get('data')->row_array();
	}

	public function getLastData1()
	{
		$this->db->where('device_id', 1);
		$this->db->join('device', 'data.device_id=device.id_device');
		$this->db->order_by('id_data', 'DESC');
		return $this->db->get('data', 1)->result_array();
	}
	public function getLastData2()
	{
		$this->db->where('device_id', 2);
		$this->db->join('device', 'data.device_id=device.id_device');
		$this->db->order_by('id_data', 'DESC');
		return $this->db->get('data', 1)->result_array();
	}
	public function getLastData3()
	{
		$this->db->where('device_id', 3);
		$this->db->join('device', 'data.device_id=device.id_device');
		$this->db->order_by('id_data', 'DESC');
		return $this->db->get('data', 1)->result_array();
	}
	public function getLastData4()
	{
		$this->db->where('device_id', 4);
		$this->db->join('device', 'data.device_id=device.id_device');
		$this->db->order_by('id_data', 'DESC');
		return $this->db->get('data', 1)->result_array();
	}

	public function dataGrafik1()
	{
		// $querry = $this->db->query('SELECT * FROM data1 WHERE id BETWEEN (SELECT MAX(ID) FROM data1) - 5 AND (SELECT MAX(ID) FROM data1);');
		// return $querry->result_array();
		$this->db->where('device_id', 1);
		return $this->db->get('data')->result_array();
	}

	public function dataGrafik2()
	{
		// $querry = $this->db->query('SELECT * FROM data2 WHERE id BETWEEN (SELECT MAX(ID) FROM data2) - 5 AND (SELECT MAX(ID) FROM data2);');
		// return $querry->result_array();
		$this->db->where('device_id', 2);
		return $this->db->get('data')->result_array();
	}

	public function dataGrafik3()
	{
		// $querry = $this->db->query('SELECT * FROM data3 WHERE id BETWEEN (SELECT MAX(ID) FROM data3) - 5 AND (SELECT MAX(ID) FROM data3);');
		// return $querry->result_array();
		$this->db->where('device_id', 3);
		return $this->db->get('data')->result_array();
	}

	public function dataGrafik4()
	{
		// $querry = $this->db->query('SELECT * FROM data4 WHERE id BETWEEN (SELECT MAX(ID) FROM data4) - 5 AND (SELECT MAX(ID) FROM data4);');
		// return $querry->result_array();
		$this->db->where('device_id', 4);
		return $this->db->get('data')->result_array();
	}
}
