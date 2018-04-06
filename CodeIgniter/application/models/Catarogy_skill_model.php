<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catarogy_skill_model extends CI_Model {

    public function gets()
    {
        $this->db->from('Catarogy_skill');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_by_id($catarogy_skill_id)
    {
        $this->db->where('Catarogy_skill_id', $catarogy_skill_id);
        $this->db->from('Catarogy_skill');
        $query = $this->db->get();
        return $query->result_array();
    }
}