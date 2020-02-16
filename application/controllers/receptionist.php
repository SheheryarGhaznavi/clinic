<?php 

/**
* 
*/
class Receptionist extends CI_Controller
{
		public function __construct()
	{
		parent::__construct();
		$this->load->model('receptionist_model');
		$this->load->model('doctor_model');
	}
	public function index()
	{

		$data['dep'] = $this->doctor_model->get_dept();
		$data['gen'] = $this->doctor_model->get_gen();
		$this->load->view('add_receptionist',$data);
	}
	public function manage()
	{
		$data['dep'] = $this->doctor_model->get_dept();
		$data['gen'] = $this->doctor_model->get_gen();
		$data['recep'] = $this->receptionist_model->get_receptionist();
		$this->load->view('manage_receptionist',$data);
	}
		public function add_receptionist()
	{
		$config['upload_path'] = './upload/receptionist/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('image')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$this->receptionist_model->insert_receptionist();
			$response = array('success' => "ok", 'msg' => "Receptionist Successfully Entered" );    		
			echo json_encode($response);
		}

	}
		public function delete($id)
	{
		$this->receptionist_model->receptionist_delete($id);
	}
		public function get_receptionist($id)
	{
		$receptionist = $this->receptionist_model->get_recep($id);
		$data = array(
				'name' => $receptionist[0]->name,
				'description' => $receptionist[0]->description,
				'email' => $receptionist[0]->email,
				'address' => $receptionist[0]->address,
				'dept_id' => $receptionist[0]->dept_id,
				'gender' => $receptionist[0]->gender,
				'status' => $receptionist[0]->status,
				'dob' => $receptionist[0]->dob,
				'image' => $receptionist[0]->image,
				'created_on' => $receptionist[0]->created_on,
				'phone_no' => $receptionist[0]->phone_no,
			);

		echo json_encode($data);
	}
	public function update_receptionist($id)
	{
		$config['upload_path'] = './upload/receptionist/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		
			//$data = array('upload_data' => $this->upload->data());
			if ( ! $this->upload->do_upload('image')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$check = $this->receptionist_model->update_recep($id);
		if($check)
		{
			$notification = array('success' => "ok", 'message' => "receptionist Data Successfully Updated");
		}
		else
		{
			$notification = array('error' => "ok", 'message' => "There is an error! please Try Again");
		}
		echo json_encode($notification);
		}

		
	}
	public function update($id)
	{
		$check = $this->receptionist_model->update($id);
		if($check)
		{
			$notification = array('success' => "ok", 'message' => "receptionist Data Successfully Updated");
		}
		else
		{
			$notification = array('error' => "ok", 'message' => "There is an error! please Try Again");
		}
		echo json_encode($notification);
	}
}


?>