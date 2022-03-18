<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lecturing extends CI_Model {

	public function save($id, $data){
		if($id == ''){
			$this->db->insert('lecturing',$data);
			return true;
		}else{
			$this->db->where('id',$id)->update('lecturing',$data);
			return true;
		}
		return false;
	}
// ============ returning all notifications per students ================
	public function get_all_notifications(){
		$std_depart = $this->session->userdata('TheDepart');
		$std_level = $this->session->userdata('TheLevel');
		return $this->db->select('announce.id as anou_id,announce.title,announce.content,announce.level,announce.date_time,leader.f_name,leader.l_name')
						->from('announce')
						->where(['announce.active'=>1,'announce.depart_id'=>$std_depart])
						->join('leader','announce.leader_id=leader.id')
						->get()
						->result();
	}
// ===================================================================
	public function get_all_lecturing(){
		return $this->db->select('lecturing.id as l_id,lecturing.date_time,lecturing.duration,lecturing.content,lecture.f_name as le_fname,lecture.l_name as le_lname,lecture.degree,lecture.email as le_email,course.id,course.name')
						->from('lecturing')
						->where('lecturing.active !=',0)
						->join('course','lecturing.course_id = course.id')
						->join('lecture','course.lecture = lecture.id')
						->order_by('lecturing.id','desc')
						->get()
						->result();
	}
	public function get_one_lecturing($id){
		//$get_query = $this->db->where('id',$id)->get('lecturing');
		$get_query = $this->db->select('lecturing.id as l_id,lecturing.date_time,lecturing.duration,lecturing.content,lecturing.active as le_active,lecture.f_name as le_fname,lecture.l_name as le_lname,lecture.degree,lecture.email,course.id,course.name')
						->from('lecturing')
						->where(['lecturing.id'=>$id])
						->join('course','lecturing.course_id = course.id')
						->join('lecture','course.lecture = lecture.id')
						->order_by('lecturing.id','desc')
						->get();
		if($get_query->num_rows()>0){
			return $get_query->row();
		}else{return false;}
	}
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
	public function send_lecturing($id){
		$dlt_data = array('active'=>4);
		$dlt = $this->db->where('id',$id)->update('lecturing',$dlt_data);
		if($dlt){
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
	}
	public function count_lecturing($std_id){
		$query_lecturing = $this->db->query('select * from lecturing where student_id='.$std_id.' AND active=1');
		return $query_lecturing->num_rows();
	}
	public function count_course($depart_id,$level){
		$query_course = $this->db->query('select * from course where depart='.$depart_id.' AND level='.$level.' AND active=1');
		return $query_course->num_rows();
	}
	public function count_announce($depart_id,$level){
		$query_anou = $this->db->query('select * from announce where depart_id='.$depart_id.' AND active=1 AND (level='.$level.' OR level=5)');
		return $query_anou->num_rows();
	}
}