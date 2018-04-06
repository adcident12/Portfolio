<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Strengths_model extends CI_Model {

    public function gets()
    {
        $this->db->from('Strengths');
        $query = $this->db->get();
        return $query->result_array();
    }
    
}