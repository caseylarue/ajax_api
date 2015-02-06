<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Note extends CI_Model {

	public function add_post($input)
	{
		$query = "INSERT INTO posts (title, description, created_at) VALUES (?,?,?)";
		$values = array($input['title'], $input['description'], $input['created_at']);
		return $this->db->query($query, $values);
	}

	public function pull_posts() 
	{
		return $this->db->query("SELECT * FROM posts")->result_array();
	}

	public function show_recent_post($id) 
	{

		return $this->db->query("SELECT * FROM posts WHERE id=?", array($id))->result_array();
	}

}