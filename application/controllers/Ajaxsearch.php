<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajaxsearch extends CI_Controller {
	public function __construct() {
		
		parent::__construct();
		$this->load->model('Course_search','us');
		$Admin_Access = $this->session->userdata('Admin_Access');
		$userId = $this->session->userdata('User_Id');
		if(!isset($Admin_Access))
			redirect('Login');
	}
	public function index(){
		//$data['all_users'] = $this->us->get_all_users();
		$this->load->view('student/course_search');
	}
	public function fetch(){
		$output = '';
		$query = '';
		if($this->input->post('searh_text')){
			$query = $this->input->post('search_text');
		}
		$data = $this->us->get_all_course($query);
		$output .= '<table class="table table-striped table-hover"> <!-- hover -->
						<thead>
							<th>N<sup><u>o</u></sup></th>
							<th>Course</th>
							<th>Credit</th>
							<th>Level</th>
						</thead>
						<tbody>';
		if($data->num_rows() > 0){
			$i=1;
			foreach($data->result() as $row_co){
				$output .='<tr>
					<td>'.$i++.'</td>
					<td>'.$row_co->name.'</td>
					<td>'.$row_co->credit.'</td>
					<td>'.$row_co->level.'</td>
				</tr>';
			}
		}else{
			$output .= '<tr><td colspan="4">No data Available !</td></tr>';
		}
		$output .= '</tbody></table>';
		echo $output;
	}
}
