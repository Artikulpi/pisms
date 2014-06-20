/**
 * PiSMS
 * Web based SMS management
 *
 * @package    PiSMS
 * @author      Artikulpi
 * @license      http://pisms.artikulpi.com
 * @link           http://pisms.artikulpi.com
 */

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

	function memberGroup($id){
		$this->db->select('contact_has_group.contact_id, contact_has_group.group_id');
		$this->db->select('contact.name as NAMA');
		$this->db->select('pigroup.group_name as GRUP');
		$this->db->from('contact_has_group');
		$this->db->join('pigroup', 'pigroup.id = contact_has_group.group_id');
		$this->db->join('contact', 'contact.id = contact_has_group.contact_id');
		$this->db->where('contact_has_group.id', $id);
		$query = $this->db->get();
		return $query->row();
	}
}