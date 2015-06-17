<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cyphers extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('cypher');
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
		$data['cypher'] = $this->input->post('cypher');
		$data['tip'] = $this->input->post('hint');
		$result = $this->cypher->add_cypher($data);
		
		if($result == 'valid')
			$this->session->set_flashdata('success', 'Cypher was saved to the database!');
		else
			$this->session->set_flashdata('error', $result);
		
		redirect('/cypher');
	}

	public function show($id)
	{
		$data['cypher'] = $this->cypher->get_cypher($id);
		$this->load->view('cypher/show', $data);
	}
}

//end of cyphers controller