<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tlouis extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('tloui/index');
	}

	public function animations()
	{
		$this->load->view('tloui/animations');
	}

	public function fineart()
	{
		$this->load->view('tloui/FineArt');
	}

	public function resume()
	{
		$this->load->view('tloui/Resume');
	}

	public function contactinfo()
	{
		$this->load->view('tloui/ContactInfo');
	}
}

//end of tlouis controller