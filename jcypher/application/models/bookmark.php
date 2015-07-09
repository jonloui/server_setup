<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bookmark extends CI_Model {
    function get_all_sections($id)
    {
        return $this->db->query("SELECT * FROM bookmark_sections JOIN bookmark_section_owner ON bookmark_sections.id = bookmark_section_owner.section_id WHERE bookmark_section_owner.user_id={$id}") -> result_array();
    }

    function get_all_links()
    {
        return $this->db->query("SELECT * FROM bookmark_links") -> result_array();
    }

    function get_all_link_locations()
    {
        return $this->db->query("SELECT * FROM bookmark_link_locations") -> result_array();
    }

    function add_section($name)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("section_name", "Section Name", "trim|required|max_length[50]|xss_clean");

        if($this->form_validation->run() === false)
            return validation_errors();
        else
        {
            $query = "INSERT INTO bookmark_sections (name, created_at) VALUES (?,?)";
            $values = array($name, date("Y-m-d, H:i:s"));
            $result = $this->db->query($query, $values);
            
            if($result)
                return $this->db->insert_id();
            else
                return "<p>Section was not added to the database!</p>";
        }
    }

    function add_link($data)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("link", "Link", "trim|required|xss_clean");
        $this->form_validation->set_rules("link_name", "Link Name", "trim|required|max_length[50]|xss_clean");

        if($this->form_validation->run() === false)
            return validation_errors();
        else
        {
            $query = "INSERT INTO bookmark_links (name, link, created_at) VALUES (?,?,?)";
            $values = array($data['name'], $data['link'], date("Y-m-d, H:i:s"));
            $result = $this->db->query($query, $values);
            
            if($result)
            {
                // add data for which section link is located
                $result = $this->db->insert_id();
                $query = "INSERT INTO bookmark_link_locations (bookmark_link_id, bookmark_section_id, created_at) VALUES (?,?,?)";
                $values = array($result, $data['id'], date("Y-m-d, H:i:s"));
                $this->db->query($query, $values);
                return $result;
            }
            else
                return "<p>Link was not added to the database!</p>";
        }
    }

    // function get_cypher($id)
    // {
    //     return $this->db->query("SELECT * FROM cyphers WHERE id = ?", array($id)) -> row_array();
    // }
}

//end of bookmark model