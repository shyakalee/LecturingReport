<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function admin_check($email, $pwd)
	{
		//'email'=>$email,'password'=>$pwd
		$condition = "email =" . "'" . $email . "' AND " . "password =" . "'" . $pwd . "' AND " . "active =" ."1";
		$query = $this->db->where($condition)
						->get('admin');
		if($query->num_rows() > 0){
			return $query->row();
		}
	}
	public function student_check($email, $pwd)
	{
		//'email'=>$email,'password'=>$pwd
		$condition = "email =" . "'" . $email . "' AND " . "password =" . "'" . $pwd . "' AND " . "active =" ."1";
		$query = $this->db->where($condition)
						->get('student');
		if($query->num_rows() > 0){
			return $query->row();
		}
	}
	public function leader_check($email, $pwd)
	{
		//'email'=>$email,'password'=>$pwd
		$condition = "email =" . "'" . $email . "' AND " . "password =" . "'" . $pwd . "' AND " . "active =" ."1";
		$query = $this->db->where($condition)
						->get('leader');
		if($query->num_rows() > 0){
			return $query->row();
		}
	}
	public function lecture_check($email, $pwd)
	{
		//'email'=>$email,'password'=>$pwd
		$condition = "email =" . "'" . $email . "' AND " . "password =" . "'" . $pwd . "' AND " . "active =" ."1";
		$query = $this->db->where($condition)
						->get('lecture');
		if($query->num_rows() > 0){
			return $query->row();
		}
	}
	public function get_user_loged($id){
		$user_query = $this->db->where('id',$id)->get('admin');
		if($user_query->num_rows()>0){
			return $user_query->row();
		}else{return false;}
	}
	public function get_theDepart($id){
		$user_query = $this->db->where('id',$id)->get('depart');
		if($user_query->num_rows()>0){
			return $user_query->row();
		}else{return false;}
	}
	public function update_loged($data, $id){
		if($id == ''){
			return false;
		}else{
			$this->db->where('id',$id)->update('admin',$data);
			return true;
		}
		return false;
	}
	public function count_admin(){
		$query_admin = $this->db->query('select * from admin where active=1 AND id<>1');
		return $query_admin->num_rows();
	}
	public function count_leader(){
		$query_leader = $this->db->query('select * from leader where active=1');
		return $query_leader->num_rows();
	}
	public function count_lecture(){
		$query_lecture = $this->db->query('select * from lecture where active=1');
		return $query_lecture->num_rows();
	}
	public function count_student(){
		$query_student = $this->db->query('select * from student where active=1');
		return $query_student->num_rows();
	}
	public function count_depart(){
		$query_depart = $this->db->query('select * from depart where active=1');
		return $query_depart->num_rows();
	}
}
