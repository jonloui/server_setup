<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cypher extends CI_Model {
    function get_all_cyphers()
    {
        return $this->db->query("SELECT cyphers.id, cyphers.cypher, cyphers.hint, cyphers_creators.user_id AS user_id, users.first_name, users.last_name, users.user_name FROM cyphers 
                                 JOIN cyphers_creators ON cyphers.id = cyphers_creators.cypher_id
                                 JOIN users ON cyphers_creators.user_id = users.id
                                 ORDER BY cyphers.id") -> result_array();
    }

    function get_cyphers_created_by_user($user_id)
    {
        return $this->db->query("SELECT cypher_id FROM cyphers_creators WHERE user_id={$user_id};") -> result_array();
    }

    function get_cyphers_by_id($id)
    {
        return $this->db->query("SELECT cyphers.id, cyphers.cypher, cyphers.hint FROM cyphers 
                                 JOIN cyphers_creators ON cyphers.id = cyphers_creators.cypher_id
                                 WHERE cyphers_creators.user_id={$id};") -> result_array();
    }

    function add_cypher($cypher)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("cypher", "Cypher", "trim|required|is_unique[cyphers.cypher]|min_length[10]|xss_clean");
        $this->form_validation->set_rules("hint", "Hint", "trim|max_length[5]|xss_clean");

        if($this->form_validation->run() === false)
            return validation_errors();
        else
        {
            $query = "INSERT INTO cyphers (cypher, hint, created_at) VALUES (?,?,?)";
            $values = array($cypher['cypher'], $cypher['hint'], date("Y-m-d, H:i:s"));
            $result = $this->db->query($query, $values);
            $cypher_id = $this->db->insert_id();

            $query = "INSERT INTO cyphers_creators (cypher_id, user_id, created_at) VALUES (?,?,?)";
            $values = array($cypher_id, $cypher['user_id'], date("Y-m-d, H:i:s"));
            $this->db->query($query, $values);
            
            if($result)
                return $cypher_id;
            else
                return "<p>Cypher was not added to the database!</p>";
        }
    }

    function get_cypher_owner($id)
    {
        return $this->db->query("SELECT users.id AS cypher_owner_id, users.first_name, users.last_name, users.user_name FROM cyphers_creators
                                 JOIN users ON cyphers_creators.user_id = users.id
                                 WHERE cypher_id={$id}")->row_array();
    }

    function get_cypher($id)
    {
        $last_cypher_id = $this->db->query("SELECT id FROM cyphers 
                                            ORDER BY id DESC
                                            LIMIT 1;") -> row_array();
        $last_cypher_id = (int)$last_cypher_id['id'];
        // if $id is greater than the last cypher id, set id to 2
        if($last_cypher_id < $id)
            $id = 2;

        $result = $this->db->query("SELECT * FROM cyphers WHERE id = ?", array($id)) -> row_array();

        // search for next available cypher if cyphers have been deleted.
        while(sizeof($result) == 0)
        {
            return $this->db->query("SELECT * FROM cyphers WHERE id = ?", array($id)) -> row_array();
        }
        return $result;
        // return $this->db->query("SELECT * FROM cyphers WHERE id = ?", array($id)) -> row_array();
    }

    function update_cypher($cypher_info)
    {
        $this->db->query("UPDATE cyphers SET cypher='{$cypher_info['cypher']}' WHERE id={$cypher_info['id']};");
    }
}

//end of cypher model