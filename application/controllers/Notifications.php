<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifications extends CI_Controller{
	public function __construct(){
		
		parent::__construct();
		$this->load->model('Notification','us');
		$this->load->model('Lecture_model','us');

		$Admin_Access = $this->session->userdata('Admin_Access');
		if(!isset($Admin_Access))
			redirect('Login');
	}


	public function add_schedule($id='') {
		
		$lecture_id = $this->session->userdata('User_Id');
		$course_id =  $this->input->post('course_id');
		$level = $this->input->post('level');
		$type= $this->input->post('schedule_type');
		$depart= $this->session->userdata('TheDepart');
		$schedule= $this->input->post('schedule_date');
		$comment= $this->input->post('comments');

		$array_data = array(
		'lecture_id'	=>	$lecture_id,
		'course_id'		=>	$course_id,
		'level_id'		=>	$level,
		'type'			=>	$type,
		'depart_id'		=>	$depart,
		'schedule'		=>	$schedule,
		'comment'		=>	$comment
		);

		if($this->us->save($array_data,$id)){
			$this->session->set_flashdata('sms_good','Schedule [1] Added Schedule!');
		}else{
			$this->session->set_flashdata('sms_bad','Save failed');
		}
		redirect('lecture/attendance');
	}

	public function show_schedules(){

		$data['all_schedules'] = $this->us->get_all_schedules();
		$this->load->view('lecture/course_list',$data);
	}

}