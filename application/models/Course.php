<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Model {

	public function save($data, $id){
		if($id == ''){
			$this->db->insert('course',$data);
			return true;
		}else{
			$this->db->where('id',$id)
					->update('course',$data);
			return true;
		}
		return false;
	}
	public function get_all_course(){
		return $this->db->select('course.id as c_id,course.name as c_name,course.credit,course.level,lecture.f_name,lecture.l_name,depart.name as d_name')
						->from('course')
						->where('course.active',1)
						->join('depart','course.depart = depart.id')
						->join('lecture','course.lecture = lecture.id')
						->order_by('course.id','desc')
						->get()
						->result();
	}
	public function get_one_course($id){
		$get_query = $this->db->where('id',$id)->get('course');
		if($get_query->num_rows()>0){
			return $get_query->row();
		}else{return false;}
	}
	public function get_all_lecture(){
		return $this->db->from('lecture')
						->where('active',1)
						->get()
						->result();
	}
	public function get_all_depart(){
		return $this->db->from('depart')
						->where('active',1)
						->get()
						->result();
	}
	public function delete_course($id){
		$dlt_data = array('active'=>0);
		$dlt = $this->db->where('id',$id)->update('course',$dlt_data);
		if($dlt){
			return true;
		}

		return false;
	}
}