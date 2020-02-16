<?php 

/**
* 
*/
class Treatment extends CI_Controller
{
	public function __construct()
	{
	    parent::__construct();
        $this->load->model('treatment_model');

        $this->load->model('doctor_model');
    }
	
	public function index()
	{
		$data['dep'] = $this->doctor_model->get_dept();
		$this->load->view('add_treatment',$data);
	}
	public function manage()
	{
		$data['dep'] = $this->doctor_model->get_dept();
		$data['trea'] = $this->treatment_model->get_treatment();
		$this->load->view('manage_treatment',$data);
	}
	public function add_treatment()
	{
		$this->treatment_model->insert_treatment();
		$response = array('success' => "ok", 'msg' => "Treatment Successfully Entered" );	    		
		echo json_encode($response);

	}
		public function delete($id)
	{
		$this->treatment_model->treatment_delete($id);
	}
		public function get_treatment($id)
	{
		$treatment = $this->treatment_model->get_treat($id);
		$data = array(
				'name' => $treatment[0]->name,
				'description' => $treatment[0]->description,
				'status' => $treatment[0]->status,
				'dept_id' => $treatment[0]->dept_id,
				'created_on' => $treatment[0]->created_on ,
				);

		echo json_encode($data);
	}
	public function update_treatment($id)
	{
		$check = $this->treatment_model->update_treat($id);
		if($check)
		{
			$notification = array('success' => "ok", 'message' => "treatment Data Successfully Updated");
		}
		else
		{
			$notification = array('error' => "ok", 'message' => "There is an error! please Try Again");
		}
		echo json_encode($notification);
	}
	
}

?>