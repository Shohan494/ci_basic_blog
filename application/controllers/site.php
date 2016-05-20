<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller 
{
	public function index()
	{
		$data = array();

		if($query = $this->site_model->getRecords())
		{
			$data["records"] = $query; 
		}

		$this->load->view("site_view", $data);
	}

	function create()
	{
		$data = array(
			"title" => $this->input->post("title"),
			"content" => $this->input->post("content")
			);

		$this->site_model->addRecord($data);
		$this->index();
	}

	function delete()
	{
		$this->site_model->delete();
		$this->index();
	}
}

		