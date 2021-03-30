<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This controller can be accessed
 * for all logged in users
 */
class Dashboard extends MY_Controller {

    protected $access = array('SuperAdmin','Admin', 'User','Staff');

	function __construct()
    {
		parent::__construct();
		$this->load->model('Tmstgift_model');
		$this->load->model('Tmsttask_model');
		$this->load->model('Tmststaff_model');
		$this->load->model('Master');
		
    }

	public function index()
	{
		if ($this->session->userdata('role')== 'Staff'){
			$id = $this->session->userdata('id');
			
				$data = array(
					'gift_data' => $this->Tmstgift_model->getaktifgift(),
					'task_data' => $this->Tmsttask_model->getaktiftask(),
					'profile_data' => $this->Tmststaff_model->get_by_id($id)
				);
		}else if($this->session->userdata('role')== 'User'){
			$outlet = $this->session->userdata('outlet');
			
			$data = array(
				'point_data' => $this->Master->getpointoutlet($outlet)
			);
		} else {
			$data = 1;
		}

    $this->load->view('header');
		$this->load->view('index',$data);
		$this->load->view('footer');

	}




}
