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
class Contactgroup extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form','date'));
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model(array('Contactgroup_model','Log_model','Contact_model','Pigroup_model'));
	}

	public function index($offset = NULL){
		if($this->session->userdata('login') == TRUE){
			$this->load->library('pagination');
			$count = $this->Contactgroup_model->get();

			$config['base_url'] = site_url('contactgroup/index');
			$config['total_rows'] = $count->num_rows();
			$config['per_page'] = 10; 
			$config['uri_segment'] = 3;
			$num = $config['per_page'];
			$this->pagination->initialize($config);
			$data['halaman'] = $this->pagination->create_links();
			$data['title'] = 'List Group';
			$data['header'] = 'Daftar Anggota Group';
			$data['contact'] = $this->Contact_model->getfor();
			$data['group'] = $this->Pigroup_model->getfor();
			$data['contactgroup'] = $this->Contactgroup_model->getAll($num, $offset);
			$data['page'] = 'contactgroup/list';
			$this->load->view('template/layout', $data);
		}else{
			redirect('auth');
		}
	}

	public function add(){
		if($this->session->userdata('login') == TRUE){
			$this->form_validation->set_rules('contact', 'Kontak', 'required');
			$this->form_validation->set_rules('group', 'Grup', 'required');
			$this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');
			if($this->form_validation->run() == TRUE){
				$data = array(
					'contact_id' => $this->input->post('contact'),
					'group_id' => $this->input->post('group'),
					);
				$this->Contactgroup_model->save($data);
				$log = array(
					'user_id'=>$this->session->userdata('id'),
					'activity'=>'Menambah anggota grup baru',
					'date'=>date('Y-m-d H:i:s'),
					'module'=>'Contactgroup',
					);
				$this->Log_model->save($log);
				redirect('contactgroup');
			}else{
				$data['contact'] = $this->Contact_model->getfor();
				$data['group'] = $this->Pigroup_model->getfor();
				$data['title'] = 'Add Group';
				$data['header'] = 'Tambah Anggota Grup';
				$data['page'] = 'contactgroup/add';
				$this->load->view('template/layout', $data);
			}
		}else{
			redirect('auth');
		}
	}

	function edit($id){
		if($this->session->userdata('login') == TRUE){
			$data['contact'] = $this->Contact_model->getfor();
			$data['group'] = $this->Pigroup_model->getfor();
			$data['contactgroup'] = $this->Contactgroup_model->getById($id);
			$data['title'] = 'Edit Anggota Group';
			$data['header'] = 'Sunting Anggota Grup';
			$data['page'] = 'contactgroup/edit';
			$this->load->view('template/layout', $data);
		}else{
			redirect('auth');
		}
	}

	function saveEdit(){
		if($this->session->userdata('login') == TRUE){
			$this->form_validation->set_rules('contact', 'Kontak', 'required');
			$this->form_validation->set_rules('group', 'Grupx', 'required');
			$this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');
			$id = $this->input->post('id');
			if($this->form_validation->run() == TRUE){
				$data = array(
					'contact_id' => $this->input->post('contact'),
					'group_id' => $this->input->post('group'),
					);
				$this->Contactgroup_model->saveEdit($id, $data);
				$log = array(
					'user_id'=>$this->session->userdata('id'),
					'activity'=>'Sunting anggota kontak',
					'date'=>date('Y-m-d H:i:s'),
					'module'=>'Contactgroup',
					);
				$this->Log_model->save($log);
				redirect('contactgroup');
			}else{
				redirect('contact/edit/'.$id);
			}
		}else{
			redirect('auth');
		}
	}

	function delete($id){
		if($this->session->userdata('login') == TRUE){
			$this->Contactgroup_model->delete($id);
			$log = array(
				'user_id'=>$this->session->userdata('id'),
				'activity'=>'Hapus anggota grup',
				'date'=>date('Y-m-d H:i:s'),
				'module'=>'Contactgroup',
				);
			$this->Log_model->save($log);
			redirect('pigroup');
		}else{
			redirect('auth');
		}
	}
}