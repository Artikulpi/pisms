<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Group_model extends CI_Model{

	function get(){
		return $this->db->get('grup');
	}

	function getfor(){
		$this->db->order_by('group_name', 'ASC');
		return $this->db->get('grup')->result();
	}

	function getAll($num, $offset){
		$this->db->order_by('group_name', 'ASC');
		return $this->db->get('grup', $num, $offset)->result();
	}

	function save($data){
		$this->db->insert('grup', $data);
	}

	function getById($id){
		return $this->db->get_where('grup', array('id'=>$id))->row();
	}

	function saveEdit($id, $data){
		$this->db->where('id', $id);
		$this->db->update('grup', $data);
	}

	function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('grup');
	}
}