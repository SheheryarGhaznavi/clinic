<?php 

/**
* 
*/
class Report extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('report_model');
		$this->load->model('patient_model');
	}
	public function index()
	{
		$data['pat'] = $this->patient_model->get_patient();
		$this->load->view('add_report',$data);
	}
	public function manage()
	{
		$data['pat'] = $this->patient_model->get_patient();
		$data['rep'] = $this->report_model->get_report();
		$this->load->view('manage_report',$data);
	}
	public function add_report()
	{
		$config['upload_path'] = './upload/reports/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('image')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$this->report_model->insert_report(); 
		$response = array('success' => "ok", 'msg' => "Report Successfully Entered" );	    		
		echo json_encode($response);
		}
		
	}
		public function delete($id)
	{
		$this->report_model->report_delete($id);
	}
		public function get_report($id)
	{
		$report = $this->report_model->get_rep($id);
		$data = array(
				'title' => $report[0]->title,
				'description' => $report[0]->description,
				'patient_id' => $report[0]->patient_id,
				'subject' => $report[0]->subject,
				'daignoses' => $report[0]->daignoses,
				'image' => $report[0]->image,
				'modified_date' => $report[0]->modified_date,
			);

		echo json_encode($data);
	}
	public function update_report($id)
	{
		$config['upload_path'] = './upload/reports/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		
			//$data = array('upload_data' => $this->upload->data());
			if ( ! $this->upload->do_upload('image')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$check = $this->report_model->update_rep($id);
		if($check)
		{
			$notification = array('success' => "ok", 'message' => "report Data Successfully Updated");
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
		$check = $this->report_model->update($id);
		if($check)
		{
			$notification = array('success' => "ok", 'message' => "report Data Successfully Updated");
		}
		else
		{
			$notification = array('error' => "ok", 'message' => "There is an error! please Try Again");
		}
		echo json_encode($notification);
	}
}


?>