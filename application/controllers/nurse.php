<?php 

/**
* 
*/
class Nurse extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('nurse_model');
		$this->load->model('doctor_model');
	}
	
	public function index()
	{
		$data['gen'] = $this->doctor_model->get_gen();
		$data['dep'] = $this->nurse_model->get_dept();
		$this->load->view('add_nurse',$data);
	}
	public function manage()
	{
		$data['dep'] = $this->nurse_model->get_dept();
		$data['gen'] = $this->doctor_model->get_gen();
		$data['nur'] = $this->nurse_model->get_nurse();
		$this->load->view('manage_nurse',$data);
	}
	public function add_nurse()
	{
		$config['upload_path'] = './upload/nurse/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('image')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$this->nurse_model->insert_nurse();
			$response = array('success' => "ok", 'msg' => "Nurse Successfully Entered" );    		
			echo json_encode($response);
		}

	}
		public function delete($id)
	{
		$this->nurse_model->nurse_delete($id);
	}
		public function get_nurse($id)
	{
		$nurse = $this->nurse_model->get_nur($id);
		$data = array(
				'name' => $nurse[0]->name,
				'description' => $nurse[0]->description,
				'email' => $nurse[0]->email,
				'gender' => $nurse[0]->gender,
				'dept_id' => $nurse[0]->dept_id,
				'status' => $nurse[0]->status,
				'address' => $nurse[0]->address,
				'dob' => $nurse[0]->dob,
				'created_on' => $nurse[0]->created_on,
				'image' => $nurse[0]->image,
				'phone_no' => $nurse[0]->phone_no,
);

		echo json_encode($data);
	}
	public function update_nurse($id)
	{
		$config['upload_path'] = './upload/nurse/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		
			//$data = array('upload_data' => $this->upload->data());
			if ( ! $this->upload->do_upload('image')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$check = $this->nurse_model->update_nur($id);
		if($check)
		{
			$notification = array('success' => "ok", 'message' => "nurse Data Successfully Updated");
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
		$check = $this->nurse_model->update($id);
		if($check)
		{
			$notification = array('success' => "ok", 'message' => "nurse Data Successfully Updated");
		}
		else
		{
			$notification = array('error' => "ok", 'message' => "There is an error! please Try Again");
		}
		echo json_encode($notification);
	}
}


?>