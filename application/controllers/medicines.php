<?php 

/**
* 
*/
class medicines extends CI_Controller
{
	public function __construct()
	{
	    parent::__construct();
        $this->load->model('medicines_model');
        $this->load->model('doctor_model');
    }
	
	public function index()
	{
		$this->load->view('add_medicines');
	}
	public function manage()
	{
		$data['med'] = $this->medicines_model->get_medicines();
		$data['dep'] = $this->doctor_model->get_dept();
		$this->load->view('manage_medicines',$data);
	}
	public function add_medicine()
	{
		$config['upload_path'] = './upload/medicines/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('image')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$this->medicines_model->insert_medicines();
		$response = array('success' => "ok", 'msg' => "Medicine Successfully Entered" );	    		
		echo json_encode($response);
		}
		
	}
		public function delete($id)
	{
		$this->medicines_model->medicines_delete($id);
	}
		public function get_medicines($id)
	{
		$medicines = $this->medicines_model->get_med($id);
		$data = array(
				'name' => $medicines[0]->name,
				'description' => $medicines[0]->description,
				'formula' => $medicines[0]->formula,
				'company' => $medicines[0]->company,
				'entry_date' => $medicines[0]->entry_date,
				'price' => $medicines[0]->price,
				'image' => $medicines[0]->image,
				'retail_price' => $medicines[0]->retail_price,
			);

		echo json_encode($data);
	}
	public function update_medicines($id)
	{
		$config['upload_path'] = './upload/medicines/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		
			//$data = array('upload_data' => $this->upload->data());
			if ( ! $this->upload->do_upload('image')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$check = $this->medicines_model->update_med($id);
		if($check)
		{
			$notification = array('success' => "ok", 'message' => "medicines Data Successfully Updated");
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
		$check = $this->medicines_model->update($id);
		if($check)
		{
			$notification = array('success' => "ok", 'message' => "medicines Data Successfully Updated");
		}
		else
		{
			$notification = array('error' => "ok", 'message' => "There is an error! please Try Again");
		}
		echo json_encode($notification);
	}
}


?>