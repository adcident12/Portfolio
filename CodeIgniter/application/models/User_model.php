<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

        public function get_student_data_from_profile($student_id)
        {
            $ch = curl_init();
            $timeout = 5;
            curl_setopt($ch, CURLOPT_URL, 'http://10.80.34.5:9991/public/api/v1/student/'.$student_id);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
            $result = curl_exec($ch);
            curl_close($ch);
    
            $api = json_decode($result, true);
    
            if($api['status'] == "true") {
                return $api['result'];
            } 
            
            return false;
        }
}
