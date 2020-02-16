<?php 
/**
* 
*/
class Doctor extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('doctor_model');
	}
	
	public function index()
	{	
		$data['dep'] = $this->doctor_model->get_dept();
		$data['gen'] = $this->doctor_model->get_gen();
		$this->load->view('add_doctor',$data);
	}
	public function manage()
	{
		$data['gen'] = $this->doctor_model->get_gen();
		$data['dep'] = $this->doctor_model->get_dept();
		$data['doc'] = $this->doctor_model->get_doctor();
		$this->load->view('manage_doctor',$data);
	}
	public function add_doctor()
	{
		
		$config['upload_path'] = './upload/patient/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('image')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$this->doctor_model->insert_doctor();
			$response = array('success' => "ok", 'msg' => "Doctor Successfully Entered" );    		
			echo json_encode($response);
		}
		
		
		

	}
	public function delete($id)
	{
		$this->doctor_model->doctor_delete($id);
	}
	public function get_doctor($id)
	{
		$doctor = $this->doctor_model->get_doc($id);
		$data = array(
				'name' => $doctor[0]->name,
				'description' => $doctor[0]->description,
				'email' => $doctor[0]->email,
				'address' => $doctor[0]->address ,
				'dept_id' => $doctor[0]->dept_id ,
				'dob' => $doctor[0]->dob ,
				'phone_no' => $doctor[0]->phone_no ,
				'status' => $doctor[0]->status ,
				'created_on' => $doctor[0]->created_on ,
				'image' => $doctor[0]->image ,
				'gender' => $doctor[0]->gender ,
			);

		echo json_encode($data);
	}
	public function update_doctor($id)
	{
		$config['upload_path'] = './upload/doctor/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		
			//$data = array('upload_data' => $this->upload->data());
			if ( ! $this->upload->do_upload('image')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$this->doctor_model->update_doc($id);
			$response = array('success' => "ok", 'msg' => "Doctor Successfully Entered" );    		
			echo json_encode($response);
		}
		
			
		//	print_r($this->upload->data()); 
		// $this->db->where('id',$id);
		// $data = array('name' => $_POST['name'], 'email' => $_POST['email'], 'address' => $_POST['address'], 'description' => $_POST['description'] , 'dob' => $_POST['dob'] , 'status' => $_POST['status'],'dept_id' => $_POST['dept_id'],'gender' => $_POST['gender'], 'created_on' => $_POST['created_on'], 'image' => 'image', 'phone_no' => $_POST['phone_no']);
		// $this->db->update('doctor',$data);
		
		
	}
	public function update($id)
	{
		$this->doctor_model->update($id);
		$response = array('success' => "ok", 'msg' => "Doctor Successfully Entered" );    		
			echo json_encode($response);
	}
		
			
		
	
	// public function viewupload()
	// {
	// 	$this->load->view('upload');
	// }
	public function upload()
	{
		
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('image')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			echo "success";
		}
		
		
	}
	// public function u(){
	// 	if (!empty($_FILES)) {
 //        $tempFile = $_FILES['file']['tmp_name'];
 //        $fileName = $_FILES['file']['name'];
 //        $targetPath =$_SERVER['DOCUMENT_ROOT'] . '/uploads/';
 //        $targetFile = $targetPath . $fileName ;
 //        move_uploaded_file($tempFile, $targetFile);
 //        // if you want to save in db,where here
 //        // with out model just for example
 //        // $this->load->database(); // load database
 //        // $this->db->insert('file_table',array('file_name' => $fileName));
 //        }
 //        	}
}

