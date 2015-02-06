<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		// $this->pull_posts();
		$this->load->view('index');
	}

	public function posts()
	{
		$input = $this->input->post();
		$input['created_at'] = date('Y-m-d h:i:s');
		$this->load->model('Note');
		$this->Note->add_post($input);
		$id = $this->db->insert_id();
		$results = $this->Note->show_recent_post($id);
		echo json_encode($results);

		// $this->show_recent_post($id);
		// redirect('/notes/show_recent_post');
	}

	public function pull_posts()
	{
		$this->load->model('Note');
		$data = $this->Note->pull_posts();
		echo json_encode($data);
	}

	// public function show_recent_post($id)
	// {
	// 	$this->load->model('Note');
		
	// }
}

//end of main controller