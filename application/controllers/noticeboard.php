<?php 

/**
* 
*/
class Noticeboard extends CI_Controller
{

	public function __construct()
	{
	    parent::__construct();
        $this->load->model('noticeboard_model');
    }
	
	public function index()
	{
		$this->load->view('add_noticeboard');
	}
	public function manage()
	{
		$data['note'] = $this->noticeboard_model->get_noticeboard();
		$this->load->view('manage_noticeboard',$data);
	}

	public function add_noticeboard()
	{
		$this->noticeboard_model->insert_noticeboard();
		$response = array('success' => "ok", 'msg' => "noticeboard Successfully Entered" );	    		
		echo json_encode($response);

	}
		public function delete($id)
	{
		$this->noticeboard_model->noticeboard_delete($id);
	}

	public function get_noticeboard($id)
	{
		$noticeboard = $this->noticeboard_model->get_note($id);
		$data = array(
				'title' => $noticeboard[0]->title,
				'description' => $noticeboard[0]->description,
				'status' => $noticeboard[0]->status,
				'created_on' => $noticeboard[0]->created_on,
				'start_date' => $noticeboard[0]->start_date,
				'end_date' => $noticeboard[0]->end_date
				);

		echo json_encode($data);
	}
	public function update_noticeboard($id)
	{
		$check = $this->noticeboard_model->update_note($id);
		if($check)
		{
			$notification = array('success' => "ok", 'message' => "Noticeboard Data Successfully Updated");
		}
		else
		{
			$notification = array('error' => "ok", 'message' => "There is an error! please Try Again");
		}
		echo json_encode($notification);
	}
}


?>