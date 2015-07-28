<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('main.php');

class Bookmarks extends Main {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('bookmark');
	}

	public function index()
	{
		array_key_exists("login_status", $this->user_info) ? $data["login_status"] = $this->user_info["login_status"] : $data["login_status"] = false;
		array_key_exists("id", $this->user_info) && $this->user_info["id"] != false ? $id = $this->user_info["id"] : $id=1;
		array_key_exists("first_name", $this->user_info) && $this->user_info["first_name"] != false ? $data["first_name"] = $this->user_info["first_name"] : $data["first_name"] = "Jon";

		array_key_exists("user_name", $this->user_info) && $this->user_info["user_name"] != false ? $data["user_name"] = $this->user_info["user_name"] : $data["user_name"] = "Jon";
		strlen($data["user_name"]) > 10 ? $data["user_name"] = substr($data["user_name"], 0, 10) . "..." : "";

		$data["id"] = $id;
		$data["sections"] = $this->bookmark->get_all_sections($id);
		$data["links"] = $this->bookmark->get_all_links();
		$data["link_locations"] = $this->bookmark->get_all_link_locations();
		
		$this->load->view('bookmark/index', $data);
	}

	// modify create function
	public function create($number)
	{
		$status;
		$number = (int)$number;

		if($number == 0)
		{
			$data['section_name'] = $this->input->post('section_name', true);
			array_key_exists("id", $this->user_info) && $this->user_info["id"] != false ? $data['user_id'] = $this->user_info["id"] : $data['user_id']=1;
			$status = $this->bookmark->add_section($data);
		}
		else if($number > 0)
		{
			$data['id'] = $number;
			$data['link'] = $this->input->post('link', true);
			$data['name'] = $this->input->post('link_name', true);
			$status = $this->bookmark->add_link($data);
		}

		redirect(base_url('/bookmark'));
	}

	// make a delete function
	public function destroy()
	{
		//
	}
}

//end of bookmarks controller