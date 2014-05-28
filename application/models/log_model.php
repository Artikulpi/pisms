<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Log_model extends CI_Model{

	function save($log){
		$this->db->insert('log_activity', $log);
	}

	function get(){
		return $this->db->get('log_activity');
	}

	function getAll($num, $offset){
		return $this->db->get('log_activity', $num, $offset)->result();
	}
}