<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bookmarks extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('bookmark');
	}

	public function index()
	{
		$data["sections"] = $this->bookmark->get_all_sections();
		$data["links"] = $this->bookmark->get_all_links();
		$data["link_locations"] = $this->bookmark->get_all_link_locations();

		$this->load->view('bookmark/index', $data);
	}

	// make a create function
	public function create($number)
	{
		$status;
		if($number == 0)
		{
			$status = $this->bookmark->add_section($this->input->post('section_name', true));
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