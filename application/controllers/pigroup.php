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
class Pigroup extends CI_Controller{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('login') == FALSE){
			redirect('auth');
		}
		$this->load->helper(array('url','form','date'));
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model(array('Pigroup_model','Log_model','Contact_model','Contactgroup_model'));
	}

	public function index($offset = NULL){
		$this->load->library('pagination');
		$count = $this->Pigroup_model->get();

		$config['base_url'] = site_url('pigroup/index');
		$config['total_rows'] = $count->num_rows();
		$config['per_page'] = 10; 
		$config['uri_segment'] = 3;
		$num = $config['per_page'];
		$this->pagination->initialize($config);
		$data['halaman'] = $this->pagination->create_links();
		$data['title'] = 'List Group';
		$data['header'] = 'Daftar Grup';
		$data['group'] = $this->Pigroup_model->getAll($num, $offset);
		$data['page'] = 'pigroup/list';
		$this->load->view('template/layout', $data);
	}

	public function detail($id){
		$data['title'] = 'Detail Group';
		$data['header'] = 'Rinci Grup';
		$data['chg'] = $this->Contactgroup_model->getByGroup($id);
		$data['group'] = $this->Pigroup_model->getById($id);
		$data['contact'] = $this->Contact_model->getfor();
		$data['page'] = 'pigroup/detail';
		$this->load->view('template/layout', $data);
	}

	public function add(){
		$this->form_validation->set_rules('group', 'Grup', 'required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');
		if($this->form_validation->run() == TRUE){
			$data = array(
				'group_name' => $this->input->post('group'),
				);
			$this->Pigroup_model->save($data);
			$log = array(
				'user_id'=>$this->session->userdata('id'),
				'activity'=>'Menambah grup baru',
				'date'=>date('Y-m-d H:i:s'),
				'module'=>'Pigroup',
				);
			$this->Log_model->save($log);
			redirect('pigroup');
		}else{
			$data['title'] = 'Add Group';
			$data['header'] = 'Tambah Grup';
			$data['page'] = 'pigroup/add';
			$this->load->view('template/layout', $data);
		}
	}

	function edit($id){
		$data['group'] = $this->Pigroup_model->getById($id);
		$data['title'] = 'Edit Group';
		$data['header'] = 'Sunting Grup';
		$data['page'] = 'pigroup/edit';
		$this->load->view('template/layout', $data);
	}

	function saveEdit(){
		$this->form_validation->set_rules('group', 'Grup', 'required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');
		$id = $this->input->post('id');
		if($this->form_validation->run() == TRUE){
			$data = array(
				'group_name' => $this->input->post('group'),
				);
			$this->Pigroup_model->saveEdit($id, $data);
			$log = array(
				'user_id'=>$this->session->userdata('id'),
				'activity'=>'Sunting grup',
				'date'=>date('Y-m-d H:i:s'),
				'module'=>'Pigroup',
				);
			$this->Log_model->save($log);
			redirect('pigroup');
		}else{
			redirect('pigroup/edit/'.$id);
		}
	}

	function delete($id){
		$this->Pigroup_model->delete($id);
		$log = array(
			'user_id'=>$this->session->userdata('id'),
			'activity'=>'Hapus grup',
			'date'=>date('Y-m-d H:i:s'),
			'module'=>'Pigroup',
			);
		$this->Log_model->save($log);
		redirect('pigroup');
	}
}