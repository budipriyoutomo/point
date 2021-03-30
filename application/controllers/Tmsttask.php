<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tmsttask extends MY_Controller {
	
	protected $access = array('SuperAdmin','Admin', 'User');
	
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tmsttask_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
	    $tmsttask = $this->Tmsttask_model->get_all();

        $data = array(
            'tmsttask_data' => $tmsttask
        );
		$this->load->view('header');
        $this->load->view('tmsttask/tmsttask_list', $data);
        $this->load->view('footer');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tmsttask_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tmsttask_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'taskname' => $row->taskname,
		'point' => $row->point,
		'status' => $row->status,
	    );
            
			$this->load->view('header');
            $this->load->view('tmsttask/tmsttask_read', $data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tmsttask'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tmsttask/create_action'),
	    'id' => set_value('id'),
	    'taskname' => set_value('taskname'),
	    'point' => set_value('point'),
	    'status' => set_value('status'),
	);

		$this->load->view('header');
		$this->load->view('tmsttask/tmsttask_form', $data);
        $this->load->view('footer');
        
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'taskname' => $this->input->post('taskname',TRUE),
		'point' => $this->input->post('point',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Tmsttask_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tmsttask'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tmsttask_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tmsttask/update_action'),
		'id' => set_value('id', $row->id),
		'taskname' => set_value('taskname', $row->taskname),
		'point' => set_value('point', $row->point),
		'status' => set_value('status', $row->status),
	    );
			$this->load->view('header');
			$this->load->view('tmsttask/tmsttask_form', $data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tmsttask'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'taskname' => $this->input->post('taskname',TRUE),
		'point' => $this->input->post('point',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Tmsttask_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tmsttask'));
        }
    }
    
    public function delete($id) 
    {
     	$level = $this->session->userdata('role') ; 
	
		if ($level!='User') 
		{
			$row = $this->Tmsttask_model->get_by_id($id);

			if ($row) {
				$this->Tmsttask_model->delete($id);
				$this->session->set_flashdata('message', 'Delete Record Success');
				redirect(site_url('tmsttask'));
			} else {
				$this->session->set_flashdata('message', 'Record Not Found');
				redirect(site_url('tmsttask'));
			}
		}else{
			$this->session->set_flashdata('message', 'Access Denied');
			redirect(site_url('tmsttask'));
			
		}
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('taskname', 'taskname', 'trim|required');
	$this->form_validation->set_rules('point', 'point', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tmsttask.xls";
        $judul = "tmsttask";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Taskname");
	xlsWriteLabel($tablehead, $kolomhead++, "Point");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");

	foreach ($this->Tmsttask_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->taskname);
	    xlsWriteNumber($tablebody, $kolombody++, $data->point);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tmsttask.doc");

        $data = array(
            'tmsttask_data' => $this->Tmsttask_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('tmsttask/tmsttask_doc',$data);
    }

}

/* End of file Tmsttask.php */
/* Location: ./application/controllers/Tmsttask.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-01-04 05:29:15 */
/* http://harviacode.com */