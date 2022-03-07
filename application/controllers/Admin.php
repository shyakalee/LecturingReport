<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
		
		parent::__construct();
		$this->load->model('Admin_model','us');
		$Admin_Access = $this->session->userdata('Admin_Access');
		if(!isset($Admin_Access))
			redirect('Login');
	}
	public function index(){
		$data['admin_no'] = $this->us->count_admin();
		$data['lecture_no'] = $this->us->count_lecture();
		$data['student_no'] = $this->us->count_student();
		$data['depart_no'] = $this->us->count_depart();
		$this->load->view('admin/admin_dashboard',$data);
	}
	public function settings()
	{
		$Admin_id = $this->session->userdata('User_Id');
		$data['person'] = $this->us->get_user_loged($Admin_id);
		$this->load->view('admin/admin_settings',$data);
	}
	public function edit(){
		$Admn_id = $this->session->userdata('User_Id');
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$user_data = array('f_name'=>$fname,'l_name'=>$lname,'email'=>$email,'phone'=>$phone,'password'=>$password);
		if($this->us->update_loged($user_data,$Admn_id)){
			$this->session->set_flashdata('sms_good','Profile Update done well !');
		}else{
			$this->session->set_flashdata('sms_bad','Update failed !');
		}
		$userId = $this->session->userdata('User_Id');
		$person = $this->us->get_user_loged($userId);
		$new_data = array('User_Fname' => $person->f_name, 'User_Lname' => $person->l_name);
		$this->session->set_userdata($new_data);
		//$this->session->set_userdata('User_Lname') = $person->l_name;
		redirect('Admin/settings');
	}
}