<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_course extends CI_Controller {
	public function __construct() {
		
		parent::__construct();
		$this->load->model('Course','us');
		$Admin_Access = $this->session->userdata('Admin_Access');
		if(!isset($Admin_Access))
			redirect('Login');
	}
	public function index(){
		$data['all_course'] = $this->us->get_all_course();
		$data['all_lecture'] = $this->us->get_all_lecture();
		$data['all_depart'] = $this->us->get_all_depart();
		$this->load->view('admin/admin_add_course',$data);
	}
	public function add($id=''){
		$c_name = $this->input->post('c_name');
		$c_depart = $this->input->post('c_depart');
		$c_lecture = $this->input->post('c_lecture');
		$c_level = $this->input->post('c_level');
		$c_credit = $this->input->post('c_credit');
		$credit_data = array('name'=>$c_name,'credit'=>$c_credit,'lecture'=>$c_lecture,'depart'=>$c_depart,'level'=>$c_level,'active'=>1);
		if($this->us->save($credit_data,$id)){
			$this->session->set_flashdata('sms_good','data saved well !');
		}else{
			$this->session->set_flashdata('sms_bad','the save failed !');
		}

		redirect('Add_course');
	}
	public function edit($id){
		$data['all_course'] = $this->us->get_all_course();
		$data['all_lecture'] = $this->us->get_all_lecture();
		$data['all_depart'] = $this->us->get_all_depart();
		$data['one_course'] = $this->us->get_one_course($id);
		$this->load->view('admin/admin_add_course',$data);
	}
	public function delete($id){
		$data['all_course'] = $this->us->get_all_course();
		$data['all_lecture'] = $this->us->get_all_lecture();
		$data['all_depart'] = $this->us->get_all_depart();
		if($this->us->delete_course($id)){
			$this->session->set_flashdata('sms_good','data deleted');
		}else{
			$this->session->set_flashdata('sms_bad','data deleted');
		}

		redirect('Add_course');
	}
}
