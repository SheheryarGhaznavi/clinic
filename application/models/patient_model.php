<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Patient_model extends CI_Model
{
	public function insert_patient()
	{
		$filename = $this->upload->data();
		$_POST['image'] = $filename['file_name'];
		$this->db->insert('patient',$_POST);
	}
	public function get_patient()
	{
		return $this->db->get('patient')->result();
	}
	public function get_dept()
	{
		return $this->db->get('department')->result();
	}
		public function patient_delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('patient');
	}
	public function get_pat($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('patient')->result();
	}
	public function update_pat($id)
	{
		$filename = $this->upload->data();
		$_POST['image'] = $filename['file_name'];
		$this->db->where('id',$id);
		$data = array('name' => $_POST['name'], 'dept_id' => $_POST['dept_id'], 'gender' => $_POST['gender'], 'age' => $_POST['age'], 'address' => $_POST['address'], 'about_disease' => $_POST['about_disease'] , 'blood_group' => $_POST['blood_group'] , 'entry_date' => $_POST['entry_date'], 'phone_no' => $_POST['phone_no'] , 'cnic' => $_POST['cnic'], 'image' => $_POST['image']);
		$this->db->update('patient',$data);
		return true;
	}
	public function update($id)
	{
		$this->db->where('id',$id);
		$this->db->update('patient',$_POST);
		return true;
	}

	
}

?>