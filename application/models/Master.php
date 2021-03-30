<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Master extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function getuser(){
      return $this->db->get('user')->result();
    }
    
    function getmaster($table,$id){
      $this->db->where('id',$id);
      return $this->db->get($table)->row();
    }

    function getoutlet($outlet){
      if ($outlet==99){
        $this->db->where('id <>',$outlet);
      }
      return $this->db->get('tmstoutlet')->result();
    }

    function getalloutlet(){
      $this->db->where('id <>',99);
      return $this->db->get('tmstoutlet')->result();
    }


    function getjabatan(){
      return $this->db->get('tmstjabatan')->result();
    }

    function getdivisi(){
      return $this->db->get('tmstdivisi')->result();
    }

    function getnik($id){
      $outlet = $this->session->userdata('outlet');
      if ($outlet!=99){
        $this->db->where('outlet',$outlet);
      }
      $this->db->where('status','Aktif');

      if ($id!=""){
        $this->db->where('id',$id);
      }

      return $this->db->get('tmststaff')->result();
    }

    function gettask($id){
      
      if ($id!=""){
        $this->db->where('id',$id);
      }
      $this->db->where('status',1);
      return $this->db->get('tmsttask')->result();
    }

    function gettaskoutlet($outlet,$id){

      $this->db->select('tmsttask.id,taskname,point,tmstoutlet.outlet');
      $this->db->from('ttasklist');
      $this->db->join('tmstoutlet', 'tmstoutlet.id = ttasklist.outlet');
      $this->db->join('tmsttask', 'tmsttask.id = ttasklist.task');
      if ($outlet!=99){
        $this->db->where('tmstoutlet.id',$outlet);
      }
      if ($id!=""){
        $this->db->where('tmsttask.id',$id);
      }
      return $this->db->get()->result();

    }

    function getstaff($outlet){
      if($outlet<'99'){
        $this->db->where('outlet',$outlet);
      }
      return $this->db->get('tmststaff')->result();
    }

    function getstaff_bynik($nik){
      $this->db->where('nik',$nik);
      return $this->db->get('tmststaff')->row();
    }
    
    function getpoint($task){
      $this->db->where('id',$task);
      return $this->db->get('tmsttask')->row();
    }

    function getpointoutlet($outlet){
      $this->db->where('outlet',$outlet);
      $this->db->where('aktif',1);
      return $this->db->get('toutletpoint')->row();
    }

    function setpointstaff($nik,$data){

        $this->db->set('totalpoint', $data);
        $this->db->where('nik', $nik);
        $this->db->update('tmststaff'); 

    }
    
    function setpointoutlet($outlet,$point){

      $row = $this->getpointoutlet($outlet);
      $totalpoint =  $row->totalpoint - $point ;
      $usedpoint = $row->usedpoint + $point;
      $sisapoint = $row->sisapoint - $point ;
    
      $this->db->set('usedpoint', $usedpoint);
      $this->db->set('sisapoint', $sisapoint);
      $this->db->where('outlet', $outlet);
      $this->db->where('aktif',1);
      $this->db->update('toutletpoint'); 

    }

    public function set_point($nik,$pointadd,$action){
        
      $row = $this->Master->getstaff_bynik($nik);
      $totalpoint = $row->totalpoint;
      if ($action=="add"){
          $totalpoint = $totalpoint + $pointadd;
      }elseif ($action=="del"){
          $totalpoint = $totalpoint - $pointadd;
      }
      
      $this->setpointstaff($nik,$totalpoint);

  }
}