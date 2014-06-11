<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inbox extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form','date','text'));
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model(array('Inbox_model','Contact_model','Log_model','Pigroup_model'));
	}

	function index($offset = NULL){
		if($this->session->userdata('login') == TRUE){
			$this->load->library('pagination');
			$count = $this->Inbox_model->countInbox();

			$config['base_url'] = site_url('sms/inbox');
			$config['total_rows'] = $count->num_rows();
			$config['per_page'] = 10; 
			$config['uri_segment'] = 3;
			$num = $config['per_page'];
			$this->pagination->initialize($config);
			$data['halaman'] = $this->pagination->create_links();
			$data['title'] = 'Inbox';
			$data['header'] = 'Kotak Masuk';
			$data['contact'] = $this->Contact_model->getfor();
			$data['inbox'] = $this->Inbox_model->getInbox($num, $offset);
			$data['page'] = 'inbox/inbox';
			$this->session->set_flashdata('detail', 'oke');
			$this->load->view('template/layout', $data);
		}else{
			redirect('auth');
		}
	}


	function detail($id){
		if($this->session->userdata('login') == TRUE){
			$data['sms'] = $this->Inbox_model->getDetailInbox($id);
			$data['title'] = 'Detail';
			$data['header'] = 'Kotak Masuk';
			$data['page'] = 'inbox/detailInbox';
			$this->load->view('template/layout', $data);
		}else{
			redirect('auth');
		}
	}

	function forward($id){
		if($this->session->userdata('login') == TRUE){
			$data['contact'] = $this->Contact_model->getfor();
			$data['group'] = $this->Pigroup_model->getfor();
			$data['sms'] = $this->Inbox_model->getDetailInbox($id);
			$data['title'] = 'Forward';
			$data['header'] = 'Teruskan Pesan';
			$data['page'] = 'inbox/forwardInbox';
			$this->load->view('template/layout', $data);
		}else{
			redirect('auth');
		}	
	}

	function reply($id){
		if($this->session->userdata('login') == TRUE){
			$data['sms'] = $this->Inbox_model->getDetailInbox($id);
			$data['title'] = 'Reply';
			$data['header'] = 'Balas Pesan';
			$data['page'] = 'sms/reply';
			$this->load->view('template/layout', $data);
		}else{
			redirect('auth');
		}	
	}

	function deleteInbox($id){
		if($this->session->userdata('login')== TRUE){
			$this->Sms_model->deleteInbox($id);
			$log = array(
				'user_id'=>$this->session->userdata('id'),
				'activity'=>'Hapus Inbox',
				'date'=>date('Y-m-d H:i:s'),
				'module'=>'Inbox',
				);
			$this->Log_model->save($log);
			redirect('inbox');
		}else{
			redirect('auth');
		}
	}
}