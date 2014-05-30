<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contactgroup_model extends CI_Model{
	
	function get(){
		return $this->db->get('contact_has_group');
	}

	function getfor(){
		return $this->db->get('contact_has_group')->result();
	}

	function getAll($num, $offset){
		return $this->db->get('contact_has_group', $num, $offset)->result();
	}

	function save($data){
		$this->db->insert('contact_has_group', $data);
	}

	function getById($id){
		return $this->db->get_where('contact_has_group', array('id'=>$id))->row();
	}

	function saveEdit($id, $data){
		$this->db->where('id', $id);
		$this->db->update('contact_has_group', $data);
	}

	function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('contact_has_group');
	}
}