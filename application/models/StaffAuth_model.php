<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class StaffAuth_model extends CI_Model {

	private $table = "tmststaff";
	private $_data = array();

	public function validate()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->db->where("nik", $username);
		$query = $this->db->get($this->table);

		if ($query->num_rows()) 
		{
			// found row by username	
			$row = $query->row_array();

			// now check for the password
			if ($row['pass'] == sha1($password)) 
			{
				// we not need password to store in session
				unset($row['pass']);
				$this->_data = $row;
				return "ERR_NONE";
			}

			// password not match
			return "ERR_INVALID_PASSWORD";
			//return "Password";
		}
		else {
			// not found
			return "ERR_INVALID_USERNAME";
			//return "Username";
		}
	}

	public function get_data()
	{
		return $this->_data;
	}
	
	public function get_role($username){

		return 4;
	}
}