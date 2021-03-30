<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ttasklist extends MY_Controller {
	
	protected $access = array('SuperAdmin','Admin', 'User');
	
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ttasklist_model');
        $this->load->model('Master');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
	    $ttasklist = $this->Ttasklist_model->get_all();

        $data = array(
            'ttasklist_data' => $ttasklist
        );
		$this->load->view('header');
        $this->load->view('ttasklist/ttasklist_list', $data);
        $this->load->view('footer');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Ttasklist_model->json();
    }

    public function read($id) 
    {
        $row = $this->Ttasklist_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'task' => $row->task,
		'outlet' => $row->outlet,
		'aktifdari' => $row->aktifdari,
		'aktifsampai' => $row->aktifsampai,
	    );
            
			$this->load->view('header');
            $this->load->view('ttasklist/ttasklist_read', $data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ttasklist'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('ttasklist/create_action'),
	    'id' => set_value('id'),
	    'task' => $this->Master->gettask(""),
        'outlet' => $this->Master->getoutlet(""),
        'outlet_selected' => '',
        'task_selected' => '',
	    'aktifdari' => set_value('aktifdari'),
	    'aktifsampai' => set_value('aktifsampai'),
	);

		$this->load->view('header');
		$this->load->view('ttasklist/ttasklist_form', $data);
        $this->load->view('footer');
        
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'task' => $this->input->post('task',TRUE),
		'outlet' => $this->input->post('outlet',TRUE),
		'aktifdari' => $this->input->post('aktifdari',TRUE),
		'aktifsampai' => $this->input->post('aktifsampai',TRUE),
	    );

            $this->Ttasklist_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('ttasklist'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Ttasklist_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('ttasklist/update_action'),
		'id' => set_value('id', $row->id),
		'task' => set_value('task', $row->task),
		'outlet' => set_value('outlet', $row->outlet),
		'aktifdari' => set_value('aktifdari', $row->aktifdari),
		'aktifsampai' => set_value('aktifsampai', $row->aktifsampai),
	    );
			$this->load->view('header');
			$this->load->view('ttasklist/ttasklist_form', $data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ttasklist'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'task' => $this->input->post('task',TRUE),
		'outlet' => $this->input->post('outlet',TRUE),
		'aktifdari' => $this->input->post('aktifdari',TRUE),
		'aktifsampai' => $this->input->post('aktifsampai',TRUE),
	    );

            $this->Ttasklist_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('ttasklist'));
        }
    }
    
    public function delete($id) 
    {
     	$level = $this->session->userdata('role') ; 
	
		if ($level!='User') 
		{
			$row = $this->Ttasklist_model->get_by_id($id);

			if ($row) {
				$this->Ttasklist_model->delete($id);
				$this->session->set_flashdata('message', 'Delete Record Success');
				redirect(site_url('ttasklist'));
			} else {
				$this->session->set_flashdata('message', 'Record Not Found');
				redirect(site_url('ttasklist'));
			}
		}else{
			$this->session->set_flashdata('message', 'Access Denied');
			redirect(site_url('ttasklist'));
			
		}
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('task', 'task', 'trim|required');
	$this->form_validation->set_rules('outlet', 'outlet', 'trim|required');
	$this->form_validation->set_rules('aktifdari', 'aktifdari', 'trim|required');
	$this->form_validation->set_rules('aktifsampai', 'aktifsampai', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "ttasklist.xls";
        $judul = "ttasklist";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Task");
	xlsWriteLabel($tablehead, $kolomhead++, "Outlet");
	xlsWriteLabel($tablehead, $kolomhead++, "Aktifdari");
	xlsWriteLabel($tablehead, $kolomhead++, "Aktifsampai");

	foreach ($this->Ttasklist_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->task);
	    xlsWriteLabel($tablebody, $kolombody++, $data->outlet);
	    xlsWriteLabel($tablebody, $kolombody++, $data->aktifdari);
	    xlsWriteLabel($tablebody, $kolombody++, $data->aktifsampai);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=ttasklist.doc");

        $data = array(
            'ttasklist_data' => $this->Ttasklist_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('ttasklist/ttasklist_doc',$data);
    }

}

/* End of file Ttasklist.php */
/* Location: ./application/controllers/Ttasklist.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-23 09:56:28 */
/* http://harviacode.com */