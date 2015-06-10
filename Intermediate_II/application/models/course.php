<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Model {
	function add_course($course)
	{
		$query = "INSERT INTO courses (name, description, created_at) VALUES (?,?,?);";
		$values = array($course['name'], $course['description'], date("Y-m-d, H:i:s"));
		return $this->db->query($query, $values);

	}

	function get_courses()
	{
		return $this->db->query("SELECT * FROM courses ORDER BY created_at DESC;")->result_array();
	}

	function remove_course($id)
	{
		return $this->db->query("DELETE FROM courses WHERE id={$id};");
	}

	function get_one_course($id)
	{
		return $this->db->query("SELECT name, description FROM courses WHERE id={$id};")->row_array();
	}
}

//end of course model