<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model{

	function checkUser($user, $pass){
		$query = $this->db->get_where('user', array('username'=> $user, 'password'=>md5($pass)));
		if($query->num_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	function getByUser($user){
		return $this->db->get_where('user', array('username'=>$user))->row();
	}

	function getAll(){
		return $this->db->get('user')->result();
	}

	function save($data){
		$this->db->insert('user', $data);
	}

	function getById($id){
		return $this->db->get_where('user', array('id'=>$id))->row();
	}
}