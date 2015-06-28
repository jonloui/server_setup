<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Baby_leos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('baby_leo/index');
	}
}

//end of baby_leos controller