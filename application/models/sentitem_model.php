<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sentitem_model extends CI_Model{

	function countSentitems(){
		return $this->db->get('sentitems');
	}

	function getSentitems($num, $offset){
		$this->db->order_by('id', 'ASC');
		return $this->db->get('sentitems', $num, $offset)->result();
	}

	function delete($id){
		$this->db->where('ID', $id);
		$this->db->delete('sentitems');
	}

	function getSearch($search){
		$this->db->like('DestinationNumber',$search);
		$this->db->or_like('TextDecoded',$search);
		$query = $this->db->get('sentitems');
		return $query->result();
	}

	function countSearch($search){
		$this->db->like('DestinationNumber',$search);
		$this->db->or_like('TextDecoded',$search);
		$query = $this->db->count_all_results('sentitems');
		return $query;
	}

	function getFilter($filter){
		$this->db->like('SendingDateTime', $filter);
		return $this->db->get('sentitems')->result();
	}

	function countFilter($filter){
		$this->db->like('SendingDateTime',$filter);
		$query = $this->db->count_all_results('sentitems');
		return $query;
	}
}