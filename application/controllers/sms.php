<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sms extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form','date','text'));
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model(array('Sms_model','Contact_model','Log_model','Pigroup_model'));
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
			$data['contact'] = $this->Contact_model->getfor();
			$data['inbox'] = $this->Sms_model->getInbox($num, $offset);
			$data['page'] = 'sms/inbox';
			$this->load->view('template/layout', $data);
		}else{
			redirect('auth');
		}
	}

	function outbox($offset = NULL){
		if($this->session->userdata('login') == TRUE){
			$this->load->library('pagination');
			$count = $this->Sms_model->countOutbox();

			$config['base_url'] = site_url('sms/outbox');
			$config['total_rows'] = $count->num_rows();
			$config['per_page'] = 10; 
			$config['uri_segment'] = 3;
			$num = $config['per_page'];
			$this->pagination->initialize($config);
			$data['halaman'] = $this->pagination->create_links();
			$data['title'] = 'Outbox';
			$data['header'] = 'Kotak Keluar';
			$data['outbox'] = $this->Sms_model->getOutbox($num, $offset);
			$data['page'] = 'sms/outbox';
			$this->load->view('template/layout', $data);
		}else{
			redirect('auth');
		}
	}

	function sentitem($offset = NULL){
		if($this->session->userdata('login') == TRUE){
			$this->load->library('pagination');
			$count = $this->Sms_model->countSentitems();

			$config['base_url'] = site_url('sms/sentitem');
			$config['total_rows'] = $count->num_rows();
			$config['per_page'] = 10; 
			$config['uri_segment'] = 3;
			$num = $config['per_page'];
			$this->pagination->initialize($config);
			$data['halaman'] = $this->pagination->create_links();
			$data['title'] = 'Sent Item';
			$data['header'] = 'Terkirim';
			$data['sentitem'] = $this->Sms_model->getSentitems($num, $offset);
			$data['page'] = 'sms/sentitem';
			$this->load->view('template/layout', $data);
		}else{
			redirect('auth');
		}
	}

	function create(){
		if($this->session->userdata('login') == TRUE){
			$this->form_validation->set_rules('content', 'Isi', 'required');
			$this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');
			if($this->form_validation->run() == TRUE AND $this->input->post('input_manual')){
				$data = array(
					'DestinationNumber' => $this->input->post('number'),
					'Text' => md5($this->input->post('content')),
					);
				$this->Sms_model->sent($data);
				$log = array(
					'user_id'=>$this->session->userdata('id'),
					'activity'=>'Kirim SMS',
					'date'=>date('Y-m-d H:i:s'),
					'module'=>'Sms',
					);
				$this->Log_model->save($log);
				redirect('sms/outbox');
			}else{
				$data['contact'] = $this->Contact_model->getfor();
				$data['group'] = $this->Pigroup_model->getfor();
				$data['title'] = 'Create SMS';
				$data['header'] = 'SMS';
				$data['page'] = 'sms/create';
				$this->load->view('template/layout', $data);
			}
		}else{
			redirect('auth');
		}
	}

	function detailInbox($id){
		if($this->session->userdata('login') == TRUE){
			$data['sms'] = $this->Sms_model->getDetailInbox($id);
			$data['title'] = 'Detail';
			$data['header'] = 'Kotak Masuk';
			$data['page'] = 'sms/detailInbox';
			$this->load->view('template/layout', $data);
		}else{
			redirect('auth');
		}
	}

	function forwardInbox($id){
		if($this->session->userdata('login') == TRUE){
			$data['contact'] = $this->Contact_model->getfor();
			$data['group'] = $this->Pigroup_model->getfor();
			$data['sms'] = $this->Sms_model->getDetailInbox($id);
			$data['title'] = 'Forward';
			$data['header'] = 'Teruskan Pesan';
			$data['page'] = 'sms/forwardInbox';
			$this->load->view('template/layout', $data);
		}else{
			redirect('auth');
		}	
	}

	function reply($id){
		if($this->session->userdata('login') == TRUE){
			$data['sms'] = $this->Sms_model->getDetailInbox($id);
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
				'activity'=>'Hapus SMS',
				'date'=>date('Y-m-d H:i:s'),
				'module'=>'Sms',
				);
			$this->Log_model->save($log);
			redirect('sms/inbox');
		}else{
			redirect('auth');
		}
	}

	public function search()
	{
		$keyword = $this->uri->segment(3);

		$data = $this->db->from('contact')->like('name',$keyword)->get(); 

		foreach($data->result() as $row)
		{
			$arr['query'] = $keyword;
			$arr['suggestions'][] = array(
				'value'  =>$row->name,
				'data'   =>$row->id,
				'phone'  =>$row->phone_number
				);
		}
      // minimal PHP 5.2
		echo json_encode($arr);
	}
}