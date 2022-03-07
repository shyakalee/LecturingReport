<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_admin extends CI_Controller {
	public function __construct() {
		
		parent::__construct();
		$this->load->model('Users','us');
		$Admin_Access = $this->session->userdata('Admin_Access');
		$userId = $this->session->userdata('User_Id');
		if(!isset($Admin_Access))
			redirect('Login');
		if($userId != 1)
			redirect('Admin');
	}
	public function index()
	{
		//$this->load->model('Users','us');
		$data['all_users'] = $this->us->get_all_users();
		$this->load->view('admin/add_admin/header',$data);
		$this->load->view('admin/add_admin/add_form',$data);
		$this->load->view('admin/add_admin/footer',$data);
	}
	public function add($user_id=''){
		//$this->load->model('Users','us');
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');

		$user_data = array(
			'f_name'=>$fname,
			'l_name'=>$lname,
			'email'=>$email,
			'phone'=>$phone,
			'password'=>$phone,
			'active'=>1
		);

		if($this->us->save($user_data,$user_id)){
			$this->session->set_flashdata('sms',"User added well !");
		}else{
			$this->session->set_flashdata('sms_bad',"Save Failed");
		}
		redirect('Add_admin');
	}
	public function edit($id){
		//$this->load->model('Users','us');
		$data['all_users'] = $this->us->get_all_users();
		$data['one_user'] = $this->us->get_user_by_id($id);
		$this->load->view('admin/add_admin/header',$data);
		$this->load->view('admin/add_admin/add_form',$data);
		$this->load->view('admin/add_admin/footer',$data);
	}
	/*public function edit($id){
		//$this->load->model('Users','us');
		$data['all_users'] = $this->us->get_all_users();
		$data['user_info'] = $this->us->get_user_by_id($id);
		$this->load->view('admin/admin_add_admin',$data);
	}*/
	public function delete($id){
		//$this->load->model('Users','us');
		$data['all_users'] = $this->us->get_all_users();
		if($this->us->delete_user($id)){
			$this->session->set_flashdata('sms','user deleted successful');
		}else{
			$this->session->set_flashdata('sms','Delete Failed');
		}
		redirect('Add_admin');
	}
}
