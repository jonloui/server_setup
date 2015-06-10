<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}

	public function index()
	{
		$this->load->model("Course");
		$all_courses = $this->Course->get_courses();

		$this->session->set_userdata('current_courses', $all_courses);
		$course = array('all_courses' => $all_courses);
		$this->load->view('index', $course);
	}

	public function add()
	{
		// store post values in variables
		$course_name = $this->input->post('name', TRUE);
		$description = $this->input->post('description', TRUE);

		if(isset($course_name) && strlen($course_name) >= 15)
		{
			$this->load->model("Course");
			$course_info = array('name' => $course_name, 'description' => $description);

			$result = $this->Course->add_course($course_info);
			
			if($result == TRUE)
				redirect(base_url('/'));
		}
		else
		{
			$course = array('all_courses' => $this->session->userdata("current_courses"), 
						'error' => "Form is wrong!");
			$this->load->view('index', $course);
		}
	}

	public function destroy($id)
	{
		$this->load->model("Course");
		if($this->input->post('yes'))
		{
			$course_id = $this->session->userdata('course_id');
			$result = $this->Course->remove_course($course_id);
			if($result)
				redirect(base_url('/'));
		}
		else if($this->input->post('no'))
		{
			redirect(base_url('/'));
		}
		else
		{
			$this->session->set_userdata('course_id', $id);
			$course = $this->Course->get_one_course($id);
			
			$this->load->view('destroy', $course);
		}
		
	}
}

//end of courses controller