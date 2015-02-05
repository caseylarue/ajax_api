<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function direction()
	{
		$html = file_get_contents("https://maps.googleapis.com/maps/api/directions/json?origin=".($this->input->post('origin')."&destination=".($this->input->post('destination')))."&sensor=false");

		$this->output
			->set_content_type('application/json')
			->set_output($html);

		json_encode($html);
	}
}


//end of main controller