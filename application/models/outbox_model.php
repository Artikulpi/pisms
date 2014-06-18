<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Outbox_model extends CI_Model{

	function countOutbox(){
		return $this->db->get('outbox');
	}

	function getOutbox($num, $offset){
		$this->db->order_by('id', 'DESC');
		return $this->db->get('outbox', $num, $offset)->result();
	}

	function delete($id){
		$this->db->where('ID', $id);
		$this->db->delete('outbox');
	}

}