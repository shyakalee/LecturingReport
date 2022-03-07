<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model {

	public function save($data, $id)
	{
		if($id == ''){
			$this->db->insert('admin',$data);
			return true;
		}else{
			$this->db->where('id',$id)
						->update('admin',$data);
			return true;
		}
		return false;
	}
	public function get_all_users(){
		return $this->db->from('admin')
						->where('active',1)
						->where('id !=',1)
						->order_by('id','desc')
						->get()
						->result();
	}
	/*public function get_user_by_id($id){
		$this->db->from('admin')
						->where('id',$id)
						->get()
						->row();
	}*/
	public function get_user_by_id($id){
		$get_query = $this->db->where('id',$id)->get('admin');
		if($get_query->num_rows() > 0){
			return $get_query->row();
		}else{return false;}
	}
	public function delete_user($id){
		$data = array('active'=>0);
		$db = $this->db->where('id',$id)
				->update('admin',$data);
		if($db){
			return true;
		}

		return false;
	}
}
