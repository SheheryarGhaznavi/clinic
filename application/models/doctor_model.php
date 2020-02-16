<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Doctor_model extends CI_Model
{
	public function insert_doctor()
	{
		$filename = $this->upload->data();
		$_POST['image'] = $filename['file_name'];
		$this->db->insert('doctor',$_POST);
	}
	public function get_doctor()
	{
		return $this->db->get('doctor')->result();
	}
	public function get_dept()
	{
		return $this->db->get('department')->result();
	}
	public function get_gen()
	{
		return $this->db->get('gender')->result();
	}
	public function doctor_delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('doctor');
	}
	public function get_doc($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('doctor')->result();
	}
	public function update_doc($id)
	{
		$filename = $this->upload->data();
		$_POST['image'] = $filename['file_name'];
		$data = array('name' => $_POST['name'], 'email' => $_POST['email'], 'dept_id' => $_POST['dept_id'],'gender' => $_POST['gender'],'status' => $_POST['status'], 'address' => $_POST['address'], 'description' => $_POST['description'] , 'dob' => $_POST['dob'] , 'phone_no' => $_POST['phone_no'], 'image' => $_POST['image']);
		$this->db->where('id',$id);
		$this->db->update('doctor',$data);
		return true;
	}
	public function update($id)
	{
		$data = array('name' => $_POST['name'], 'email' => $_POST['email'], 'dept_id' => $_POST['dept_id'],'gender' => $_POST['gender'],'status' => $_POST['status'], 'address' => $_POST['address'], 'description' => $_POST['description'] , 'dob' => $_POST['dob'] , 'phone_no' => $_POST['phone_no']);
		$this->db->where('id',$id);
		$this->db->update('doctor',$data);
		return true;
	}
	public function join_dept($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('department')->result();
	}
	function get_gender($id){
		$this->db->where('id',$id);
		return $this->db->get('gender')->result();
	}
}

?>