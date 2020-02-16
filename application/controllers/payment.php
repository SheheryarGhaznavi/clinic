<?php 

/**
* 
*/
class Payment extends CI_Controller
{
		public function __construct()
	{
		parent::__construct();
		$this->load->model('payment_model');
		$this->load->model('treatment_model');
		$this->load->model('patient_model');
	}
	
	public function index()
	{
		$data['pat'] = $this->patient_model->get_patient();
		$data['trea'] = $this->treatment_model->get_treatment();
		$this->load->view('add_payment',$data);
	}

		public function manage()
	{
		$data['pat'] = $this->patient_model->get_patient();
		$data['trea'] = $this->treatment_model->get_treatment();
		$data['pay'] = $this->payment_model->get_payment();
		$this->load->view('manage_payment',$data);
	}
	public function add_payment()
	{
		$config['upload_path'] = './upload/payment/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('image')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$this->payment_model->insert_payment(); 
		$response = array('success' => "ok", 'msg' => "payment Successfully Entered" );	    		
		echo json_encode($response);
		}

		
	}
		public function delete($id)
	{
		$this->payment_model->payment_delete($id);
	}
	public function get_payment($id)
	{
		$payment = $this->payment_model->get_pay($id);
		$data = array(
				'patient_id' => $payment[0]->patient_id,
				'amount' => $payment[0]->amount,
				'created_on' => $payment[0]->created_on ,
				'image' => $payment[0]->image ,
				'treatment_id' => $payment[0]->treatment_id
			);

		echo json_encode($data);
	}
	public function update_payment($id)
	{
		$config['upload_path'] = './upload/payment/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		
			//$data = array('upload_data' => $this->upload->data());
			if ( ! $this->upload->do_upload('image')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$check = $this->payment_model->update_pay($id);
		if($check)
		{
			$notification = array('success' => "ok", 'message' => "Payment Data Successfully Updated");
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
		$check = $this->payment_model->update($id);
		if($check)
		{
			$notification = array('success' => "ok", 'message' => "Payment Data Successfully Updated");
		}
		else
		{
			$notification = array('error' => "ok", 'message' => "There is an error! please Try Again");
		}
		echo json_encode($notification);
	}
}




?>