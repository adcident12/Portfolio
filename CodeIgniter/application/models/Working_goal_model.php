<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Working_goal_model extends CI_Model {

    public function gets()
    {
        $this->db->from('Working_goal');
        $query = $this->db->get();
        return $query->result_array();
    }
    
}