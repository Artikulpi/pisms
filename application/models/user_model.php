<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model{

	function checkUser($user, $pass){
		$query = $this->db->get_where('user', array('username'=> $user, 'password'=>md5($pass)));
		return ($query->row()>0) ? TRUE : FALSE ;
	}

	function getByUser($user){
		return $this->db->get_where('user', array('username'=>$user))->row();
	}
}