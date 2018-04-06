<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Work_required_model extends CI_Model {

    public function gets_Salary()
    {
        $this->db->from('Salary');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function gets_Work()
    {
        $this->db->from('Work');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function gets_Working_area()
    {
        $this->db->from('Working_area');
        $query = $this->db->get();
        return $query->result_array();
    }
    
}