<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lecture extends CI_Model {

	public function save($data, $id){
		if($id == ''){
			$this->db->insert('lecture',$data);
			return true;
		}else{
			$this->db->where('id',$id)
					->update('lecture',$data);
			return true;
		}
		return false;
	}
	public function get_all_lecture(){
		return $this->db->select('lecture.id as l_id,lecture.degree,lecture.f_name,lecture.l_name,lecture.email,lecture.phone,lecture.gender,depart.id as d_id,depart.name')
						->from('lecture')
						->where('lecture.active',1)
						->join('depart','lecture.depart = depart.id')
						->order_by('lecture.id','desc')
						->get()
						->result();
	}
	public function get_one_lecture($id){
		$get_query = $this->db->where('id',$id)->get('lecture');
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
	public function delete_lecture($id){
		$dlt_data = array('active'=>0);
		$dlt = $this->db->where('id',$id)->update('lecture',$dlt_data);
		if($dlt){
			return true;
		}

		return false;
	}
}