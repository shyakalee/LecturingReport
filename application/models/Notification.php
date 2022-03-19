<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends CI_Model {

	public function save($data, $id){
		if($id == ''){
			$this->db->insert('notifications',$data);
			return true;
		}else{
			$this->db->where('id',$id)
					->update('notifications',$data);
			return true;
		}
		return false;
	}


}