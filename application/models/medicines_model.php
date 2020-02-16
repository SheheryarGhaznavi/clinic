<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Medicines_model extends CI_Model

{
	public function insert_medicines()
	{
		$filename = $this->upload->data();
		$_POST['image'] = $filename['file_name'];
		$this->db->insert('medicines',$_POST);
	}
		public function get_medicines()
	{
		return $this->db->get('medicines')->result();
	}
		public function medicines_delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('medicines');
	}
		public function get_med($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('medicines')->result();
	}
	public function update_med($id)
	{
		$filename = $this->upload->data();
		$_POST['image'] = $filename['file_name'];
		$this->db->where('id',$id);
		$data = array('name' => $_POST['name'], 'price' => $_POST['price'], 'retail_price' => $_POST['retail_price'], 'description' => $_POST['description'] ,  'entry_date' => $_POST['entry_date'] , 'formula' => $_POST['formula'] , 'company' => $_POST['company'] , 'image' => $_POST['image']);
		$this->db->update('medicines',$data);
		return true;
	}
	public function update($id)
	{
		$this->db->where('id',$id);
		$this->db->update('medicines',$_POST);
		return true;
	}
}

?>