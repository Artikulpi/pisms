<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sms extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form','date'));
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model(array('Sms_model'));
	}

	function inbox($offset = NULL){
		if($this->session->userdata('login') == TRUE){
			$this->load->library('pagination');
			$count = $this->Sms_model->countInbox();

			$config['base_url'] = site_url('sms/inbox');
			$config['total_rows'] = $count->num_rows();
			$config['per_page'] = 10; 
			$config['uri_segment'] = 3;
			$num = $config['per_page'];
			$this->pagination->initialize($config);
			$data['halaman'] = $this->pagination->create_links();
			$data['title'] = 'Inbox';
			$data['header'] = 'Kotak Masuk';
			$data['inbox'] = $this->Sms_model->getInbox($num, $offset);
			$data['page'] = 'sms/inbox';
			$this->load->view('template/layout', $data);
		}else{
			redirect('auth');
		}
	}
}