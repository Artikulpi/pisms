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
class About extends CI_Controller{

	function index(){
		if($this->session->userdata('login') == TRUE){
			$data['header'] = 'About';
			$data['title'] = 'About';
			$data['page'] = 'about/about';
			$this->load->view('template/layout', $data);
		}else{
			redirect('auth');
		}
	}
}