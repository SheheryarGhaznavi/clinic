<?php 

/**
* 
*/
class Pharmacy extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pharmacy_model');
		$this->load->model('doctor_model');
	}
	public function index()
	{
		$data['gen'] = $this->doctor_model->get_gen();
		$this->load->view('add_pharmacy',$data);
	}
	public function manage()
	{
		$data['gen'] = $this->doctor_model->get_gen();
		$data['phar'] = $this->pharmacy_model->get_pharmacy();
		$this->load->view('manage_pharmacy',$data);
	}
	public function add_pharmacy()
	{
		$config['upload_path'] = './upload/pharmacist/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('image')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$this->pharmacy_model->insert_pharmacy();
			$response = array('success' => "ok", 'msg' => "Doctor Successfully Entered" );    		
			echo json_encode($response);
		}
	}
	public function delete($id)
	{
		$this->pharmacy_model->pharmacy_delete($id);
	}
	public function get_pharmacy($id)
	{
		$pharmacy = $this->pharmacy_model->get_phar($id);
		$data = array(
				'name' => $pharmacy[0]->name,
				'description' => $pharmacy[0]->description,
				'email' => $pharmacy[0]->email,
				'address' => $pharmacy[0]->address,				
				'status' => $pharmacy[0]->status,				
				'dob' => $pharmacy[0]->dob,				
				'image' => $pharmacy[0]->image,				
				'phone_no' => $pharmacy[0]->phone_no,				
				'created_on' => $pharmacy[0]->created_on,
				'gender' => $pharmacy[0]->gender,
			);

		echo json_encode($data);
	}
	public function update_pharmacy($id)
	{
		$config['upload_path'] = './upload/pharmacist/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		
			//$data = array('upload_data' => $this->upload->data());
			if ( ! $this->upload->do_upload('image')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$check = $this->pharmacy_model->update_phar($id);
		if($check)
		{
			$notification = array('success' => "ok", 'message' => "pharmacist Data Successfully Updated");
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
		$check = $this->pharmacy_model->update($id);
		if($check)
		{
			$notification = array('success' => "ok", 'message' => "pharmacist Data Successfully Updated");
		}
		else
		{
			$notification = array('error' => "ok", 'message' => "There is an error! please Try Again");
		}
		echo json_encode($notification);
	}
}


?>