<?php 

/**
* 
*/
class Department extends CI_Controller
{
	public function __construct()
	{
	    parent::__construct();
        $this->load->model('department_model');
    }
	public function index()
	{
		$this->load->view('add_department');
	}
	public function manage()
	{
		$data['dept'] = $this->department_model->get_department();
		$this->load->view('manage_department',$data);
	}
	public function add_department()
	{
		$this->department_model->insert_department();
		$response = array('success' => "ok", 'msg' => "Department Successfully Entered" );	    		
		echo json_encode($response);

	}
		public function delete($id)
	{
		$this->department_model->department_delete($id);
	}
	public function get_department($id)
	{
		$department = $this->department_model->get_dept($id);
		$data = array(
				'name' => $department[0]->name,
				'description' => $department[0]->description,
				'status' => $department[0]->status,
				'created_on' => $department[0]->created_on ,
			);

		echo json_encode($data);
	}
	public function update_department($id)
	{
		$check = $this->department_model->update_dept($id);
		if($check)
		{
			$notification = array('success' => "ok", 'message' => "department Data Successfully Updated");
		}
		else
		{
			$notification = array('error' => "ok", 'message' => "There is an error! please Try Again");
		}
		echo json_encode($notification);
	}
	




	
}


?>