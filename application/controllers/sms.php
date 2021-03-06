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
class Sms extends CI_Controller{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('login') == FALSE){
			redirect('auth');
		}
		$this->load->helper(array('url','form','date','text'));
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model(array('Sms_model','Contact_model','Log_model','Pigroup_model','Contactgroup_model'));
	}

	function autocomplete(){
		if (isset($_GET['term'])){
			$term = strtolower($_GET['term']);
		}
		$contact = $this->Contact_model->getAc($term);
		$json = array();
		foreach ($contact->result_array() as $row){
			$new_row['label']=htmlentities(stripslashes($row['name']));
			$new_row['value']=htmlentities(stripslashes($row['phone_number']));
			$row_set[] = $new_row;
		}
		echo json_encode($row_set);
	}

	function create(){
		$this->form_validation->set_rules('content', 'Isi', 'required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');
		if($this->form_validation->run() == TRUE AND $this->input->post('optionsRadios')=='frominput'){
			$number = $this->input->post('no_tujuan');
			$arr_number = explode(',', $number);
			foreach ($arr_number as $key) { 
				$data = array(
					'DestinationNumber' => $key,
					'TextDecoded' => $this->input->post('content'),
					);
				$this->Sms_model->sent($data);
			}
			$log = array(
				'user_id'=>$this->session->userdata('id'),
				'activity'=>'Kirim SMS',
				'date'=>date('Y-m-d H:i:s'),
				'module'=>'Sms',
				);
			$this->Log_model->save($log);
			if($this->input->post('draft_id')){
				$draft_id = $this->input->post('draft_id');
				$this->Sms_model->deleteDraft($draft_id);
			}
			redirect('outbox');
		}elseif($this->form_validation->run() == TRUE AND $this->input->post('optionsRadios')=='fromgroup'){
			foreach ($this->input->post('groupcheck') as $key) {
				foreach ($this->Contactgroup_model->getIdForSend($key) as $value) {
					$data = array(
						'DestinationNumber' => $value->phone_number,
						'TextDecoded' => $this->input->post('content'),
						);
					$this->Sms_model->sent($data);
				}
			}

			$log = array(
				'user_id'=>$this->session->userdata('id'),
				'activity'=>'Kirim SMS',
				'date'=>date('Y-m-d H:i:s'),
				'module'=>'Sms',
				);
			$this->Log_model->save($log);
			if($this->input->post('draft_id')){
				$draft_id = $this->input->post('draft_id');
				$this->Sms_model->deleteDraft($draft_id);
			}
			redirect('outbox');
		}elseif($this->form_validation->run() == TRUE AND $this->input->post('draft')){
			$content = $this->input->post('content');
			$data = array(
				'content'=> $content,
				);
			$this->Sms_model->saveDraft($data);
			if($this->input->post('draft_id')){
				$draft_id = $this->input->post('draft_id');
				$this->Sms_model->deleteDraft($draft_id);
			}
			redirect('sms/draft');
		}elseif($this->form_validation->run() == TRUE AND $this->input->post('sendto')){
			$data = array(
				'DestinationNumber' => $this->input->post('contact'),
				'TextDecoded' => $this->input->post('content'),
				);
			$this->Sms_model->sent($data);

			$log = array(
				'user_id'=>$this->session->userdata('id'),
				'activity'=>'Kirim SMS',
				'date'=>date('Y-m-d H:i:s'),
				'module'=>'Sms',
				);

			$this->Log_model->save($log);
			if($this->input->post('draft_id')){
				$draft_id = $this->input->post('draft_id');
				$this->Sms_model->deleteDraft($draft_id);
			}
			redirect('outbox');
		}elseif($this->form_validation->run() == TRUE AND $this->input->post('optionsRadios')=='kontak'){
			$kontak = $this->input->post('fromcontact');
			$arr_contact = explode(', ', $kontak);
			foreach ($arr_contact as $key) {
				if($key != NULL){
					$data = array(
						'DestinationNumber'=>$key,
						'TextDecoded'=> $this->input->post('content')
						);
					$this->Sms_model->sent($data);
				}
			}
			$log = array(
				'user_id'=>$this->session->userdata('id'),
				'activity'=>'Kirim SMS',
				'date'=>date('Y-m-d H:i:s'),
				'module'=>'Sms',
				);

			$this->Log_model->save($log);
			if($this->input->post('draft_id')){
				$draft_id = $this->input->post('draft_id');
				$this->Sms_model->deleteDraft($draft_id);
			}
			redirect('outbox');
		}else{
			$data['contact'] = $this->Contact_model->getfor();
			$data['group'] = $this->Pigroup_model->getfor();
			$data['title'] = 'Create SMS';
			$data['header'] = 'SMS';
			$data['page'] = 'sms/add';
			$this->load->view('template/layout', $data);
		}
	}

	function reply($id){
		$data['sms'] = $this->Sms_model->getDetailInbox($id);
		$data['title'] = 'Reply';
		$data['header'] = 'Balas Pesan';
		$data['page'] = 'sms/reply';
		$this->load->view('template/layout', $data);
	}

	function sendto($id){
		$data['contact'] = $this->Contact_model->getById($id);
		$data['title'] = 'Kirim Pesan';
		$data['header'] = 'Kirim Pesan';
		$data['page'] = 'sms/sendto';
		$this->load->view('template/layout', $data);
	}

	function deleteInbox($id){
		$this->Sms_model->deleteInbox($id);
		$log = array(
			'user_id'=>$this->session->userdata('id'),
			'activity'=>'Hapus SMS',
			'date'=>date('Y-m-d H:i:s'),
			'module'=>'Sms',
			);
		$this->Log_model->save($log);
		redirect('sms/inbox');
	}

	function draft($offset = NULL){
		$this->load->library('pagination');
		$count = $this->Sms_model->countDraft();

		$config['base_url'] = site_url('sms/draft');
		$config['total_rows'] = $count->num_rows();
		$config['per_page'] = 10; 
		$config['uri_segment'] = 3;
		$num = $config['per_page'];
		$this->pagination->initialize($config);
		$data['halaman'] = $this->pagination->create_links();
		$data['title'] = 'Draft';
		$data['header'] = 'Draft';
		$data['draft'] = $this->Sms_model->getDraft($num, $offset);
		$data['page'] = 'sms/draftlist';
		$this->load->view('template/layout', $data);
	}

	function editDraft($id){
		$data['draft'] = $this->Sms_model->getDraftById($id);
		$data['contact'] = $this->Contact_model->getfor();
		$data['group'] = $this->Pigroup_model->getfor();
		$data['title'] = 'Edit draft';
		$data['header'] = 'Sunting Draft';
		$data['page'] = 'sms/editDraft';
		$this->load->view('template/layout', $data);
	}

	function deleteDraft($id){
		$this->Sms_model->deleteDraft($id);
		$log = array(
			'user_id'=>$this->session->userdata('id'),
			'activity'=>'Hapus Draft',
			'date'=>date('Y-m-d H:i:s'),
			'module'=>'Sms',
			);
		$this->Log_model->save($log);
		redirect('sms/draft');
	}
}