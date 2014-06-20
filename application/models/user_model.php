<?php 
/**
 * PiSMS
 * Web based SMS management
 *
 * @package    PiSMS
 * @author      Artikulpi
 * @license      http://pisms.artikulpi.com
 * @link           http://pisms.artikulpi.com
 */ 
?>

<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model{

	function checkUser($user, $pass){
		$query = $this->db->get_where('user', array('username'=> $user, 'password'=>md5($pass), 'active'=>'1'));
		if($query->num_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	function getByUser($user){
		return $this->db->get_where('user', array('username'=>$user))->row();
	}

	function get(){
		return $this->db->get('user');
	}

	function getfor(){
		return $this->db->get('user')->result();
	}

	function getAll($num, $offset){
		return $this->db->get('user', $num, $offset)->result();
	}

	function save($data){
		$this->db->insert('user', $data);
	}

	function getById($id){
		return $this->db->get_where('user', array('id'=>$id))->row();
	}

	function saveEdit($id, $data){
		$this->db->where('id', $id);
		$this->db->update('user', $data);
	}

	function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('user');
	}
}