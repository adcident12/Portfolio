<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	public function index()
	{
		$student_id = "57660135";
		$this->load->model('User_model');
		$data['profile'] = $this->User_model->get_student_data_from_profile($student_id);
		$this->template->view('Home_view', $data);
	}

}
