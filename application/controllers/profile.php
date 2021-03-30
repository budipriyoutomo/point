<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profile extends MY_Controller {

//	protected $access = array('SuperAdmin','Admin', 'User');
	protected $access = array('Staff');

    function __construct()
    {
        parent::__construct();
        $this->load->model('Tmststaff_model');
        $this->load->model('Master');
        $this->load->library('form_validation');
	    $this->load->library('datatables');
    }

    public function index()
    {
        $id = $this->session->userdata('id');
	    $row = $this->Tmststaff_model->get_by_id($id);
        if ($row) {
            $jabatan = $this->Master->getmaster("tmstjabatan",$row->jabatan);
            $outlet = $this->Master->getmaster("tmstoutlet",$row->outlet);

            $data = array(
		'id' => $row->id,
		'nik' => $row->nik,
		'nama' => $row->nama,
		'jabatan' => $jabatan->jabatan,
		'outlet' => $outlet->outlet,
		'totalpoint' => $row->totalpoint,
		'pass' => $row->pass,
	    );

			$this->load->view('header');
            $this->load->view('tmststaff/tmststaff_read', $data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tmststaff'));
        }
    }

    public function changepass(){
        $oldpass = sha1($this->input->post('oldpass',TRUE));
        $newpass = sha1($this->input->post('new',TRUE));
        $nik = $this->input->post('nik',TRUE);
        
        $row = $this->Tmststaff_model->get_by_nik($nik,$oldpass);
        if (isset($row)){
            if(isset($newpass)){
                $this->Tmststaff_model->changepass($nik,$newpass);
                $this->session->set_flashdata('message', 'Change Password Success');
                redirect(site_url('profile'));
            }else{
                $this->session->set_flashdata('message', 'Data New Password Incorrect');
                redirect(site_url('profile'));
            }
        }else{
            $this->session->set_flashdata('message', 'Data Old Password Incorrect');
            redirect(site_url('profile'));
        }
        
    }

}