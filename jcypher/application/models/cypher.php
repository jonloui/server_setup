<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cypher extends CI_Model {
    function get_all_cyphers()
    {
        return $this->db->query("SELECT * FROM cyphers") -> result_array();
    }

    function add_cypher($cypher)
    {
        $query = "INSERT INTO cyphers (cypher, hint, created_at) VALUES (?,?,?)";
        $values = array(strtoupper($cypher['cypher']), $cypher['tip'], date("Y-m-d, H:i:s"));
        return $this->db->query($query, $values);
    }

    function get_cypher($id)
    {
        return $this->db->query("SELECT * FROM cyphers WHERE id = ?", array($id)) -> row_array();
    }
}

//end of cypher model