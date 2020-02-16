

<?php

Class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('doctor_model');
		$this->load->model('nurse_model');
		$this->load->model('laboratory_model');
		$this->load->model('pharmacy_model');
		$this->load->model('receptionist_model');
	}
	public function index()
	{
		$this->load->view('add_user');
	}
	public function manage()
	{
		$data['user'] = $this->user_model->get();
		$this->load->view('manage_user',$data);
	}
	public function get_doctor()
	{
		$data = $this->doctor_model->get_doctor();
		echo json_encode($data);
	}
	public function get_nurse()
	{
		$data = $this->nurse_model->get_nurse();
		echo json_encode($data);
	}
	public function get_laboratorist()
	{
		$data = $this->laboratory_model->get_laboratory();
		echo json_encode($data);
	}
	public function get_pharmacist()
	{
		$data = $this->pharmacy_model->get_pharmacy();
		echo json_encode($data);
	}
	public function get_receptionist()
	{
		$data = $this->receptionist_model->get_receptionist();
		echo json_encode($data);
	}
	public function doctor($id)
	{
		$data = $this->doctor_model->get_doc($id);
		echo json_encode($data);
	}
	public function nurse($id)
	{
		$data = $this->nurse_model->get_nur($id);
		echo json_encode($data);
	}
	public function laboratorist($id)
	{
		$data = $this->laboratory_model->get_lab($id);
		echo json_encode($data);
	}
	public function pharmacist($id)
	{
		$data = $this->pharmacy_model->get_phar($id);
		echo json_encode($data);
	}
	public function receptionist($id)
	{
		$data = $this->receptionist_model->get_recep($id);
		echo json_encode($data);
	}
	public function add()
	{
		$data = $this->user_model->add();
		echo json_encode($data);
	}
	public function delete($id)
	{
		$this->user_model->delete($id);
	}
	// public function get_user($id)
	// {
	// 	$user = $this->user_model->get_user($id);
	// 	echo json_encode($user) ;
	// }
	public function update($id)
	{
		$data = $this->user_model->update($id);
		echo json_encode($data);
	}
	public function login()
	{
		$check = $this->user_model->login();
		if($check->num_rows() > 0)
		{
			$user = $check->result();
			$response = array('success' => "ok", 'msg' => "You are now logged in" );
			$session =  array('user_data' => $user, 'login_status' => TRUE);
			$this->session->set_userdata($session);
		}
		else
		{
				$response = array('error' => "ok", 'msg' => "You are not logged in" );
			
		}
		echo json_encode($response);
	}





}

?>