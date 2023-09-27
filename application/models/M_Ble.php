<?php

class M_Ble extends CI_model
{
	public function getAllData($table)
	{
		return $this->db->get($table);
	}

	public function getLastData($table)
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get($table, 1);
	}

	public function dataGrafik1()
	{
		$querry = $this->db->query('SELECT * FROM data1 WHERE id BETWEEN (SELECT MAX(ID) FROM data1) - 5 AND (SELECT MAX(ID) FROM data1);');
		return $querry->result_array();
	}

	public function dataGrafik2()
	{
		$querry = $this->db->query('SELECT * FROM data2 WHERE id BETWEEN (SELECT MAX(ID) FROM data2) - 5 AND (SELECT MAX(ID) FROM data2);');
		return $querry->result_array();
	}

	public function dataGrafik3()
	{
		$querry = $this->db->query('SELECT * FROM data3 WHERE id BETWEEN (SELECT MAX(ID) FROM data3) - 5 AND (SELECT MAX(ID) FROM data3);');
		return $querry->result_array();
	}

	public function dataGrafik4()
	{
		$querry = $this->db->query('SELECT * FROM data4 WHERE id BETWEEN (SELECT MAX(ID) FROM data4) - 5 AND (SELECT MAX(ID) FROM data4);');
		return $querry->result_array();
	}
}
