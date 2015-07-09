<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('main.php');

class Sessions extends Main {

	public function __construct()
	{
		parent::__construct();

		// $this->output->enable_profiler();
	}

	public function create()
	{
		$this->load->model('user');
		$user = $this->user->login($this->input->post(NULL,true));
		if(array_key_exists("id", $user))
		{
			$this->session->set_userdata('login_status', true);
			$this->session->set_userdata("id", $user['id']);
			$this->session->set_userdata("first_name", $user['first_name']);
			$this->session->set_userdata("last_name", $user['last_name']);
			$this->session->set_userdata("user_name", $user['user_name']);
			redirect(base_url('/projects'));
		}
		else
		{
			$this->session->set_flashdata("login_error", $user);
			redirect(base_url('/'));
		}
	}

	public function destroy()
	{
		$this->session->sess_destroy();
		redirect(base_url('/'));
	}
}

//end of sessions controller