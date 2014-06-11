<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inbox_model extends CI_Model{

	function countInbox(){
		return $this->db->get('inbox');
	}

	function getInbox($num, $offset){
		$this->db->order_by('id', 'ASC');
		return $this->db->get('inbox', $num, $offset)->result();
	}
	function deleteInbox($id){
		$this->db->where('ID', $id);
		$this->db->delete('inbox');
	}

	function getDetailInbox($id){
		return $this->db->get_where('inbox', array('ID'=> $id))->row();
	}

	function getSearch($search){
		$this->db->like('SenderNumber',$search);
		$this->db->or_like('TextDecoded',$search);
		$query = $this->db->get('inbox');
		return $query->result();
	}
}