<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function random() 
	{
		$names = array('John', 'Michael', 'Joe', 'Trey');
		$output = array('name' => $names[rand(0,count($names)-1)] , "age" => rand(18,60));
		echo json_encode($output);
	}
}

//end of main controller