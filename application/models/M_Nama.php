<?php

class M_Nama extends CI_model
{
	public function getAllData()
	{
		return $this->db->get('device')->result_array();
	}

	public function getDataById($id)
	{
		return $this->db->get_where('device', ['id_device' => $id])->row_array();
	}
	public function update()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
		];

		$this->db->where('id_device', $this->input->post('id', true));
		$this->db->update('device', $data);
	}
}
