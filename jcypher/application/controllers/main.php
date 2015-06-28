<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('main/index');
	}

	public function projects()
	{
		$this->load->view('main/projects');
	}

	public function special_thanks()
	{
		$this->load->view('main/special_thanks');
	}

	public function coming_soon()
	{
		$this->load->view('main/coming_soon');
	}
}

//end of main controller