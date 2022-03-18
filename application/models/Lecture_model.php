<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lecture_model extends CI_Model {

	public function save($data,$id){
		if($id != 0){
			$this->db->where('id',$id)->update('lecturing',$data);
			return true;
		}
		return false;
	}
	public function all_lecturing($lect_id,$depart_id){
		return $this->db->select('lecturing.id as l_id,lecturing.date_time,lecturing.duration,lecturing.content,lecture.id le_id,lecture.f_name as le_fname,lecture.l_name as le_lname,lecture.degree,lecture.email,course.name,course.level')
						->from('lecturing')
						->where(['lecturing.active !='=>0,'lecturing.depart_id'=>$depart_id,'lecture.id'=>$lect_id])
						->join('course','lecturing.course_id = course.id')
						->join('lecture','course.lecture = lecture.id')
						->order_by('lecturing.id','desc')
						->get()
						->result();
	}
	public function get_one_lecturing($id){
		$get_query = $this->db->select('lecturing.id as l_id,lecturing.date_time,lecturing.duration,lecturing.content,lecturing.active as le_active,student.f_name as le_fname,student.l_name as le_lname,student.email,course.id,course.name')
						->from('lecturing')
						->where(['lecturing.id'=>$id])
						->join('course','lecturing.course_id = course.id')
						->join('student','lecturing.student_id = student.id')
						->order_by('lecturing.id','desc')
						->get();
		if($get_query->num_rows()>0){
			return $get_query->row();
		}else{return false;}
	}
	public function get_all_course(){
		$led_id = $this->session->userdata('User_Id');
		$led_depart = $this->session->userdata('TheDepart');
		return $this->db->select('course.id as c_id,course.name,course.credit,course.level')
						->from('course')
						->where(['course.active'=>1,'course.lecture'=>$led_id, 'course.depart'=>$led_depart])
						->get()
						->result();
	}

	//fetch students as per department registered
	public function get_all_student(){
		$led_depart = $this->session->userdata('TheDepart');
		return $this->db->select('student.f_name,student.l_name,student.email,student.phone,student.level')
						->from('student')
						->where(['student.active'=>1,'student.depart'=>$led_depart])
						->get()
						->result();
	}
	public function get_user_loged($id){
		$user_query = $this->db->select('lecture.degree,lecture.f_name,lecture.l_name,lecture.email,lecture.phone,lecture.password,depart.name')
							->from('lecture')->where('lecture.id',$id)
							->join('depart','lecture.depart = depart.id')
							->get();
		if($user_query->num_rows()>0){
			return $user_query->row();
		}else{return false;}
	}
	public function update_loged($data, $id){
		if($id == ''){
			return false;
		}else{
			$this->db->where('id',$id)->update('lecture',$data);
			return true;
		}
		return false;
	}
	/*public function get_one_course($id){
		$course_query = $this->db->select('student.f_name,student.l_name,student.email,student.phone,course.id as c_id,course.name,course.credit,course.level')
						->from('course')
						->where('course.id',$id)
						->join('student','course.depart = student.depart')
						->join('student','course.level = student.level')
						->get();
		if($course_query->num_rows()>0){
			return $course_query->row();
		}else{ return false;}
	}*/

	public function get_one_course($id){
		$course_query = $this->db->select('course.id as c_id,course.name as c_name, course.depart as depart, course.credit as c_credit,course.level as c_level, course.start_date as start, course.end_date as end')
						->from('course')
						->where('course.id',$id)
						//->join('student','course.depart = student.depart')
						//->join('student','course.level = student.level')
						->get();
		if($course_query->num_rows()>0){
			return $course_query->row();
		}else{ return false;}
	}



	/*
	public function get_all_course(){
		$std_depart = $this->session->userdata('TheDepart');
		$std_level = $this->session->userdata('TheLevel');
		return $this->db->select('course.id as c_id,course.name,lecture.f_name,lecture.l_name,lecture.degree,lecture.email')
						->from('course')
						->where('course.active',1)->where('course.depart',$std_depart)->where('course.level',$std_level)
						->join('lecture','course.lecture = lecture.id')
						->get()
						->result();
	}
	public function get_one_course($id){
		$course_query = $this->db->select('lecture.f_name,lecture.l_name,lecture.degree,lecture.email,lecture.phone,course.id as c_id,course.name,course.credit')
						->from('course')
						->where('course.id',$id)
						->join('lecture','course.lecture = lecture.id')
						->get();
		if($course_query->num_rows()>0){
			return $course_query->row();
		}else{ return false;}
	}
	public function get_all_lecture(){
		return $this->db->from('lecture')
						->where('active',1)
						->get()
						->result();
	}
	public function get_all_announce(){
		$std_depart = $this->session->userdata('TheDepart');
		$std_level = $this->session->userdata('TheLevel');
		return $this->db->select('announce.id as anou_id,announce.title,announce.content,announce.level,announce.date_time,leader.f_name,leader.l_name')
						->from('announce')
						->where(['announce.active'=>1,'announce.depart_id'=>$std_depart])
						->join('leader','announce.leader_id=leader.id')
						->get()
						->result();
	}
	public function get_one_announce($id){
		$anou_query = $this->db->select('announce.id as anou_id,announce.title,announce.content,announce.date_time,leader.f_name,leader.l_name')
						->from('announce')
						->where('announce.id',$id)
						->join('leader','announce.leader_id=leader.id')
						->get();
		if($anou_query->num_rows()>0){
			return $anou_query->row();
		}else{ return false;}
	}
	public function get_user_loged($id){
		$user_query = $this->db->select('student.f_name,student.l_name,student.level,student.email,student.phone,student.password,depart.name')
							->from('student')->where('student.id',$id)
							->join('depart','student.depart = depart.id')
							->get();
		if($user_query->num_rows()>0){
			return $user_query->row();
		}else{return false;}
	}
	public function update_loged($data, $id){
		if($id == ''){
			return false;
		}else{
			$this->db->where('id',$id)->update('student',$data);
			return true;
		}
		return false;
	}
	public function delete_lecturing($id){
		$dlt_data = array('active'=>0);
		$dlt = $this->db->where('id',$id)->update('lecturing',$dlt_data);
		if($dlt){
			return true;
		}

		return false;
	}*/
	public function count_course($depart_id,$lect_id){
		$query_course = $this->db->query('select * from course where lecture='.$lect_id.' AND active=1');
		return $query_course->num_rows();
	}

	// additional functions defined ***********************

	// function pass values to attendance studemts
	public function all_students() {
		$led_depart = $this->session->userdata('TheDepart');
		return $this->db->select('student.reg_number,student.f_name,student.l_name,student.email,depart.name,depart.id as depart,student.phone,student.level')
						->from('student')
						->join('depart', 'student.depart = depart.id')						
						->where(['student.active'=>1, 'student.depart'=>$led_depart])
						->get()
						->result();
	}

	public function get_all_schedules(){
		$lecture_id = $this->session->userdata('User_Id');
		return $this->db->select('notifications.lecture_id,notifications.course_id,notifications.level_id,notifications.type,notifications.depart_id,notifications.schedule, course.name as course_name')
						->from('notifications')
						->where('notifications.lecture_id' ,$lecture_id)
						->join('course','course.id = notifications.course_id')
						//->join('lecture','course.lecture = lecture.id')
						->order_by('notifications.schedule','asc')
						->get()
						->result();
	}


}