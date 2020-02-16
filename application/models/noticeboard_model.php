<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticeboard_model extends CI_Model

{
	public function insert_noticeboard()
	{
	    $this->db->insert('noticeboard',$_POST);
	}
		public function get_noticeboard()
	{
		return $this->db->get('noticeboard')->result();
	}
		public function noticeboard_delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('noticeboard');
	}
	public function get_note($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('noticeboard')->result();
	}
	public function update_note($id)
	{
		$this->db->where('id',$id);
		$data = array('title' => $_POST['title'], 'created_on' => $_POST['created_on'], 'start_date' => $_POST['start_date'], 'description' => $_POST['description'] , 'end_date' => $_POST['end_date'] , 'status' => $_POST['status'] ); 
		$this->db->update('noticeboard',$data);
		return true;
	}
}

?>