<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('main.php');

class Baby_leos extends Main {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('baby_leo/index', $this->user_info);
	}
}

//end of baby_leos controller