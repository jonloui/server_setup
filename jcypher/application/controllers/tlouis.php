<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('main.php');

class Tlouis extends Main {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('tloui/index', $this->user_info);
	}

	public function animations()
	{
		$this->load->view('tloui/animations', $this->user_info);
	}

	public function fineart()
	{
		$this->load->view('tloui/FineArt', $this->user_info);
	}

	public function resume()
	{
		$this->load->view('tloui/Resume', $this->user_info);
	}

	public function contactinfo()
	{
		$this->load->view('tloui/ContactInfo', $this->user_info);
	}
}

//end of tlouis controller