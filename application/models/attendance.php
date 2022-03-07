<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lecture extends CI_Model {

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

	
}