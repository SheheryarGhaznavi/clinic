<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Nurse_model extends CI_Model
{
	public function insert_nurse()
	{
		$filename = $this->upload->data();
		$_POST['image'] = $filename['file_name'];
		$this->db->insert('nurse',$_POST);
	}
	public function get_nurse()
	{
		return $this->db->get('nurse')->result();
	}
	public function get_dept()
	{
		return $this->db->get('department')->result();
	}
		public function nurse_delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('nurse');
	}
		public function get_nur($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('nurse')->result();
	}
	public function update_nur($id)
	{
		$filename = $this->upload->data();
		$_POST['image'] = $filename['file_name'];
		$this->db->where('id',$id);
		$data = array('name' => $_POST['name'], 'email' => $_POST['email'], 'dept_id' => $_POST['dept_id'],'gender' => $_POST['gender'],'status' => $_POST['status'], 'address' => $_POST['address'], 'description' => $_POST['description'] , 'dob' => $_POST['dob'] , 'phone_no' => $_POST['phone_no'], 'image' => $_POST['image']);
		$this->db->update('nurse',$data);
		return true;
	}
	public function update($id)
	{
		$this->db->where('id',$id);
		$this->db->update('nurse',$_POST);
		return true;
	}
}

?>