<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cyphers extends CI_Controller {

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

		$data['all_cyphers'] = $this->cypher->get_all_cyphers();
		$this->load->view('cypher/index', $data);
	}

	public function create()
	{
		$data['cypher'] = strtoupper($this->input->post('cypher'));
		$data['hint'] = strtoupper($this->input->post('hint'));
		$result = $this->cypher->add_cypher($this->input->post(NULL, true));

		if($result > 0)
		{
			$data['id'] = $result;
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
		$this->load->view('cypher/show', $data);
	}
}

//end of cyphers controller