<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * PiSMS
 * Web based SMS management
 *
 * @package    PiSMS
 * @author      Artikulpi
 * @license      http://pisms.artikulpi.com
 * @link           http://pisms.artikulpi.com
 */
class Sentitem_model extends CI_Model{

	function countSentitems(){
		return $this->db->get('sentitems');
	}

	function getSentitems($num, $offset){
		$this->db->order_by('id', 'DESC');
		return $this->db->get('sentitems', $num, $offset)->result();
	}

	function delete($id){
		$this->db->where('ID', $id);
		$this->db->delete('sentitems');
	}

	function getSearch($search){
		$this->db->like('DestinationNumber',$search);
		$this->db->or_like('TextDecoded',$search);
		$query = $this->db->get('sentitems');
		return $query->result();
	}

	function countSearch($search){
		$this->db->like('DestinationNumber',$search);
		$this->db->or_like('TextDecoded',$search);
		$query = $this->db->count_all_results('sentitems');
		return $query;
	}

	function getFilter($date_start, $date_end, $mesorphone, $keyword){
		($date_start) ? $this->db->where('SendingDateTime >= ', $date_start.' 00:00:00') : NULL;
		($date_end) ? $this->db->where('SendingDateTime <=', $date_end.' 00:00:00') : NULL;
		($mesorphone == 'phone') ? $this->db->like('DestinationNumber', $keyword) : $this->db->like('TextDecoded', $keyword);
		return $this->db->get('sentitems')->result();
	}

	function countFilter($date_start, $date_end, $mesorphone, $keyword){
		($date_start) ? $this->db->where('SendingDateTime >= ', $date_start.' 00:00:00') : NULL;
		($date_end) ? $this->db->where('SendingDateTime <=', $date_end.' 00:00:00') : NULL;
		($mesorphone == 'phone') ? $this->db->like('DestinationNumber', $keyword) : $this->db->like('TextDecoded', $keyword);
		$query = $this->db->count_all_results('sentitems');
		return $query;
	}
}