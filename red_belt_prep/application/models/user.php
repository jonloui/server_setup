<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model
{
	function register_user($user)
	{
		date_default_timezone_set('America/Los_Angeles');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', "Name", "trim|required");
		$this->form_validation->set_rules('alias', "Alias", "trim|required");
		$this->form_validation->set_rules('email', "Email", "valid_email|required|is_unique[users.email]");
		$this->form_validation->set_rules('password', "Password", "required|matches[confirm_password]|min_length[8]");

		if($this->form_validation->run() === false)
		{
			$result = validation_errors();
		}
		else
		{
			$user['password'] = md5($user['password']);
			$user['created_at'] = date("Y-m-d, H:i:s");
			if(strpos($user['name'], " "))
			{
				$first_name = substr($user['name'], 0, strpos($user['name'], " "));
				$last_name = substr($user['name'], strpos($user['name'], " ")+1);
			}
			else
			{
				$first_name = $user['name'];
				$last_name = "";
			}
			
			$query = "INSERT INTO users(first_name, last_name, alias, email, password, created_at)
					  VALUES ('{$first_name}', '{$last_name}', '{$user['alias']}', 
					  		  '{$user['email']}', '{$user['password']}', '{$user['created_at']}');";
			$result = $this->db->query($query);
			
			// store user id and first name in $result
			if($result)
				$result = array('id' => $this->db->insert_id(), 
								'first_name' => $first_name);
			else
				$result = "Error registering";
		}

		return $result;
	}

	function login($user)
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', "Email", "valid_email|required");
		$this->form_validation->set_rules('password', "Password", "required|min_length[8]");

		if($this->form_validation->run() === false)
		{
			$result = validation_errors();
		}
		else
		{
			$cur_user = $this->db->query("SELECT id, first_name, password FROM users
										  WHERE email='{$user['email']}';")->row_array();

			if(!empty($cur_user))
			{
				if ($cur_user['password'] != md5($user['password']))
					$result = 'Incorrect password!';
				else
				{
					$result = array('id' => $cur_user['id'], 
									'first_name' => $cur_user['first_name']);
				}					
			}
			else
				$result = "User doesn't exist!";
		}

		return $result;
	}

	function get_user_info($user_id)
	{
		return $this->db->query("SELECT CONCAT(users.first_name, ' ', users.last_name) AS name, users.alias, users.email, count(reviews.id) AS total_reviews
								 FROM users JOIN reviews ON users.id = reviews.user_id
								 WHERE users.id = {$user_id};")->row_array();
	}

	function get_user_reviews($user_id)
	{
		return $this->db->query("SELECT books.id, books.title 
								 FROM reviews JOIN books ON books.id = reviews.book_id
								 WHERE reviews.user_id = {$user_id};")->result_array();
	}
}

//end of user model