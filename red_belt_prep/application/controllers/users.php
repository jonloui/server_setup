<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	protected $user_info = array();
	
	public function __construct()
	{
		parent::__construct();
		$this->user_info = array('login_status' => $this->session->userdata('login_status'), 
								  'user_id' => $this->session->userdata('user_id'), 
								  'first_name' => $this->session->userdata('first_name'));
		$this->output->enable_profiler();
	}

	public function index()
	{
		if($this->session->userdata('login_status') === true)
			redirect(base_url('/books'));
		else
			$this->load->view('index');
	}

	public function register()
	{
		$this->load->model('user');
		$user_status = $this->user->register_user($this->input->post(NULL, true));

		if(gettype($user_status) == "string")
		{
			$this->session->set_flashdata("register_error", $user_status);
			redirect("/users/index");
		}
		else
		{
			$this->session->set_userdata('login_status', true);
			$this->session->set_userdata('user_id', $user_status['id']);
			$this->session->set_userdata('first_name', $user_status['first_name']);
			redirect("/books");
		}
	}

	public function login()
	{
		$this->load->model('user');
		$user_status = $this->user->login($this->input->post(NULL, true));

		if(gettype($user_status) == "string")
		{
			$this->session->set_flashdata("login_error", $user_status);
			redirect("/users/index");
		}
		else
		{
			$this->session->set_userdata('login_status', true);
			$this->session->set_userdata('user_id', $user_status['id']);
			$this->session->set_userdata('first_name', $user_status['first_name']);
			
			redirect("/books");
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('/'));
	}

	public function user_review($user_id)
	{
		// I haven't made get_user_info function
		$this->user_info['page'] = "user_review";
		$this->load->model('user');
		$this->user_info['user'] = $this->user->get_user_info($user_id);
		$this->user_info['book_list'] = $this->user->get_user_reviews($user_id);

		$this->load->view('user_review', $this->user_info);
	}
}

//end of login controller