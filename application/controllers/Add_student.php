<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_student extends CI_Controller {
	public function __construct() {
		
		parent::__construct();
		$this->load->model('Student','us');
		$Admin_Access = $this->session->userdata('Admin_Access');
		if(!isset($Admin_Access))
			redirect('Login');
	}
	public function index(){
		$data['all_student'] = $this->us->get_all_student();
		$data['all_depart'] = $this->us->get_all_depart();
		$this->load->view('admin/admin_add_student',$data);
	}
	public function add($id='') {

		$key1 = strtoupper(substr(sha1(microtime()), rand(0, 5), 4));
			
			 // Updated line to include '0'
			$key2 = "IPRC"."/".date('y');
			// $academic = date('y') ;
			
			//$reg_number = $key;
		
		$reg_number = $key2.implode("/", str_split($key1, 5));
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$depart = $this->input->post('depart');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$level = $this->input->post('level');
		$std_data = array('id'=>'null','reg_number'=>$reg_number,'f_name'=>$fname,'l_name'=>$lname,'email'=>$email,'phone'=>$phone,'depart'=>$depart,'level'=>$level,'password'=>$phone,'active'=>1);
		if($this->us->save($std_data,$id)){
			$this->session->set_flashdata('sms_good','data saved well !');
		}else{
			$this->session->set_flashdata('sms_bad','the save failed !');
		}

		redirect('Add_student');
	}
	public function edit($id){
		$data['all_student'] = $this->us->get_all_student();
		$data['all_depart'] = $this->us->get_all_depart();
		$data['one_student'] = $this->us->get_one_student($id);
		$this->load->view('admin/admin_add_student',$data);
	}
	public function delete($id){
		$data['all_student'] = $this->us->get_all_student();
		$data['all_depart'] = $this->us->get_all_depart();
		if($this->us->delete_student($id)){
			$this->session->set_flashdata('sms_good','data deleted');
		}else{
			$this->session->set_flashdata('sms_bad','data deleted');
		}

		redirect('Add_student');
	}
}
