<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form','date'));
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model(array('Contact_model','Log_model','Group_model','Contactgroup_model'));
	}

	public function index($offset = NULL){
		if($this->session->userdata('login') == TRUE){
			$this->load->library('pagination');
			$count = $this->Contact_model->get();

			$config['base_url'] = site_url('contact/index');
			$config['total_rows'] = $count->num_rows();
			$config['per_page'] = 10; 
			$config['uri_segment'] = 3;
			$num = $config['per_page'];
			$this->pagination->initialize($config);
			$data['halaman'] = $this->pagination->create_links();
			$data['title'] = 'List Contact';
			$data['header'] = 'Daftar Kontak';
			$data['contactgroup'] = $this->Contactgroup_model->getfor();
			$data['group'] = $this->Group_model->getfor();
			$data['contact'] = $this->Contact_model->getAll($num, $offset);
			$data['page'] = 'contact/list';
			$this->load->view('template/layout', $data);
		}else{
			redirect('auth');
		}
	}

	public function add(){
		if($this->session->userdata('login') == TRUE){
			$this->form_validation->set_rules('name', 'Nama', 'required');
			$this->form_validation->set_rules('phone', 'Telepon', 'required');
			$this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');
			if($this->form_validation->run() == TRUE){
				$data = array(
					'name' => $this->input->post('name'),
					'phone_number' => $this->input->post('phone'),
					'organisation' => $this->input->post('organisation'),
					);
				$this->Contact_model->save($data);
				$log = array(
					'user_id'=>$this->session->userdata('id'),
					'activity'=>'Menambah kontak baru',
					'date'=>date('Y-m-d H:i:s'),
					'module'=>'Contact',
					);
				$this->Log_model->save($log);
				redirect('contact');
			}else{
				$data['title'] = 'Add Contact';
				$data['header'] = 'Tambah Kontak';
				$data['page'] = 'contact/add';
				$this->load->view('template/layout', $data);
			}
		}else{
			redirect('auth');
		}
	}

	function edit($id){
		if($this->session->userdata('login') == TRUE){
			$data['contact'] = $this->Contact_model->getById($id);
			$data['title'] = 'Edit Contact';
			$data['header'] = 'Sunting Kontak';
			$data['page'] = 'contact/edit';
			$this->load->view('template/layout', $data);
		}else{
			redirect('auth');
		}
	}

	function saveEdit(){
		if($this->session->userdata('login') == TRUE){
			$this->form_validation->set_rules('name', 'Nama', 'required');
			$this->form_validation->set_rules('phone', 'Telepon', 'required');
			$this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');
			$id = $this->input->post('id');
			if($this->form_validation->run() == TRUE){
				$data = array(
					'name' => $this->input->post('name'),
					'phone_number' => $this->input->post('phone'),
					'organisation' => $this->input->post('organisation'),
					);
				$this->Contact_model->saveEdit($id, $data);
				$log = array(
					'user_id'=>$this->session->userdata('id'),
					'activity'=>'Sunting kontak',
					'date'=>date('Y-m-d H:i:s'),
					'module'=>'Contact',
					);
				$this->Log_model->save($log);
				redirect('contact');
			}else{
				redirect('contact/edit/'.$id);
			}
		}
	}

	function delete($id){
		$this->Contact_model->delete($id);
		$log = array(
			'user_id'=>$this->session->userdata('id'),
			'activity'=>'Hapus kontak',
			'date'=>date('Y-m-d H:i:s'),
			'module'=>'Contact',
			);
		$this->Log_model->save($log);
		redirect('contact');
	}
}