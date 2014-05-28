<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form','date'));
		$this->load->library('session');
		$this->load->library('form_validation');
	}

	public function index(){
		$data['title'] = 'Dashboard';
		$data['page'] = 'admin/dash';
		$this->load->view('template/layout', $data);
	}
}