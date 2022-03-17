<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Model {

	public function save($data, $id){
		if($id == ''){
			$this->db->insert('student',$data);
			return true;
		}else{
			$this->db->where('id',$id)
					->update('student',$data);
			return true;
		}
		return false;
	}
	public function get_all_student(){
		return $this->db->select('student.id as s_id,student.reg_number, student.f_name,student.l_name,student.email,student.phone,student.level,depart.name')
						->from('student')
						->where('student.active',1)
						->join('depart','student.depart = depart.id')
						//->order_by('student.id','desc')
						->get()
						->result();
	}
	public function get_one_student($id){
		$get_query = $this->db->where('id',$id)->get('student');
		if($get_query->num_rows()>0){
			return $get_query->row();
		}else{return false;}
	}
	public function get_all_depart(){
		return $this->db->from('depart')
						->where('active',1)
						->get()
						->result();
	}
	public function delete_student($id){
		$dlt_data = array('active'=>0);
		$dlt = $this->db->where('id',$id)->update('student',$dlt_data);
		if($dlt){
			return true;
		}

		return false;
	}
}