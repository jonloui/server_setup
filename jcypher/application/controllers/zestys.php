<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('main.php');

class Zestys extends Main {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('zesty/index');
	}

	public function trialist()
	{
		$this->load->view('zesty/trialist');
	}

	public function trialist_trial1()
	{
		$this->load->view('zesty/trialist/trial1');
	}

	public function trialist_trial1b()
	{
		$this->load->view('zesty/trialist/trial1b');
	}

	public function trialist_trial2()
	{
		$this->load->view('zesty/trialist/trial2');
	}

	public function trialist_trial2b()
	{
		$this->load->view('zesty/trialist/trial2b');
	}

	public function trialist_trial3()
	{
		$this->load->view('zesty/trialist/trial3');
	}

	public function trialist_trial3b()
	{
		$this->load->view('zesty/trialist/trial3b');
	}

	public function trainer()
	{
		$this->load->view('zesty/trainer');
	}

	public function trainer_trial1()
	{
		$this->load->view('zesty/trainer/trial1');
	}

	public function trainer_trial2()
	{
		$this->load->view('zesty/trainer/trial2');
	}

	public function trainer_trial3()
	{
		$this->load->view('zesty/trainer/trial3');
	}
}

//end of zesty controller