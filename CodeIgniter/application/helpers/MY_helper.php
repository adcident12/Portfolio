<?php
function detect_gender_th($gender)
{
	if($gender == "นาย"){
		return "ชาย";
	}
	
	return "หญิง";
}

function detect_prefix_en($gender)
{
	if($gender == "นาง"){
		return "Mrs.";
	}
	if($gender == "นางสาว"){
		return "Ms.";
	}

	return "Mr.";

}

function get_age_from_birthday($birthday)
{
	$data = new Datetime($birthday);
	$now = new DateTime();
	$interval = $now->diff($data);
	return $interval->y;
}

function thaiDate($strDate = '2018-01-01 00:00:00', $full_date = false, $show_time = true)
{
    $strYear = date("Y",strtotime($strDate))+543;
    $strMonth= date("n",strtotime($strDate));
    $strDay= date("j",strtotime($strDate));
    $strHour= date("H",strtotime($strDate));
    $strMinute= date("i",strtotime($strDate));
    $strSeconds= date("s",strtotime($strDate));

    if(!$full_date) {
        
        $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ษ.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai=$strMonthCut[$strMonth];
		
		if($show_time) {
			return "$strDay $strMonthThai $strYear $strHour:$strMinute น.";
		} else {
			return "$strDay $strMonthThai $strYear ";
		}
    } else {
        $strDayCut['Sun'] = 'อาทิตย์';
        $strDayCut['Mon'] = 'จันทร์';
        $strDayCut['Tue'] = 'อังคาร';
        $strDayCut['Wed'] = 'พุธ';
        $strDayCut['Thu'] = 'พฤหัส';
        $strDayCut['Fri'] = 'ศุกร์';
        $strDayCut['Sat'] = 'เสาร์';

        $strMonthCut = array('', 'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฏาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤษจิกายน', 'ธันวาคม');
    
        $strMonthThai=$strMonthCut[$strMonth];
		$strDayThai=$strDayCut[date("D",strtotime($strDate))];
		
		if($show_time) {
			return "วัน $strDayThai ที่ $strDay $strMonthThai พ.ศ. $strYear เวลา $strHour:$strMinute น.";
		} else {
			return "วัน $strDayThai ที่ $strDay $strMonthThai พ.ศ. $strYear";			
		}
        
    }
}


function send_notify_message($access_token, $message_data)
		{
		$line_api = 'https://notify-api.line.me/api/notify';
			
		$headers = array('Method: POST', 'Content-type: multipart/form-data', 'Authorization: Bearer '.$access_token );

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $line_api);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $message_data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($ch);
		// Check Error
		if(curl_error($ch))
		{
		$return_array = array( 'status' => '000: send fail', 'message' => curl_error($ch)); 
		}
		else
		{
		$return_array = json_decode($result, true);
		}
		curl_close($ch);
		return $return_array;
		}