<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Depart extends CI_Model {

	public function save($data, $id){
		if($id == ''){
			$this->db->insert('depart',$data);
			return true;
		}else{
			$this->db->where('id',$id)
					->update('depart',$data);
			return true;
		}
		return false;
	}
	public function get_all_depart(){
		return $this->db->from('depart')
						->where('active',1)
						->order_by('id','desc')
						->get()
						->result();
	}
	public function get_depart_by_id($id){
		$get_query = $this->db->where('id',$id)->get('depart');
		if($get_query->num_rows() > 0){
			return $get_query->row();
		}else{ return false;}
	}
	public function delete_depart($id){
		$data = array('active'=>0);
		$dlt = $this->db->where('id',$id)->update('depart',$data);
		if($dlt){
			return true;
		}

		return false;
	}
}
