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

	function getSearch($cari){
		$this->db->like('DestinationNumber',$cari);
		$this->db->or_like('TextDecoded',$cari);
		$query = $this->db->get('sentitems');
		return $query->result();
	}
}