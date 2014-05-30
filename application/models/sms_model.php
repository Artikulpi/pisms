<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sms_model extends CI_Model{

	function countInbox(){
		return $this->db->get('inbox');
	}

	function getInbox($num, $offset){
		$this->db->order_by('id', 'ASC');
		return $this->db->get('inbox', $num, $offset)->result();
	}

	function countOutbox(){
		return $this->db->get('outbox');
	}

	function getOutbox($num, $offset){
		$this->db->order_by('id', 'ASC');
		return $this->db->get('outbox', $num, $offset)->result();
	}

	function countSentitems(){
		return $this->db->get('sentitems');
	}

	function getSentitems($num, $offset){
		$this->db->order_by('id', 'ASC');
		return $this->db->get('sentitems', $num, $offset)->result();
	}
}