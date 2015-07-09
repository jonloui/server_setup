<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('main.php');

class Users extends Main {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('user');
	}

	public function index()
	{
		// $id = $this->user['id'];
		//  Do I want to show all user's or just create one user's profile?
	}

	public function create()
	{
		$result = $this->user->add_user($this->input->post(NULL, true));
		if($result > 0)
		{
			$this->session->set_userdata('login_status', true);
			$this->session->set_userdata('first_name',$this->input->post('first_name'));
			$this->session->set_userdata('last_name',$this->input->post('last_name'));
			$this->session->set_userdata('user_name',$this->input->post('user_name'));
			$this->session->set_userdata('id',$result);
			redirect(base_url('/projects'));
		}
		else
		{
			$this->session->set_flashdata('account_error', $result);
			redirect(base_url('/'));
		}
	}

	public function show($id)
	{
		// show a user's profile based upon $id
	}
}

//end of users controller