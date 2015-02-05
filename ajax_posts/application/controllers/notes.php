<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function create()
	{
		$result = $this->input->post();
		$result['created_at'] = date('Y-m-d h:i:s');
		$this->load->model('Note');
		$this->Note->add_post($result);
		redirect('/notes/display');
	}

	public function display()
	{
		$this->load->model('Note');
		$results = $this->Note->display_posts();
		$data['posts'] = $results;
		echo json_encode($data);
	}
}

//end of main controller