<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('main.php');

class Cyphers extends Main {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('cypher');
	}

	public function jcyphers_api()
	{
		$data["cyphers"] = $this->cypher->get_all_cyphers();
		echo json_encode($data);
	}

	public function index()
	{
		/*if($this->session->userdata('cypher'))
		{
			$data = array(
				'test' => $this->session->userdata('cypher')
			);
		}
		else
		{
			$data = array(
				'test' => "No cypher has been entered!"
			);
		}
		$this->load->view('cypher/index', $data);
		*/

		array_key_exists("login_status", $this->user_info) ? $data["login_status"] = $this->user_info["login_status"] : $data["login_status"] = false;
		array_key_exists("id", $this->user_info) && $this->user_info["id"] != false ? $data["id"] = $this->user_info["id"] : $data["id"]=1;
		array_key_exists("first_name", $this->user_info) ? $data["first_name"] = $this->user_info["first_name"] : $data["first_name"] = "Jon";

		array_key_exists("user_name", $this->user_info) && $this->user_info["user_name"] != false ? $data["user_name"] = $this->user_info["user_name"] : $data["user_name"] = "Jon";
		// resizing user_name
		strlen($data["user_name"]) > 10 ? $data["user_name"] = substr($data["user_name"], 0, 10) . "..." : "";

		$data['all_cyphers'] = $this->cypher->get_all_cyphers();
		
		// get ids of cyphers created by current logged in user
		if($data["login_status"])
		{
			$data['cyphers_by_current_user'] = $this->cypher->get_cyphers_created_by_user($this->user_info['id']);
		}
		else
			$data['cyphers_by_current_user'] = [];

		$this->load->view('cypher/index', $data);
	}

	public function create()
	{
		$data['user_id'] = $this->user_info['id'];
		// $data['cypher'] = $this->input->post("cypher", true);
		// $data['hint'] = $this->input->post("hint", true);
		$data['cypher'] = strtoupper($this->input->post('cypher', TRUE));
		$data['hint'] = strtoupper($this->input->post('hint', TRUE));
		$result = $this->cypher->add_cypher($data);

		if($result > 0)
		{
			$data['cypher_id'] = $result;
			$data['user_name'] = $this->cypher->get_cypher_owner($result);
			// $this->session->set_flashdata('success', 'Cypher was saved to the database!');
			$cypher['new_cypher'] = $this->load->view("partials/cypher/add_new_cypher", $data, TRUE);
			$cypher['error'] = false;
		}
		else
		{
			$cypher['error'] = $result;
		}
		// 	// $this->session->set_flashdata('error', $data['id']);
		// // redirect('/cypher');
		echo json_encode($cypher);
	}

	public function show($id)
	{
		$data['cypher'] = $this->cypher->get_cypher($id);

		// USER INFO
		array_key_exists("login_status", $this->user_info) ? $data["login_status"] = $this->user_info["login_status"] : $data["login_status"] = false;
		array_key_exists("id", $this->user_info) && $this->user_info["id"] != false ? $data["id"] = $this->user_info["id"] : $data["id"]=1;
		array_key_exists("first_name", $this->user_info) ? $data["first_name"] = $this->user_info["first_name"] : $data["first_name"] = "Jon";
		array_key_exists("user_name", $this->user_info) && $this->user_info["user_name"] != false ? $data["user_name"] = $this->user_info["user_name"] : $data["user_name"] = "Jon";
		// resizing user_name
		strlen($data["user_name"]) > 10 ? $data["user_name"] = substr($data["user_name"], 0, 10) . "..." : "";

		$this->load->view('cypher/show', $data);
	}

	public function edit($id)
	{
		$data['cypher'] = $this->cypher->get_cypher($id);
		$cypher_owner_info = $this->cypher->get_cypher_owner($id);

		// if no user is logged in or another user is trying to edit a cypher they didn't create, go to root cypher page?
		if($cypher_owner_info['cypher_owner_id'] != $this->user_info['id'] || !$this->user_info['login_status'])
		{
			redirect(base_url('/cypher'));
		}		

		// USER INFO
		array_key_exists("login_status", $this->user_info) ? $data["login_status"] = $this->user_info["login_status"] : $data["login_status"] = false;
		array_key_exists("id", $this->user_info) && $this->user_info["id"] != false ? $data["id"] = $this->user_info["id"] : $data["id"]=1;
		array_key_exists("first_name", $this->user_info) ? $data["first_name"] = $this->user_info["first_name"] : $data["first_name"] = "Jon";
		array_key_exists("user_name", $this->user_info) && $this->user_info["user_name"] != false ? $data["user_name"] = $this->user_info["user_name"] : $data["user_name"] = "Jon";
		// resizing user_name
		strlen($data["user_name"]) > 10 ? $data["user_name"] = substr($data["user_name"], 0, 10) . "..." : "";

		$this->load->view('cypher/edit', $data);
		// redirect(base_url('/'));
		// var_dump($cypher_owner_info['cypher_owner_id']);
	}

	public function update($id)
	{
		$cypher_info['id'] = $id;
		$cypher_info['cypher'] = $this->input->post('cypher', true);
		$this->cypher->update_cypher($cypher_info);

		$this->session->set_flashdata('success', 'Cypher was updated!');

		redirect(base_url('/cyphers/edit/' . $id));
	}
}

//end of cyphers controller