<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	protected $user_info = array();

	public function __construct()
	{
		parent::__construct();

		$this->user_info = array('login_status' => $this->session->userdata('login_status'), 
								  'id' => $this->session->userdata('id'), 
								  'first_name' => $this->session->userdata('first_name'),
								  'last_name' => $this->session->userdata('last_name'),
								  'user_name' => $this->session->userdata('user_name'));

		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('main/index', $this->user_info);
	}

	public function projects()
	{
		$this->load->view('main/projects', $this->user_info);
	}

	public function special_thanks()
	{
		$this->load->view('main/special_thanks', $this->user_info);
	}

	public function coming_soon()
	{
		$this->load->view('main/coming_soon', $this->user_info);
	}
}

//end of main controller