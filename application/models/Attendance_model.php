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

public function check_attendance_date() {
	return $this->db->select('attendance.id,attendance.in_time as attend_time')
						->from('attendance')
						//->where('lecture.active',1)
						//->join('depart','lecture.depart = depart.id')
						//->order_by('attendance.in_time','desc')
						//->group_by('in_time')
						->get()
						->result();
}

}