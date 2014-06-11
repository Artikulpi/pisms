<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sentitem extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form','date','text'));
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model(array('Sentitem_model','Contact_model','Log_model','Pigroup_model'));
	}

	function index($offset = NULL){
		if($this->session->userdata('login') == TRUE){
			$this->load->library('pagination');
			$count = $this->Sentitem_model->countSentitems();

			$config['base_url'] = site_url('sentitem/index');
			$config['total_rows'] = $count->num_rows();
			$config['per_page'] = 10; 
			$config['uri_segment'] = 3;
			$num = $config['per_page'];
			$this->pagination->initialize($config);
			$data['halaman'] = $this->pagination->create_links();
			$data['title'] = 'Sent Item';
			$data['header'] = 'Terkirim';
			$data['sentitem'] = $this->Sentitem_model->getSentitems($num, $offset);
			$data['page'] = 'sentitem/sentitem';
			$this->load->view('template/layout', $data);
		}else{
			redirect('auth');
		}
	}

	function delete($id){
		if($this->session->userdata('login')== TRUE){
			$this->Sentitem_model->delete($id);
			$log = array(
				'user_id'=>$this->session->userdata('id'),
				'activity'=>'Hapus Sentitem',
				'date'=>date('Y-m-d H:i:s'),
				'module'=>'Sentitem',
				);
			$this->Log_model->save($log);
			redirect('sentitem');
		}else{
			redirect('auth');
		}
	}
}