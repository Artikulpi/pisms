<?php 
/**
 * PiSMS
 * Web based SMS management
 *
 * @package    PiSMS
 * @author      Artikulpi
 * @license      http://pisms.artikulpi.com
 * @link           http://pisms.artikulpi.com
 */ 
?>

<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form','date'));
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model(array('Sms_model', 'Contact_model'));
		if($this->session->userdata('login')== FALSE){
			redirect('auth');
		}
	}

	public function index(){
		$data['sum_contact'] = $this->Contact_model->get()->num_rows();
		$data['sum_inbox'] = $this->Sms_model->countInbox()->num_rows();
		$data['sum_sentitem'] = $this->Sms_model->countSentitems()->num_rows();
		$data['title'] = 'Dashboard';
		$data['header'] = 'Dashboard';
		$data['page'] = 'admin/dash';
		$this->load->view('template/layout', $data);
	}
}