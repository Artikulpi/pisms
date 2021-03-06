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
class Sentitem extends CI_Controller{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('login') == FALSE){
			redirect('auth');
		}
		$this->load->helper(array('url','form','date','text'));
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model(array('Sentitem_model','Contact_model','Log_model','Pigroup_model'));
	}

	function index($offset = NULL){
		$this->load->library('pagination');
		$count = $this->Sentitem_model->countSentitems();

		$config['base_url'] = site_url('sentitem/index');
		$config['total_rows'] = $count->num_rows();
		$config['per_page'] = 3; 
		$config['uri_segment'] = 3;
		$num = $config['per_page'];
		$this->pagination->initialize($config);
		$data['halaman'] = $this->pagination->create_links();
		$data['title'] = 'Sent Item';
		$data['header'] = 'Terkirim';
		$data['contact'] = $this->Contact_model->getfor();
		$data['sentitem'] = $this->Sentitem_model->getSentitems($num, $offset);
		$data['page'] = 'sentitem/sentitem';
		$this->load->view('template/layout', $data);
	}

	function search(){
		$search = $this->input->post('cari');
		$data['title'] = 'Sent Item';
		$data['header'] = 'Pesan Terkirim';
		$data['contact'] = $this->Contact_model->getfor();
		$data['sentitem'] = $this->Sentitem_model->getSearch($search);
		$data['jumlah'] = $this->Sentitem_model->countSearch($search);
		$data['search'] = $search;
		$data['page'] = 'sentitem/search_sentitem';
		$this->load->view('template/layout', $data);
	}

	function filter(){
		$date_start = $this->input->post('date_start');
		$date_end = $this->input->post('date_end');
		$mesorphone = $this->input->post('mesorphone');
		$keyword = $this->input->post('keyword');
		$data['title'] = 'Sentitem';
		$data['header'] = 'Berita Terkirim';
		$data['contact'] = $this->Contact_model->getfor();
		$data['sentitem'] = $this->Sentitem_model->getFilter($date_start, $date_end, $mesorphone, $keyword);
		$data['jumlah'] = $this->Sentitem_model->countFilter($date_start, $date_end, $mesorphone, $keyword);
		$data['search'] = $keyword;
		$data['page'] = 'sentitem/filter_sentitem';
		$this->load->view('template/layout', $data);
	}

	function delete($id){
		$this->Sentitem_model->delete($id);
		$log = array(
			'user_id'=>$this->session->userdata('id'),
			'activity'=>'Hapus Sentitem',
			'date'=>date('Y-m-d H:i:s'),
			'module'=>'Sentitem',
			);
		$this->Log_model->save($log);
		redirect('sentitem');
	}
}