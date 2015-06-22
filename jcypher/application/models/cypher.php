<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cypher extends CI_Model {
    function get_all_cyphers()
    {
        return $this->db->query("SELECT * FROM cyphers") -> result_array();
    }

    function add_cypher($cypher)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("cypher", "Cypher", "trim|required|min_length[10]|xss_clean");
        $this->form_validation->set_rules("hint", "Hint", "trim|max_length[5]|xss_clean");

        if($this->form_validation->run() === false)
            return validation_errors();
        else
        {
            $query = "INSERT INTO cyphers (cypher, hint, created_at) VALUES (?,?,?)";
            $values = array(strtoupper($cypher['cypher']), $cypher['hint'], date("Y-m-d, H:i:s"));
            $result = $this->db->query($query, $values);
            
            if($result)
                return $this->db->insert_id();
            else
                return "<p>Cypher was not added to the database!</p>";
        }
    }

    function get_cypher($id)
    {
        return $this->db->query("SELECT * FROM cyphers WHERE id = ?", array($id)) -> row_array();
    }
}

//end of cypher model