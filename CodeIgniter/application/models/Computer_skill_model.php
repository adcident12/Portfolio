<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Computer_skill_model extends CI_Model {

    public function gets()
    {
        $this->db->from('Computer_skill');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_by_id($computer_skill_id)
    {
        $this->db->where('Catarogy_skill_Catarogy_skill_id', $computer_skill_id);
        $this->db->from('Computer_skill');
        $query = $this->db->get();
        return $query->result_array();
    }
}