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

class About extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('login')== FALSE){
			redirect('auth');
		}
	}

	function index(){
		$data['header'] = 'About';
		$data['title'] = 'About';
		$data['page'] = 'about/about';
		$this->load->view('template/layout', $data);
	}
}