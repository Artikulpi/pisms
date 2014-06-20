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
class Outbox extends CI_Controller{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('login') == FALSE){
			redirect('auth');
		}
		$this->load->helper(array('url','form','date','text'));
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model(array('Outbox_model','Contact_model','Log_model','Pigroup_model'));
	}

	function index($offset = NULL){
		$this->load->library('pagination');
		$count = $this->Outbox_model->countOutbox();

		$config['base_url'] = site_url('outbox/index');
		$config['total_rows'] = $count->num_rows();
		$config['per_page'] = 4; 
		$config['uri_segment'] = 3;
		$num = $config['per_page'];
		$this->pagination->initialize($config);
		$data['halaman'] = $this->pagination->create_links();
		$data['title'] = 'Outbox';
		$data['header'] = 'Kotak Keluar';
		$data['contact'] = $this->Contact_model->getfor();
		$data['outbox'] = $this->Outbox_model->getOutbox($num, $offset);
		$data['page'] = 'outbox/outbox';
		$this->load->view('template/layout', $data);
	}

	function delete($id){
		$this->Outbox_model->delete($id);
		$log = array(
			'user_id'=>$this->session->userdata('id'),
			'activity'=>'Hapus Outbox',
			'date'=>date('Y-m-d H:i:s'),
			'module'=>'Outbox',
			);
		$this->Log_model->save($log);
		redirect('outbox');
	}
}