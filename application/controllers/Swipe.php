<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This controller can be accessed
 * for all logged in users
 */
class Swipe extends MY_Controller {

   // protected $access = array('SuperAdmin','Admin', 'User');

	function __construct()
    {
        parent::__construct();

    }

	public function logged_in_check()
	{
		if ($this->session->userdata("logged_in")) {
			redirect("dashboard");
		}
	}
	public function index()
	{
		$this->logged_in_check();
    	$this->load->view('main/index.php');

	}




}
