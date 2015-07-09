<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calculators extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('calculator/index', $this->user_info);
	}
}

//end of calculators controller