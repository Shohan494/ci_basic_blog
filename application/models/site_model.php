<?php

class Site_model extends CI_Model
{
	function getRecords()
	{
		$query = $this->db->get("data");
		return $query->result();
	}

	function addRecord($data)
	{
		$this->db->insert("data", $data);
		return;
	}

	function updateRecord($data)
	{
		$this->db->where("id", 2);
		$this->db->update("data", $data);
		return;
	}

	function delete()
	{
		$this->db->where("id", $this->uri->segment(3));
		$this->db->delete("data");
	}

}

?>
