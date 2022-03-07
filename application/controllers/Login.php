<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		
		parent::__construct();
		$this->load->model('Admin_model','us');
		//$Admin_Access = $this->session->userdata('Admin_Access');
	}
	public function index()
	{
		if(isset($_SESSION['Admin_Access'])){
			redirect('Admin');
		}else{
			$this->load->view('login');
		}
	}
	public function login_check()
	{
		$user_type = $this->input->post('user_type');
		$email = $this->input->post('email');
		$pwd = $this->input->post('pwd');

		if(!isset($user_type)){
			$this->session->set_flashdata('msg',"Please! Specify if you are an Admin , student or Leader");
			return redirect('Login');
		}else{
			if($user_type == 1){
				$get_user = $this->us->admin_check($email,$pwd);
				if($get_user){
					$session_data = array(
						'Admin_Access' => true,
						'User_Id' => $get_user->id,
						'User_Fname' => $get_user->f_name,
						'User_Lname' => $get_user->l_name,
						'TheUser_Type' => 1,
					);
					$this->session->set_userdata($session_data);
					return redirect('Admin');
				}else{
					$this->session->set_flashdata('msg',"Sorry! Incorrect Email or Password");
					return redirect('Login');
				}
			}
			else if($user_type == 4){
				$get_user = $this->us->lecture_check($email,$pwd);
				if($get_user){
					$get_depart = $this->us->get_theDepart($get_user->depart);
					$session_data = array(
						'Admin_Access' => true,
						'User_Id' => $get_user->id,
						'User_degree' => $get_user->degree,
						'User_Fname' => $get_user->f_name,
						'User_Lname' => $get_user->l_name,
						'TheDepart' => $get_user->depart,
						'TheDepart_name' => $get_depart->name,
						'TheUser_Type' => 4,
					);
					$this->session->set_userdata($session_data);
					return redirect('Lecture');
				}else{
					$this->session->set_flashdata('msg',"Sorry! Incorrect Email or Password");
					return redirect('Login');
				}
			}
			else{
				$get_user = $this->us->student_check($email,$pwd);
				if($get_user){
					$get_depart = $this->us->get_theDepart($get_user->depart);
					$session_data = array(
						'Admin_Access' => true,
						'User_Id' => $get_user->id,
						'User_Fname' => $get_user->f_name,
						'User_Lname' => $get_user->l_name,
						'TheDepart' => $get_user->depart,
						'TheDepart_name' => $get_depart->name,
						'TheLevel' => $get_user->level,
						'TheUser_Type' => 3,
					);
					$this->session->set_userdata($session_data);
					return redirect('Student');
				}else{
					$this->session->set_flashdata('msg',"Sorry! Incorrect Email or Password");
					return redirect('Login');
				}
			}
		}
	}
	public function logout(){
		$session_data = array(
			'User_Id' => '',
			'User_degree' => '',
			'User_Fname' => '',
			'User_Lname' => '',
			'TheDepart' => '',
			'TheDepart_name' => '',
			'TheLevel' => '',
			'TheUser_Type' => '',);
		$this->session->unset_userdata('Admin_Access',$session_data);
		$this->session->sess_destroy();
		//session_destroy();
		return redirect('Login');
	}
}