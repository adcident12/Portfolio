<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	public function index($status = '')
	{
		if($status == '') {
            $status = $this->input->get('status');
        }

        if($status == 'send_succsess'){
            $data['status']['color'] = 'success';            
            $data['status']['text'] = 'เพิ่มสำเร็จ';
        }
        else {
            $data['status'] = '';
        }

		$student_id = "57660135";
		$this->load->model('User_model');
		$data['profile'] = $this->User_model->get_student_data_from_profile($student_id);
		$this->load->model('Working_goal_model');
		$data['working_goal'] = $this->Working_goal_model->gets();
		$this->load->model('Strengths_model');
		$data['strengths'] = $this->Strengths_model->gets();
		$this->load->model('Work_required_model');
		$data['salary'] = $this->Work_required_model->gets_Salary();
		$data['work'] = $this->Work_required_model->gets_Work();
		$data['working_area'] = $this->Work_required_model->gets_Working_area();
		$this->load->model('Computer_skill_model');
		$this->load->model('Catarogy_skill_model');
		$data['data'] = array();
		foreach ($this->Catarogy_skill_model->gets() as $row)
		{
			$tmp_array = array();
			$tmp_array['catarogy_skills'] = $row;
			$tmp_array['computer_skill'] = $this->Computer_skill_model->get_by_id($row['Catarogy_skill_id']);
			array_push($data['data'],$tmp_array);
		}
		 	// print_r($data);
			$this->template->view('Home_view', $data);
	}

	public function notifi()
	{

		$access_token = 'ZWCX92jx3REExfk4mkyaqTQ5OdqL4WOMmplwLMAiEMU';

		$name = $this->input->post('name');    //ข้อความที่ต้องการส่ง สูงสุด 1000 ตัวอักษร
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$message = $this->input->post('message');
		$date = date('Y-m-d H:i:s');

		$str = "ปี-เดือน-วัน: ".$date." ชื่อผู้ส่ง: ".$name." เบอร์โทรศัพท์: ".$phone." ข้อความ: ".$message;
		
		$message_data = array(
		'message' => $str,
		);

		$result = send_notify_message($access_token, $message_data);
		 print_r($result);

		redirect('/Portfolio/index/status?=send_succsess', 'refresh');

		

	}


}
