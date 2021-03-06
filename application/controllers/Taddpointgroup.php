<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Taddpointgroup extends MY_Controller {

	protected $access = array('SuperAdmin','Admin', 'User');

    function __construct()
    {
        parent::__construct();
        $this->load->model('Taddpointgroup_model');
        $this->load->model('Master');
        $this->load->library('form_validation');
	    $this->load->library('datatables');
    }

    public function index()
    {
    $outlet = $this->session->userdata('outlet') ;
	  $data = array(
      'button' => 'Create',
      'task' => $this->Master->gettaskoutlet($outlet,""),
      'task_selected' => '',
      'user' => $this->session->userdata('username'),
      'point' =>  '',
    );

		$this->load->view('header');
        $this->load->view('taddpointgroup/taddpoint_list', $data);
        $this->load->view('taddpointgroup/taddpointgroup_list');
        $this->load->view('footer');
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->Taddpointgroup_model->json();
    }


    public function generate(){

      $data = array(
        'task' => $this->Master->gettask(""),
        'task_selected' => $this->input->post('task',TRUE),
        'user' => $this->input->post('user',TRUE),
        'point' => $this->input->post('point',TRUE),
        );
/*
        $staff = $this->Master->getstaff($outlet);

        $gen = array(
            'taddpoint_data' => $staff
        );
*/
      $this->load->view('header');
      $this->load->view('taddpointgroup/taddpoint_list', $data);
      $this->load->view('taddpointgroup/taddpoint_list_gen');//,$gen);
      $this->load->view('footer');
      //
    }
    public function Ecancel(){
        redirect(site_url('Taddpointgroup'));
    }

    public function savedata(){

        $data = json_decode($this->input->post('sendData'));
        $this->db->trans_begin();
        $outlet = $this->session->userdata('outlet') ;
        
        foreach($data as $row) {
            $pointadd=$row->point;
            $filter_data = array(
                    "nik" => $row->nik,
                    "tgladd" => $row->tgladd,
                    "task" => $row->task,
                    "point" => $pointadd,
                    "user" => $row->user
            );
           //Call the save method

           $pointoutlet = $this->Master->getpointoutlet($outlet);
            
           if ($pointoutlet->sisapoint >= $pointadd){
               
               $this->Taddpointgroup_model->insert($filter_data);
               $this->Master->set_point($row->nik,$row->point,"add");
               $output = $this->Master->getstaff_bynik($row->nik);
               $this->Master->setpointoutlet($output->outlet,$row->point);
               
           }else {
               break;
               $this->session->set_flashdata('message', 'Point Not Avalaible');

               redirect(site_url('taddpoint'));

           }

           /*
           $this->Taddpointgroup_model->insert($filter_data);
           $this->Master->set_point($row->nik,$row->point,"add");
           $output = $this->Master->getstaff_bynik($row->nik);
           $this->Master->setpointoutlet($output->outlet,$row->point);
           */
        }
    
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            echo json_encode("Failed to Save Data");
        } else {
            $this->db->trans_commit();
            echo json_encode("Save Data Success!");
            
            //$this->session->set_flashdata('message', 'Create Record Success');
            //redirect(site_url('Taddpointgroup'));
        }

        /*
        header('Content-Type: application/json');
        if(isset($_POST['myData'])){
            $obj =  $_POST['myData'];            
            //$obj =json_decode($obj);
            
            foreach($obj as $row) {
                $data = array(
                    "nik" => $row->nik,
                    "tgladd" => $row->tgladd,
                    "task" => $row->task,
                    "point" => $row->point,
                    "user" => $row->user
                );
               
               $this->Taddpointgroup_model->insert($data);
            }
          
        }*/

    }

}

/* End of file Taddpoint.php */
/* Location: ./application/controllers/Taddpoint.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-01-04 05:29:06 */
/* http://harviacode.com */
