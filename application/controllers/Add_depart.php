<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_depart extends CI_Controller {
	public function __construct() {
		
		parent::__construct();
		$this->load->model('Depart','us');
		$Admin_Access = $this->session->userdata('Admin_Access');
		if(!isset($Admin_Access))
			redirect('Login');
	}
	public function index(){
		//$this->load->model('Depart','us');
		$data['all_depart'] = $this->us->get_all_depart();
		$this->load->view('admin/admin_add_depart',$data);
	}
	public function add($id=''){
		$name = $this->input->post('name');
		$level = $this->input->post('level');
		$depart_data = array('name'=>$name,'levels'=>$level,'active'=>1);
		if($this->us->save($depart_data,$id)){
			$this->session->set_flashdata('sms_good','Save done well !');
		}else{
			$this->session->set_flashdata('sms_bad','Save failed');
		}
		redirect('Add_depart');
	}
	public function edit($id){
		$data['all_depart'] = $this->us->get_all_depart();
		$data['one_depart'] = $this->us->get_depart_by_id($id);
		$this->load->view('admin/admin_add_depart',$data);
	}
	public function delete($id){
		$data['all_depart'] = $this->us->get_all_depart();
		if($this->us->delete_depart($id)){
			$this->session->set_flashdata('sms_good','Data deleted well');
		}else{
			$this->session->set_flashdata('sms_bad','Delete failed');
		}
		redirect('Add_depart');
	}
}
