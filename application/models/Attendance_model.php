<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance_model extends CI_Model {

	public function save($data, $id){
		if($id == ''){
			$this->db->insert('attendance',$data);
			return true;
		}else{
			$this->db->where('id',$id)
					->update('attendance',$data);
			return true;
		}
		return false;
	}
	
public function attendance_report_time() {
	return $this->db->select('attendance.id,attendance.in_time as attend_time, count(*) as total')
						->from('attendance')
						//->where('lecture.active',1)
						//->join('depart','lecture.depart = depart.id')
						->order_by('attendance.in_time','desc')
						->group_by('in_time')
						->get()
						->result();
}

public function check_attendance_date($date,$reg_number) {
	return $this->db->select('attendance.id,attendance.in_time as attend_time, attendance.reg_number as reg_num')
						->from('attendance')
						->where(['attendance.in_time'=>$date, 'attendance.reg_number'=>$reg_number])
						//->join('depart','lecture.depart = depart.id')
						//->order_by('attendance.in_time','desc')
						//->group_by('in_time')
						->get()
						->result();
}

public function get_courses() {
	$led_id = $this->session->userdata('User_Id');
	return $this->db->select('course.id,course.name as c_name')
						->from('course')
						->where(['course.active'=>1,'course.lecture'=>$led_id])
						->get()
						->result();
}

public function get_attendes() {
	$led_id = $this->session->userdata('User_Id');
	//$in_time = $this->session->userdata('in_time');
	return $this->db->select('attendance.id,attendance.reg_number,student.f_name, student.l_name, attendance.lecture_id, attendance.depart, attendance.in_time, attendance.status as status')
						->from('attendance')
						//->where('attendance.in_time','2022-03-08')
						->join('student','student.reg_number = attendance.reg_number')
						//->order_by('attendance.in_time','desc')
						//->group_by('in_time')
						->get()
						->result();
}
public function get_attendes_bydate($in_time) {
	$led_id = $this->session->userdata('User_Id');
	//$in_time = $this->session->userdata('in_time');
	$date=$in_time;
	return $this->db->select('attendance.id,attendance.reg_number,student.f_name, student.l_name, attendance.lecture_id, attendance.depart, attendance.in_time, attendance.status as status')
						->from('attendance')
						->where('attendance.in_time',$date)
						->join('student','student.reg_number = attendance.reg_number')
						//->order_by('attendance.in_time','desc')
						//->group_by('in_time')
						->get()
						->result();
}

}