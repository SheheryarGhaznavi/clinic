<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Payment_model extends CI_Model
{
	public function insert_payment()
	{
		$filename = $this->upload->data();
		$_POST['image'] = $filename['file_name'];
		$treat = explode(',', $_POST['treatment_id']);
		$am = explode(',', $_POST['amount']);
		$treatment = $treat;
		$amount = $am;
		foreach ($treatment as $key => $value) {
				$this->db->set('treatment_id',$value);
				$this->db->set('amount',$amount[$key]);
				$this->db->set('patient_id',$_POST['patient_id']);
				$this->db->set('created_on',$_POST['created_on']);
				$this->db->set('image',$_POST['image']);
				$this->db->insert('payment');
		}
		return true;
	}
	public function get_payment()
	{
		return $this->db->get('payment')->result();
	}
		public function payment_delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('payment');
	}
	public function get_pay($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('payment')->result();
	}
	public function update_pay($id)
	{
		$filename = $this->upload->data();
		$_POST['image'] = $filename['file_name'];
		$this->db->where('id',$id);
		$data = array('patient_id' => $_POST['patient_id'], 'treatment_id' => $_POST['treatment_id'], 'amount' => $_POST['amount'] ,  'created_on' => $_POST['created_on'],  'image' => $_POST['image']);
		$this->db->update('payment',$data);
		return true;
	}
	public function update($id)
	{
		$this->db->where('id',$id);
		$this->db->update('payment',$_POST);
		return true;
	}
}

?>