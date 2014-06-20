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

class Log_model extends CI_Model{

	function save($log){
		$this->db->insert('log_activity', $log);
	}

	function get(){
		return $this->db->get('log_activity');
	}

	function getAll($num, $offset){
		$this->db->order_by('id', 'DESC');
		return $this->db->get('log_activity', $num, $offset)->result();
	}
}