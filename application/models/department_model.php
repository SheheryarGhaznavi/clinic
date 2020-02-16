<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Department_model extends CI_Model

{
	public function insert_department()
	{
		$this->db->insert('department',$_POST);
	}
	public function get_department()
	{
		return $this->db->get('department')->result();
	}
		public function department_delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('department');
	}
	public function get_dept($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('department')->result();
	}
		public function update_dept($id)
	{
		$this->db->where('id',$id);
		$data = array('name' => $_POST['name'], 'created_on' => $_POST['created_on'], 'status' => $_POST['status'], 'description' => $_POST['description']);
		$this->db->update('department',$data);
		return true;
	}

}

?>