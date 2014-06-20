<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model{

	function get(){
		return $this->db->get('contact');
	}

	function getfor(){
		$this->db->order_by('name', 'ASC');
		return $this->db->get('contact')->result();
	}

	function getAll($num, $offset){
		$this->db->order_by('name', 'ASC');
		return $this->db->get('contact', $num, $offset)->result();
	}

	function save($data){
		$this->db->insert('contact', $data);
	}

	function getById($id){
		return $this->db->get_where('contact', array('id'=>$id))->row();
	}

	function getByName($name, $phone){
		return $this->db->get_where('contact', array('name'=>$name, 'phone_number'=>$phone))->row();
	}

	function saveEdit($id, $data){
		$this->db->where('id', $id);
		$this->db->update('contact', $data);
	}

	function getSearch($search){
		$this->db->like('name', $search);
		$this->db->or_like('phone_number', $search);
		return $this->db->get('contact')->result();
	}

	function countSearch($search){
		$this->db->like('name', $search);
		$this->db->or_like('phone_number', $search);
		return $this->db->count_all_results('contact');
	}

	function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('contact');
	}
}