<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Treatment_model extends CI_Model

{
	public function insert_treatment()
	{
		$this->db->insert('treatment',$_POST);
	}
	public function get_treatment()
	{
		return $this->db->get('treatment')->result();
	}
		public function treatment_delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('treatment');
	}
	public function get_treat($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('treatment')->result();
	}
	public function update_treat($id)
	{
		$this->db->where('id',$id);
		$data = array('name' => $_POST['name'],'description' => $_POST['description'] , 'dept_id' => $_POST['dept_id'] , 'created_on' => $_POST['created_on'] , 'status' => $_POST['status']);
		$this->db->update('treatment',$data);
		return true;
	}

}

?>