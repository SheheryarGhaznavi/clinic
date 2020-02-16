<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Laboratory_model extends CI_Model
{
  public function insert_laboratory()
  {
    $filename = $this->upload->data();
    $_POST['image'] = $filename['file_name'];
    $this->db->insert('laboratorist',$_POST);
  }
  public function get_laboratory()
  {
    return $this->db->get('laboratorist')->result();
  }
  public function laboratory_delete($id)
  {
	$this->db->where('id',$id);
	$this->db->delete('laboratorist');
  }
    public function get_lab($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('laboratorist')->result();
  }
  public function update_lab($id)
  {
    $filename = $this->upload->data();
    $_POST['image'] = $filename['file_name'];
    $this->db->where('id',$id);
    $data = array('name' => $_POST['name'], 'email' => $_POST['email'], 'dept_id' => $_POST['dept_id'], 'gender' => $_POST['gender'], 'status' => $_POST['status'], 'created_on' => $_POST['created_on'], 'dob' => $_POST['dob'], 'address' => $_POST['address'], 'description' => $_POST['description'] , 'phone_no' => $_POST['phone_no'] , 'image' => $_POST['image']);
    $this->db->update('laboratorist',$data);
    return true;
  }
  public function update($id)
  {
    $this->db->where('id',$id);
    $this->db->update('laboratorist',$_POST);
    return true;
  }
  
}

?>