<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
		$this->load->helper(array('url','form','date'));
		$this->load->library('session');
		$this->load->library('form_validation');
	}

	public function index(){
		redirect('auth/login');
	}

	public function login(){
		if($this->session->userdata('login') == FALSE){
			$this->form_validation->set_rules('user', 'Username', 'required');
			$this->form_validation->set_rules('pass', 'Password', 'required');
			$this->form_validation->set_error_delimiters('<p class="bg-warning">', '</p>');
			if($this->form_validation->run() == TRUE){
				$user = $this->input->post('user');
				$pass = $this->input->post('pass');
				if($this->User_model->checkUser($user, $pass) == TRUE){
					$data_user = $this->User_model->getByUser($user);
					$data = array(
						'user'=>$user,
						'login'=>TRUE,
						'id'=>$data_user->id,
						'role'=>$data_user->role,
						);
					$this->session->set_userdata($data);
					redirect('admin/index');
				}else{
					$data['error'] = "Username atau password tidak valid";
					$data['title'] = 'Login';
					$data['page'] = 'auth/login';
					$this->load->view('template/layout-dashboard', $data);
				}
			}else{
				$data['title'] = 'Login';
				$data['page'] = 'auth/login';
				$this->load->view('template/layout-dashboard', $data);
			}
		}else{
			redirect('admin/index');
		}
	}

	public function logout(){
		if($this->session->userdata('login') == TRUE){
			$this->session->sess_destroy();
			redirect('auth');
		}else{
			redirect('auth');
		}
	}
}