<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller{

	function index(){
		$data['header'] = 'About';
		$data['title'] = 'About';
		$data['page'] = 'about/about';
		$this->load->view('template/layout', $data);
	}
}