<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('main.php');

class Users extends Main {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('user');
		$this->load->model('cypher');
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
		$data['login_status'] = $this->user_info['login_status'];
		// show a user's profile based upon $id
		$id == $this->user_info['id'] ? $data['cur_user'] = true : $data['cur_user'] = false;

		$profile = $this->user->get_user_by_id($id);

		$data['id'] = $id;
		$data['first_name'] = $profile['first_name'];
		$data['last_name'] = $profile['last_name'];
		$data['user_name'] = $profile['user_name'];
		$data['email'] = $profile['email'];

		$data['cyphers'] = $this->cypher->get_cyphers_by_id($id);
		// var_dump($data);

		$this->load->view('user/show', $data);
	}

	public function update()
	{
		// $this->input->post(first_name, true);
	}
}

//end of users controller