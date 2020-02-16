<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Receptionist_model extends CI_Model
{
	public function insert_receptionist()
	{
		$filename = $this->upload->data();
		$_POST['image'] = $filename['file_name'];
		$this->db->insert('receptionist',$_POST);
	}
	public function get_receptionist()
	{
		return $this->db->get('receptionist')->result();
	}
		public function receptionist_delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('receptionist');
	}
		public function get_recep($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('receptionist')->result();
	}
	public function update_recep($id)
	{
		$filename = $this->upload->data();
		$_POST['image'] = $filename['file_name'];
		$this->db->where('id',$id);
		$data = array('name' => $_POST['name'], 'email' => $_POST['email'], 'address' => $_POST['address'], 'description' => $_POST['description'] ,'phone_no' => $_POST['phone_no'] ,'dept_id' => $_POST['dept_id'] ,'gender' => $_POST['gender'] ,'created_on' => $_POST['created_on'] ,'status' => $_POST['status'] ,'image' => $_POST['image']);
		$this->db->update('receptionist',$data);
		return true;
	}
	public function update($id)
	{
		$this->db->where('id',$id);
		$this->db->update('receptionist',$_POST);
		return true;
	}
	
}

?>