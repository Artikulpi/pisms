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

	function countSearch($search){
		$this->db->like('SenderNumber',$search);
		$this->db->or_like('TextDecoded',$search);
		$query = $this->db->count_all_results('inbox');
		return $query;
	}

	function getFilter($date_start, $date_end, $mesorphone, $keyword){
		($date_start) ? $this->db->where('ReceivingDateTime >= ', $date_start.' 00:00:00') : NULL;
		($date_end) ? $this->db->where('ReceivingDateTime <=', $date_end.' 00:00:00') : NULL;
		($mesorphone == 'phone') ? $this->db->like('SenderNumber', $keyword) : $this->db->like('TextDecoded', $keyword);
		return $this->db->get('inbox')->result();
	}

	function countFilter($filter){
		$this->db->like('ReceivingDateTime',$filter);
		$query = $this->db->count_all_results('inbox');
		return $query;
	}
}