<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course_search extends CI_Model {

	public function get_all_course($query){
		$this->db->select('*');
		$this->db->from('course');
		//$this->db->where('active',1);
		if($query != ''){
			$this->db->like('name',$query);
		}
		$this->db->order_by('id','DESC');
		return $this->db->get();
	}
}