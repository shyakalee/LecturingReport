<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller{
	public function __construct(){
		
		parent::__construct();
		$this->load->model('Attendance_model','us');

		$Admin_Access = $this->session->userdata('Admin_Access');
		if(!isset($Admin_Access))
			redirect('Login');
	}
	

	public function attendance(){
		$data['students'] = $this->us->get_all_student();
		$data['attended_date']=$this->us->check_attendance_date();
		$this->load->view('attendance/attendance',$data);
	}

	public function attendance_report(){
		$data['attendes'] = $this->us->attendance_report_time();
		$this->load->view('lecture/attendance_report',$data);
	}

	public function view_attendes(){
		//$data['attendes'] = $this->us->attendance_report_time();
		$this->load->view('lecture/view_attendes');
	}




	public function add_attendance($id=''){

		$reg_number = $this->input->post('reg_number');
		$lecture_id = $this->input->post('lecture_id');
		$depart = $this->input->post('depart');
		$in_time = $this->input->post('in_time');
		$status = $this->input->post('attendance_record');
		$att_data = array(
			'id'=>null, 
			'reg_number'=>$reg_number,
			'lecture_id'=>$lecture_id,
			'depart'=>$depart,
			'in_time'=>$in_time,
			'status'=>$status);

		if($this->us->save($att_data,$id)){
			$this->session->set_flashdata('sms_good','Attendance Saved sucess !');
		}else{
			$this->session->set_flashdata('sms_bad','the Attendance failed to record !');
		}
		redirect('lecture/attendance');
	}

	public function check_attendance($reg_number) {
		
	}




}