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

	public function dataGrafik()
	{
		$querry = $this->db->query('SELECT * FROM data WHERE id BETWEEN (SELECT MAX(ID) FROM data) - 5 AND (SELECT MAX(ID) FROM data);');
		return $querry->result_array();
		// $this->db->order_by('id', 'ASC');
		// return $this->db->get('data')->result();
	}
}
