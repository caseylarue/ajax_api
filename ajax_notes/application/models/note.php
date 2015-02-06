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
		// return $this->db->query("SELECT * FROM posts")->result_array();
		return $this->db->query("SELECT * FROM posts ORDER BY created_at DESC, updated_at DESC")->result_array();
	}

	public function show_recent_post($id) 
	{
		// return $this->db->query("SELECT * FROM posts WHERE id=?", array($id))->result_array();
		return $this->db->query("SELECT * FROM posts WHERE id=?", array($id))->result_array();
	}

	public function update_post($input)
	{
		$data = array('title' => $input['title'],
						'description' => $input['description'],
						'updated_at' => $input['updated_at']
					);
		$this->db->where('id', $input['id']);
		$this->db->update('posts', $data);
	}

	public function delete_post($input)
	{
		$this->db->delete('posts', array('id' => $input['id']));
	}
}