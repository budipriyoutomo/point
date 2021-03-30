<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tmstoutlet extends MY_Controller {
	
	protected $access = array('SuperAdmin','Admin', 'User');
	
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tmstoutlet_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
	    $tmstoutlet = $this->Tmstoutlet_model->get_all();

        $data = array(
            'tmstoutlet_data' => $tmstoutlet
        );
		$this->load->view('header');
        $this->load->view('tmstoutlet/tmstoutlet_list', $data);
        $this->load->view('footer');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tmstoutlet_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tmstoutlet_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'outlet' => $row->outlet,
	    );
            
			$this->load->view('header');
            $this->load->view('tmstoutlet/tmstoutlet_read', $data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tmstoutlet'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tmstoutlet/create_action'),
	    'id' => set_value('id'),
	    'outlet' => set_value('outlet'),
	);

		$this->load->view('header');
		$this->load->view('tmstoutlet/tmstoutlet_form', $data);
        $this->load->view('footer');
        
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'outlet' => $this->input->post('outlet',TRUE),
	    );

            $this->Tmstoutlet_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tmstoutlet'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tmstoutlet_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tmstoutlet/update_action'),
		'id' => set_value('id', $row->id),
		'outlet' => set_value('outlet', $row->outlet),
	    );
			$this->load->view('header');
			$this->load->view('tmstoutlet/tmstoutlet_form', $data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tmstoutlet'));
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
	    );

            $this->Tmstoutlet_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tmstoutlet'));
        }
    }
    
    public function delete($id) 
    {
     	$level = $this->session->userdata('role') ; 
	
		if ($level!='User') 
		{
			$row = $this->Tmstoutlet_model->get_by_id($id);

			if ($row) {
				$this->Tmstoutlet_model->delete($id);
				$this->session->set_flashdata('message', 'Delete Record Success');
				redirect(site_url('tmstoutlet'));
			} else {
				$this->session->set_flashdata('message', 'Record Not Found');
				redirect(site_url('tmstoutlet'));
			}
		}else{
			$this->session->set_flashdata('message', 'Access Denied');
			redirect(site_url('tmstoutlet'));
			
		}
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('outlet', 'outlet', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tmstoutlet.xls";
        $judul = "tmstoutlet";
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

	foreach ($this->Tmstoutlet_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->outlet);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tmstoutlet.doc");

        $data = array(
            'tmstoutlet_data' => $this->Tmstoutlet_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('tmstoutlet/tmstoutlet_doc',$data);
    }

}

/* End of file Tmstoutlet.php */
/* Location: ./application/controllers/Tmstoutlet.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-30 04:48:41 */
/* http://harviacode.com */