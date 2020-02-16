<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model

{
	public function add()
	{
		$this->db->insert('user',$_POST);
		return true;
	}
	 public function get()
	 {
	 	return $this->db->get('user')->result();
	 }
	public function delete($id)
	 {
	 	$this->db->where('id',$id);
	 	$this->db->delete('user');
	 }
	 // public function get_user($id)
	 // {
	 // 	$this->db->where('id', $id);
	 // 	return $this->db->get('user')->result();
	 // }
	 	public function update($id)
	 {
	 	$this->db->where('id',$id);
	 	$this->db->update('user',$_POST);
	 	return true;
	 }
	 public function login()
	{
		$this->db->where($_POST);
		return $this->db->get('user');
	}

}

?>