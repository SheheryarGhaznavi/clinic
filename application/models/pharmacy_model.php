<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Pharmacy_model extends CI_Model
{
	public function insert_pharmacy()
	{
		$filename = $this->upload->data();
		$_POST['image'] = $filename['file_name'];
		$this->db->insert('pharmacist',$_POST);
	}
		public function get_pharmacy()
	{
		return $this->db->get('pharmacist')->result();
	}
	public function get_dept()
	{
		return $this->db->get('department')->result();
	}
		public function pharmacy_delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('pharmacist');
	}
		public function get_phar($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('pharmacist')->result();
	}
	public function update_phar($id)
	{
		$filename = $this->upload->data();
		$_POST['image'] = $filename['file_name'];
		$this->db->where('id',$id);
		$data = array('name' => $_POST['name'],'email' => $_POST['email'], 'gender' => $_POST['gender'], 'status' => $_POST['status'], 'address' => $_POST['address'],'description' => $_POST['description'],'phone_no' => $_POST['phone_no'], 'image' => $_POST['image']);
		$this->db->update('pharmacist',$data);
		return true;
	}
	public function update($id)
	{
		$this->db->where('id',$id);
		$this->db->update('pharmacist',$_POST);
		return true;
	}
	
}

?>