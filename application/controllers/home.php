<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('home_model');
		
	}
 	
	public function index() {
		
		$data['title'] = "8BULBS";
		$list['list'] = "test";
		
 		$this->load->view('layout/header', array('data' => $data));
		//$this->load->view('layout/header', $data);
		$this->load->view('home/index');
		$this->load->view('layout/footer'); 
		
 	}
	
	public function signup() {
		 
		$data['user_type_id']	 				= $this->input->post('t_sign_up3');;
		$data['user_first_name'] 				= $this->input->post('i_first_name');
		$data['user_last_name'] 				= $this->input->post('i_last_name');
		$data['user_email'] 					= $this->input->post('i_email');
		$data['user_username']	 				= $this->input->post('i_username');
		$data['user_password']	 				= md5($this->input->post('i_password'));
		$data['user_active_status']	 			= 1;
		
		$id = $this->home_model->create($data);
		
		if($data['user_type_id'] == 2){
			header("Location: ../complete_account?user_id=$id");
		}else{
			header("Location: ../account");
		}
 	}
}