<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Group extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form','date'));
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model(array('Group_model','Log_model'));
	}

	public function index($offset = NULL){
		if($this->session->userdata('login') == TRUE){
			$this->load->library('pagination');
			$count = $this->Group_model->get();

			$config['base_url'] = site_url('group/index');
			$config['total_rows'] = $count->num_rows();
			$config['per_page'] = 10; 
			$config['uri_segment'] = 3;
			$num = $config['per_page'];
			$this->pagination->initialize($config);
			$data['halaman'] = $this->pagination->create_links();
			$data['title'] = 'List Group';
			$data['header'] = 'Daftar Grup';
			$data['group'] = $this->Group_model->getAll($num, $offset);
			$data['page'] = 'group/list';
			$this->load->view('template/layout', $data);
		}else{
			redirect('auth');
		}
	}

	public function add(){
		if($this->session->userdata('login') == TRUE){
			if($this->session->userdata('role') == 1){
				$this->form_validation->set_rules('group', 'Grup', 'required');
				$this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');
				if($this->form_validation->run() == TRUE){
					$data = array(
						'group_name' => $this->input->post('group'),
						);
					$this->Group_model->save($data);
					$log = array(
						'user_id'=>$this->session->userdata('id'),
						'activity'=>'Menambah grup baru',
						'date'=>date('Y-m-d H:i:s'),
						'module'=>'Group',
						);
					$this->Log_model->save($log);
					redirect('group');
				}else{
					$data['title'] = 'Add Group';
					$data['header'] = 'Tambah Grup';
					$data['page'] = 'group/add';
					$this->load->view('template/layout', $data);
				}
			}else{
				redirect('admin');
			}
		}else{
			redirect('auth');
		}
	}

	function edit($id){
		if($this->session->userdata('login') == TRUE){
			$data['group'] = $this->Group_model->getById($id);
			$data['title'] = 'Edit Group';
			$data['header'] = 'Sunting Grup';
			$data['page'] = 'group/edit';
			$this->load->view('template/layout', $data);
		}else{
			redirect('auth');
		}
	}

	function saveEdit(){
		if($this->session->userdata('login') == TRUE){
			$this->form_validation->set_rules('group', 'Grup', 'required');
			$this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');
			$id = $this->input->post('id');
			if($this->form_validation->run() == TRUE){
				$data = array(
					'group_name' => $this->input->post('group'),
					);
				$this->Group_model->saveEdit($id, $data);
				$log = array(
					'user_id'=>$this->session->userdata('id'),
					'activity'=>'Sunting grup',
					'date'=>date('Y-m-d H:i:s'),
					'module'=>'Group',
					);
				$this->Log_model->save($log);
				redirect('group');
			}else{
				redirect('group/edit/'.$id);
			}
		}
	}

	function delete($id){
		$this->Group_model->delete($id);
		$log = array(
			'user_id'=>$this->session->userdata('id'),
			'activity'=>'Hapus grup',
			'date'=>date('Y-m-d H:i:s'),
			'module'=>'Group',
			);
		$this->Log_model->save($log);
		redirect('group');
	}
}