<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Toutletpoint extends MY_Controller {
	
	protected $access = array('SuperAdmin','Admin', 'User');
	
    function __construct()
    {
        parent::__construct();
        $this->load->model('Toutletpoint_model');
        $this->load->model('Master');
        $this->load->library('form_validation');        
	    $this->load->library('datatables');
    }

    public function index()
    {
	    $toutletpoint = $this->Toutletpoint_model->get_all();

        $data = array(
            'toutletpoint_data' => $toutletpoint
        );
		$this->load->view('header');
        $this->load->view('toutletpoint/toutletpoint_list', $data);
        $this->load->view('footer');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Toutletpoint_model->json();
    }

    public function read($id) 
    {
        $row = $this->Toutletpoint_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'outlet' => $row->outlet,
		'totalpoint' => $row->totalpoint,
		'bulan' => $row->bulan,
		'tahun' => $row->tahun,
		'aktif' => $row->aktif,
		'usedpoint' => $row->usedpoint,
		'sisapoint' => $row->sisapoint,
	    );
            
			$this->load->view('header');
            $this->load->view('toutletpoint/toutletpoint_read', $data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('toutletpoint'));
        }
    }

    public function create() 
    {
        /*
        $data = array(
            'button' => 'Create',
            'action' => site_url('toutletpoint/create_action'),
        'id' => set_value('id'),
        'outlet' => $this->Master->getoutlet(99),
        'outlet_selected' => '',
	    'totalpoint' => set_value('totalpoint'),
	    'bulan' => set_value('bulan'),
	    'tahun' => set_value('tahun'),
	    'aktif' => set_value('aktif'),
	    'usedpoint' => 0,
	    'sisapoint' => 2500,
	);

		$this->load->view('header');
		$this->load->view('toutletpoint/toutletpoint_form', $data);
        $this->load->view('footer');
        */
        $this->create_action();
    }
    
    public function create_action() 
    { 
        //$this->Master->getalloutlet();
        $outlet = $this->Master->getalloutlet();
        foreach ($outlet as $outlet_data){
            $point = $this->Master->getpointoutlet($outlet_data->id);

            $bulan = $point->bulan;
            $tahun = $point->tahun;
            $id = $point->id;

            if ($bulan <12 ){
                $bulan = $bulan + 1 ;
           //     $tahun = $point->tahun;
            }else if ($bulan==12 ){
                $bulan = 1 ; 
                $tahun = $tahun + 1 ;
            }
            

            $data = array(
                'outlet' => $outlet_data->id,
                'totalpoint' => 2500,
                'bulan' => $bulan,
                'tahun' => $tahun,
                'aktif' => 1,
                'usedpoint' => 0, //$this->input->post('usedpoint',TRUE),
                'sisapoint' => 2500 , //$this->input->post('sisapoint',TRUE),
            );

                $this->Toutletpoint_model->insert($data);
                $this->Toutletpoint_model->update($id);
                
           
        }
         $this->session->set_flashdata('message', 'Create Record Success');
        redirect(site_url('toutletpoint'));
/*
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'outlet' => $this->input->post('outlet',TRUE),
		'totalpoint' => $this->input->post('totalpoint',TRUE),
		'bulan' => $this->input->post('bulan',TRUE),
		'tahun' => $this->input->post('tahun',TRUE),
		'aktif' => $this->input->post('aktif',TRUE),
		'usedpoint' => 0, //$this->input->post('usedpoint',TRUE),
		'sisapoint' => 2500 , //$this->input->post('sisapoint',TRUE),
	    );

            $this->Toutletpoint_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('toutletpoint'));
        }*/
    }
    
    public function update($id) 
    {
        $row = $this->Toutletpoint_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('toutletpoint/update_action'),
		'id' => set_value('id', $row->id),
        'outlet' => $this->Master->getoutlet(""),
        'outlet_selected' => $this->Master->getoutlet($row->outlet),
		'totalpoint' => set_value('totalpoint', $row->totalpoint),
		'bulan' => set_value('bulan', $row->bulan),
		'tahun' => set_value('tahun', $row->tahun),
		'aktif' => set_value('aktif', $row->aktif),
		'usedpoint' => set_value('usedpoint', $row->usedpoint),
		'sisapoint' => set_value('sisapoint', $row->sisapoint),
	    );
			$this->load->view('header');
			$this->load->view('toutletpoint/toutletpoint_form', $data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('toutletpoint'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'outlet' => $this->input->post('outlet',TRUE),
		'totalpoint' => $this->input->post('totalpoint',TRUE),
		'bulan' => $this->input->post('bulan',TRUE),
		'tahun' => $this->input->post('tahun',TRUE),
		'aktif' => $this->input->post('aktif',TRUE),
		'usedpoint' => $this->input->post('usedpoint',TRUE),
		'sisapoint' => $this->input->post('sisapoint',TRUE),
	    );

            $this->Toutletpoint_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('toutletpoint'));
        }
    }
    
    public function delete($id) 
    {
     	$level = $this->session->userdata('role') ; 
	
		if ($level!='User') 
		{
			$row = $this->Toutletpoint_model->get_by_id($id);

			if ($row) {
				$this->Toutletpoint_model->delete($id);
				$this->session->set_flashdata('message', 'Delete Record Success');
				redirect(site_url('toutletpoint'));
			} else {
				$this->session->set_flashdata('message', 'Record Not Found');
				redirect(site_url('toutletpoint'));
			}
		}else{
			$this->session->set_flashdata('message', 'Access Denied');
			redirect(site_url('toutletpoint'));
			
		}
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('outlet', 'outlet', 'trim|required');
	$this->form_validation->set_rules('totalpoint', 'totalpoint', 'trim|required');
	$this->form_validation->set_rules('bulan', 'bulan', 'trim|required');
	$this->form_validation->set_rules('tahun', 'tahun', 'trim|required');
	$this->form_validation->set_rules('aktif', 'aktif', 'trim|required');
	$this->form_validation->set_rules('usedpoint', 'usedpoint', 'trim|required');
	$this->form_validation->set_rules('sisapoint', 'sisapoint', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "toutletpoint.xls";
        $judul = "toutletpoint";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Outlet");
	xlsWriteLabel($tablehead, $kolomhead++, "Totalpoint");
	xlsWriteLabel($tablehead, $kolomhead++, "Bulan");
	xlsWriteLabel($tablehead, $kolomhead++, "Tahun");
	xlsWriteLabel($tablehead, $kolomhead++, "Aktif");
	xlsWriteLabel($tablehead, $kolomhead++, "Usedpoint");
	xlsWriteLabel($tablehead, $kolomhead++, "Sisapoint");

	foreach ($this->Toutletpoint_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->outlet);
	    xlsWriteNumber($tablebody, $kolombody++, $data->totalpoint);
	    xlsWriteLabel($tablebody, $kolombody++, $data->bulan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tahun);
	    xlsWriteLabel($tablebody, $kolombody++, $data->aktif);
	    xlsWriteNumber($tablebody, $kolombody++, $data->usedpoint);
	    xlsWriteNumber($tablebody, $kolombody++, $data->sisapoint);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=toutletpoint.doc");

        $data = array(
            'toutletpoint_data' => $this->Toutletpoint_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('toutletpoint/toutletpoint_doc',$data);
    }

}

/* End of file Toutletpoint.php */
/* Location: ./application/controllers/Toutletpoint.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-24 05:32:18 */
/* http://harviacode.com */