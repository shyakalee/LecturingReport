<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lecture extends CI_Controller{
	public function __construct(){
		
		parent::__construct();
		$this->load->model('Lecture_model','us');		
		
		$Admin_Access = $this->session->userdata('Admin_Access');
		if(!isset($Admin_Access))
			redirect('Login');
	}
	public function index(){
		$login_id = $this->session->userdata('User_Id');
		$lect_depart = $this->session->userdata('TheDepart');
		$to_count_le = $this->us->all_lecturing($login_id,$lect_depart);
		$key=0;
		foreach ($to_count_le as $value) {
			$key++;
		}
		$data['lecturing_no'] = $key;
		$data['course_no'] = $this->us->count_course($lect_depart,$login_id);
		$data['all_lecturing'] = $this->us->all_lecturing($login_id,$lect_depart);
		$this->load->view('lecture/home',$data);
	}
	public function lecturing_list(){
		$login_id = $this->session->userdata('User_Id');
		$lect_depart = $this->session->userdata('TheDepart');
		$data['all_lecturing'] = $this->us->all_lecturing($login_id,$lect_depart);
		$this->load->view('lecture/lecturing_list',$data);
	}
	public function lecturing_details($id){
		$login_id = $this->session->userdata('User_Id');
		$lect_depart = $this->session->userdata('TheDepart');
		$data['all_lecturing'] = $this->us->all_lecturing($login_id,$lect_depart);
		$data['one_le'] = $this->us->get_one_lecturing($id);
		$data['read_more'] = 'more_on_lecturing.php';
		$this->load->view('lecture/lecturing_list',$data);
	}
	public function lecturing_answer($id){
		$comment = $this->input->post('comment');
		$cmnt_type = $this->input->post('cmnt_type');
		if($cmnt_type == 2){$show_sms = 'Accepted';}else{$show_sms = 'Refused';}
		$lect_data = array('comment'=>$comment,'active'=>$cmnt_type);
		if($this->us->save($lect_data,$id)){
			$this->session->set_flashdata('sms_good','Well done! The lecturing has been '.$show_sms.' .');
		}else{
			$this->session->set_flashdata('sms_bad','answer lecturing failed !');
		}
		redirect('Lecture/lecturing_list');
	}
	public function course_list(){
		// $login_id = $this->session->userdata('User_Id');
		// $lect_depart = $this->session->userdata('TheDepart');
		// $data['all_lecturing'] = $this->us->all_lecturing($login_id,$lect_depart);
		$data['all_schedules']=$this->us->get_all_schedules();
		$data['all_course'] = $this->us->get_all_course();
		$this->load->view('lecture/course_list',$data);
	}

	

	public function student_list(){
		$data['all_student'] = $this->us->get_all_student();
		$this->load->view('lecture/student_list',$data);
	}
	public function settings(){
		$login_id = $this->session->userdata('User_Id');
		$data['std_me'] = $this->us->get_user_loged($login_id);
		$this->load->view('lecture/settings',$data);
	}
	public function edit_me(){
		$std_id = $this->session->userdata('User_Id');
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$degree = $this->input->post('degree');
		$password = $this->input->post('password');
		$user_data = array('degree'=>$degree,'f_name'=>$fname,'l_name'=>$lname,'email'=>$email,'phone'=>$phone,'password'=>$password);
		if($this->us->update_loged($user_data,$std_id)){
			$this->session->set_flashdata('sms_good','Update done well !');
		}else{
			$this->session->set_flashdata('sms_bad','Update failed !');
		}
		$userId = $this->session->userdata('User_Id');
		$person = $this->us->get_user_loged($userId);
		$new_data = array('User_degree' => $person->degree,'User_Fname' => $person->f_name, 'User_Lname' => $person->l_name);
		$this->session->set_userdata($new_data);
		redirect('Lecture/settings');
	}

	public function add_attendance(){
		$data['students'] = $this->us->all_students();
		$this->load->view('Lecture/add_attendance',$data);
	}

	public function attendance(){
		$data['students'] = $this->us->all_students();
		$this->load->view('Lecture/attendance',$data);
	}

	// set exam and cat schedules
	public function course_details($id){
		
		$data['one_cour'] = $this->us->get_one_course($id);
		$data['read_more'] = 'more_on_course.php';
		$this->load->view('lecture/course_details',$data);
	}



	/*public function post_lecturing(){
		$data['all_lecturing'] = $this->us->get_all_lecturing();
		$data['all_course'] = $this->us->get_all_course();
		$data['all_lecture'] = $this->us->get_all_lecture();
		$this->load->view('student/post_lecturing',$data);
	}
	public function announcement(){
		$data['all_announce'] = $this->us->get_all_announce();
		$this->load->view('student/announcement',$data);
	}
	public function see_announce($id){
		$data['all_announce'] = $this->us->get_all_announce();
		$data['one_anou'] = $this->us->get_one_announce($id);
		$data['more_on_announce'] = 'more_on_announce.php';
		$this->load->view('student/announcement',$data);
	}
	public function post_list(){
		$data['all_lecturing'] = $this->us->get_all_lecturing();
		$this->load->view('student/post_list',$data);
	}
	public function course_list()
	{
		$data['all_course'] = $this->us->get_all_course();
		$this->load->view('student/course_list',$data);
	}
	public function settings()
	{
		$login_id = $this->session->userdata('User_Id');
		$data['std_me'] = $this->us->get_user_loged($login_id);
		$this->load->view('student/settings',$data);
	}
	public function edit_me(){
		$std_id = $this->session->userdata('User_Id');
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$level = $this->input->post('level');
		$password = $this->input->post('password');
		$user_data = array('f_name'=>$fname,'l_name'=>$lname,'email'=>$email,'phone'=>$phone,'level'=>$level,'password'=>$password);
		if($this->us->update_loged($user_data,$std_id)){
			$this->session->set_flashdata('sms_good','Update done well !');
		}else{
			$this->session->set_flashdata('sms_bad','Update failed !');
		}
		$userId = $this->session->userdata('User_Id');
		$person = $this->us->get_user_loged($userId);
		$new_data = array('User_Fname' => $person->f_name, 'User_Lname' => $person->l_name,'TheLevel' => $person->level);
		$this->session->set_userdata($new_data);
		redirect('Student/settings');
	}
	public function add(){
		$std_depart = $this->session->userdata('TheDepart');
		$course = $this->input->post('course');
		$date_time = $this->input->post('date_time');
		$duration = $this->input->post('duration');
		$details = $this->input->post('details');
		$std_id = $this->session->userdata('User_Id');
		$lecturing_data = array(
			'depart_id'=>$std_depart,'student_id'=>$std_id,'course_id'=>$course,'date_time'=>$date_time,'duration'=>$duration,'content'=>$details,'active'=>1
		);
		if($this->us->save($lecturing_data)){
			$this->session->set_flashdata('sms_good','Lecturing added well !');
		}else{
			$this->session->set_flashdata('sms_bad','Adding lecturing failed !');
		}

		redirect('Student/post_lecturing');
	}
	public function see_more($id){
		$data['all_lecturing'] = $this->us->get_all_lecturing();
		$data['all_course'] = $this->us->get_all_course();
		$data['all_lecture'] = $this->us->get_all_lecture();
		$data['one_le'] = $this->us->get_one_lecturing($id);
		$data['read_more'] = 'more_on_lecturing.php';
		$this->load->view('student/post_lecturing',$data);
	}
	public function delete($id){
		if($this->us->delete_lecturing($id)){
			$this->session->set_flashdata('sms_good','Lecturing deleted well !');
		}else{
			$this->session->set_flashdata('sms_bad','delete failed !');
		}
		redirect('Student/post_lecturing');
	}
	public function course_details($id){
		$data['all_course'] = $this->us->get_all_course();
		$data['one_cour'] = $this->us->get_one_course($id);
		$data['read_more'] = 'more_on_course.php';
		$this->load->view('student/course_list',$data);
	}*/
}