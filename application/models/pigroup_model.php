<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pigroup_model extends CI_Model{

	function get(){
		return $this->db->get('pigroup');
	}

	function getfor(){
		$this->db->order_by('group_name', 'ASC');
		return $this->db->get('pigroup')->result();
	}

	function getAll($num, $offset){
		$this->db->order_by('group_name', 'ASC');
		return $this->db->get('pigroup', $num, $offset)->result();
	}

	function save($data){
		$this->db->insert('pigroup', $data);
	}

	function getById($id){
		return $this->db->get_where('pigroup', array('id'=>$id))->row();
	}

	function saveEdit($id, $data){
		$this->db->where('id', $id);
		$this->db->update('pigroup', $data);
	}

	function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('pigroup');
	}
}