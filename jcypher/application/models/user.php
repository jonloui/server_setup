<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {
    function add_user($user_info)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("first_name", "First Name", "trim|required|min_length[2]|max_length[50]|xss_clean");
        $this->form_validation->set_rules("last_name", "Last Name", "trim|required|min_length[2]|max_length[50]|xss_clean");
        $this->form_validation->set_rules("user_name", "User Name", "trim|min_length[2]|max_length[50]|is_unique[users.user_name]|xss_clean");
        $this->form_validation->set_rules("email", "Email", "trim|required|valid_email|is_unique[users.email]|xss_clean");
        $this->form_validation->set_rules("password", "Password", "trim|required|max_length[50]|matches[confirm_password]|xss_clean");

        if($this->form_validation->run() === false)
            return validation_errors();
        else
        {
            $user_info['password'] = md5($user_info['password']);
            
            $query = "INSERT INTO users (first_name, last_name, user_name, email, password, created_at) VALUES (?,?,?,?,?,?)";
            $values = array($user_info['first_name'], $user_info['last_name'], $user_info['user_name'], $user_info['email'], $user_info['password'], date("Y-m-d, H:i:s"));
            $result = $this->db->query($query, $values);
            
            if($result)
                return $this->db->insert_id();
            else
                return "Section was not added to the database!";
        }
    }

    function login($user_info)
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', "Email", "trim|required|valid_email|xss_clean");
        $this->form_validation->set_rules('password', "Password", "trim|required|min_length[8]|xss_clean");

        if($this->form_validation->run() === false)
        {
            $result = validation_errors();
        }
        else
        {
            $cur_user = $this->db->query("SELECT id, first_name, last_name, user_name, password FROM users
                                          WHERE email='{$user_info['email']}';")->row_array();

            if(!empty($cur_user))
            {
                if ($cur_user['password'] != md5($user_info['password']))
                    $result = 'Incorrect password!';
                else
                {
                    $result = array('id' => $cur_user['id'], 
                                    'first_name' => $cur_user['first_name'], 
                                    'last_name' => $cur_user['last_name'], 
                                    'user_name' => $cur_user['user_name']);
                }                   
            }
            else
                $result = "Email entered incorrectly or user doesn't exist!";
        }

        return $result;
    }
}
//end of user model