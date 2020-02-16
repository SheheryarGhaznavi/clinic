<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Report_model extends CI_Model
{
	public function insert_report()
	{
		$filename = $this->upload->data();
		$_POST['image'] = $filename['file_name'];
		$this->db->insert('reports',$_POST);
	}
	public function get_report()
	{
		return $this->db->get('reports')->result();
	}
		public function report_delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('reports');
	}
		public function get_rep($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('reports')->result();
	}
	public function update_rep($id)
	{
		$filename = $this->upload->data();
		$_POST['image'] = $filename['file_name'];
		$this->db->where('id',$id);
		$data = array('title' => $_POST['title'] , 'patient_id' => $_POST['patient_id'] ,  'description' => $_POST['description'] , 'subject' => $_POST['subject'] , 'daignoses' => $_POST['daignoses'] , 'modified_date' => $_POST['modified_date'], 'image' => $_POST['image'] );
		$this->db->update('reports',$data);
		return true;
	}
	public function update($id)
	{
		$this->db->where('id',$id);
		$this->db->update('reports',$_POST);
		return true;
	}
}

?>