<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_lecture extends CI_Controller {
	public function __construct() {
		
		parent::__construct();
		$this->load->model('Lecture','us');
		$Admin_Access = $this->session->userdata('Admin_Access');
		if(!isset($Admin_Access))
			redirect('Login');
	}
	public function index(){
		$data['all_lecture'] = $this->us->get_all_lecture();
		$data['all_depart'] = $this->us->get_all_depart();
		$this->load->view('admin/admin_add_lecture',$data);
	}
	public function add($id=''){
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$depart = $this->input->post('depart');
		$degree = $this->input->post('degree');
		$gender = $this->input->post('gender');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$le_data = array('degree'=>$degree,'f_name'=>$fname,'l_name'=>$lname,'email'=>$email,'phone'=>$phone,'password'=>$phone,'gender'=>$gender,'depart'=>$depart,'active'=>1);
		if($this->us->save($le_data,$id)){
			$this->session->set_flashdata('sms_good','data saved well !');
		}else{
			$this->session->set_flashdata('sms_bad','the save failed !');
		}

		redirect('Add_lecture');
	}
	public function edit($id){
		$data['all_lecture'] = $this->us->get_all_lecture();
		$data['all_depart'] = $this->us->get_all_depart();
		$data['one_lecture'] = $this->us->get_one_lecture($id);
		$this->load->view('admin/admin_add_lecture',$data);
	}
	public function delete($id){
		$data['all_lecture'] = $this->us->get_all_lecture();
		if($this->us->delete_lecture($id)){
			$this->session->set_flashdata('sms_good','data deleted');
		}else{
			$this->session->set_flashdata('sms_bad','delete failed');
		}

		redirect('Add_lecture');
	}
}