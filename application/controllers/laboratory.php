<?php 

/**
* 
*/
class Laboratory extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('doctor_model');
		$this->load->model('laboratory_model');
	}
	public function index()
	{
		$data['dep'] = $this->doctor_model->get_dept();
		$data['gen'] = $this->doctor_model->get_gen();
		$this->load->view('add_laboratory',$data);
	}
	public function manage()
	{
		$data['dep'] = $this->doctor_model->get_dept();
		$data['gen'] = $this->doctor_model->get_gen();
		$data['lab'] = $this->laboratory_model->get_laboratory();
		$this->load->view('manage_laboratory',$data);
	}
	public function add_laboratory()
	{
		$config['upload_path'] = './upload/laboratorist/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('image')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$this->laboratory_model->insert_laboratory(); 
			$response = array('success' => "ok", 'msg' => "Laboratorist Successfully Entered" );    		
			echo json_encode($response);
		}

		}
		public function delete($id)
	{
		$this->laboratory_model->laboratory_delete($id);
	}
		public function get_laboratory($id)
	{
		$laboratory = $this->laboratory_model->get_lab($id);
		$data = array(
				'name' => $laboratory[0]->name,
				'description' => $laboratory[0]->description,
				'email' => $laboratory[0]->email,
				'dob' => $laboratory[0]->dob,
				'status' => $laboratory[0]->status,
				'created_on' => $laboratory[0]->created_on,
				'address' => $laboratory[0]->address,
				'gender' => $laboratory[0]->gender,
				'dept_id' => $laboratory[0]->dept_id,
				'image' => $laboratory[0]->image,
				'phone_no' => $laboratory[0]->phone_no,


			);

		echo json_encode($data);
	}
	public function update_laboratory($id)
	{
		$config['upload_path'] = './upload/laboratorist/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		
			//$data = array('upload_data' => $this->upload->data());
			if ( ! $this->upload->do_upload('image')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$check = $this->laboratory_model->update_lab($id);
		if($check)
		{
			$notification = array('success' => "ok", 'message' => "laboratorist Data Successfully Updated");
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
		$check = $this->laboratory_model->update($id);
		if($check)
		{
			$notification = array('success' => "ok", 'message' => "laboratorist Data Successfully Updated");
		}
		else
		{
			$notification = array('error' => "ok", 'message' => "There is an error! please Try Again");
		}
		echo json_encode($notification);
	}
}


?>