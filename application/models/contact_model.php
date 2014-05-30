<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model{

	function get(){
		return $this->db->get('contact');
	}

	function getfor(){
		return $this->db->get('contact')->result();
	}

	function getAll($num, $offset){
		return $this->db->get('contact', $num, $offset)->result();
	}

	function save($data){
		$this->db->insert('contact', $data);
	}

	function getById($id){
		return $this->db->get_where('contact', array('id'=>$id))->row();
	}

	function saveEdit($id, $data){
		$this->db->where('id', $id);
		$this->db->update('contact', $data);
	}

	function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('contact');
	}
}