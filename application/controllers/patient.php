<?php 

/**
* 
*/
class Patient extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('patient_model');
		$this->load->model('doctor_model');
	}
	public function index()
	{

		$data['dep'] = $this->patient_model->get_dept();
		$data['gen'] = $this->doctor_model->get_gen();
		$this->load->view('add_patient',$data);
	}
	public function manage()
	{
		$data['dep'] = $this->patient_model->get_dept();
		$data['pat'] = $this->patient_model->get_patient();
		$data['gen'] = $this->doctor_model->get_gen();
		$this->load->view('manage_patient',$data);
	}
	public function add_patient()
	{
		
		$config['upload_path'] = './upload/patinet/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('image')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$this->patient_model->insert_patient(); 
			$response = array('success' => "ok", 'msg' => "Patient Successfully Entered" );    		
			echo json_encode($response);
		}
	}
	
	public function delete($id)
	{
		$this->patient_model->patient_delete($id);
	}
	public function get_patient($id)
	{
		$patient = $this->patient_model->get_pat($id);
		$data = array(
				'name' => $patient[0]->name,
				'about_disease' => $patient[0]->about_disease,
				'age' => $patient[0]->age,
				'address' => $patient[0]->address ,
				'dept_id' => $patient[0]->dept_id ,
				'gender' => $patient[0]->gender ,
				'cnic' => $patient[0]->cnic ,
				'phone_no' => $patient[0]->phone_no ,
				'blood_group' => $patient[0]->blood_group ,
				'image' => $patient[0]->image ,
				'entry_date' => $patient[0]->entry_date
			);

		echo json_encode($data);
	}
	public function update_patient($id)
	{

		$config['upload_path'] = './upload/patient/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		
			//$data = array('upload_data' => $this->upload->data());
			if ( ! $this->upload->do_upload('image')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$check = $this->patient_model->update_pat($id);
		if($check)
		{
			$notification = array('success' => "ok", 'message' => "patient Data Successfully Updated");
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

		$check = $this->patient_model->update($id);
		if($check)
		{
			$notification = array('success' => "ok", 'message' => "patient Data Successfully Updated");
		}
		else
		{
			$notification = array('error' => "ok", 'message' => "There is an error! please Try Again");
		}
		echo json_encode($notification);
		
	}
	
}


?>