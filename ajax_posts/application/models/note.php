<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Note extends CI_Model {

	public function add_post($result)
	{
		// var_dump($result);die();
		$query = "INSERT INTO posts (description, created_at) VALUES (?,?)";
		$values = array($result['description'], $result['created_at']);
		return $this->db->query($query, $values);
	}

	public function display_posts()
	{
		return $this->db->query("SELECT * FROM posts")->result_array();
	}
}