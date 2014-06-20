<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * PiSMS
 * Web based SMS management
 *
 * @package    PiSMS
 * @author      Artikulpi
 * @license      http://pisms.artikulpi.com
 * @link           http://pisms.artikulpi.com
 */ 
class Log_activity extends CI_Controller{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('login') == FALSE){
			redirect('auth');
		}
		$this->load->helper(array('url','form','date'));
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model(array('Log_model','User_model'));
	}

	function index($offset = NULL){
		if($this->session->userdata('role') == 1){
			$this->load->library('pagination');
			$count = $this->Log_model->get();

			$config['base_url'] = site_url('log_activity/index');
			$config['total_rows'] = $count->num_rows();
			$config['per_page'] = 10; 
			$config['uri_segment'] = 3;
			$num = $config['per_page'];
			$this->pagination->initialize($config);
			$data['halaman'] = $this->pagination->create_links();
			$data['title'] = 'Log';
			$data['header'] = 'Log Aktifitas';
			$data['user'] = $this->User_model->getfor();
			$data['log'] = $this->Log_model->getAll($num, $offset);
			$data['page'] = 'log_activity/list';
			$this->load->view('template/layout', $data);
		}else{
			redirect('admin');
		}
	}
}