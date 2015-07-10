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
		array_key_exists("first_name", $this->user_info) ? $data["first_name"] = $this->user_info["first_name"] : $data["first_name"] = "Jon";
		$data['all_cyphers'] = $this->cypher->get_all_cyphers();
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
		array_key_exists("login_status", $this->user_info) ? $data["login_status"] = $this->user_info["login_status"] : $data["login_status"] = false;
		array_key_exists("first_name", $this->user_info) ? $data["first_name"] = $this->user_info["first_name"] : $data["first_name"] = "Jon";
		$data['cypher'] = $this->cypher->get_cypher($id);
		$this->load->view('cypher/show', $data);
	}
}

//end of cyphers controller