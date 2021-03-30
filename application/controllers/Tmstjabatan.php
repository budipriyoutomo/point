<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tmstjabatan extends MY_Controller {
	
	protected $access = array('SuperAdmin','Admin', 'User');
	
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tmstjabatan_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
	    $tmstjabatan = $this->Tmstjabatan_model->get_all();

        $data = array(
            'tmstjabatan_data' => $tmstjabatan
        );
		$this->load->view('header');
        $this->load->view('tmstjabatan/tmstjabatan_list', $data);
        $this->load->view('footer');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tmstjabatan_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tmstjabatan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'jabatan' => $row->jabatan,
	    );
            
			$this->load->view('header');
            $this->load->view('tmstjabatan/tmstjabatan_read', $data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tmstjabatan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tmstjabatan/create_action'),
	    'id' => set_value('id'),
	    'jabatan' => set_value('jabatan'),
	);

		$this->load->view('header');
		$this->load->view('tmstjabatan/tmstjabatan_form', $data);
        $this->load->view('footer');
        
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'jabatan' => $this->input->post('jabatan',TRUE),
	    );

            $this->Tmstjabatan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tmstjabatan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tmstjabatan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tmstjabatan/update_action'),
		'id' => set_value('id', $row->id),
		'jabatan' => set_value('jabatan', $row->jabatan),
	    );
			$this->load->view('header');
			$this->load->view('tmstjabatan/tmstjabatan_form', $data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tmstjabatan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'jabatan' => $this->input->post('jabatan',TRUE),
	    );

            $this->Tmstjabatan_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tmstjabatan'));
        }
    }
    
    public function delete($id) 
    {
     	$level = $this->session->userdata('role') ; 
	
		if ($level!='User') 
		{
			$row = $this->Tmstjabatan_model->get_by_id($id);

			if ($row) {
				$this->Tmstjabatan_model->delete($id);
				$this->session->set_flashdata('message', 'Delete Record Success');
				redirect(site_url('tmstjabatan'));
			} else {
				$this->session->set_flashdata('message', 'Record Not Found');
				redirect(site_url('tmstjabatan'));
			}
		}else{
			$this->session->set_flashdata('message', 'Access Denied');
			redirect(site_url('tmstjabatan'));
			
		}
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tmstjabatan.xls";
        $judul = "tmstjabatan";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Jabatan");

	foreach ($this->Tmstjabatan_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jabatan);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tmstjabatan.doc");

        $data = array(
            'tmstjabatan_data' => $this->Tmstjabatan_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('tmstjabatan/tmstjabatan_doc',$data);
    }

}

/* End of file Tmstjabatan.php */
/* Location: ./application/controllers/Tmstjabatan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-01-04 05:22:32 */
/* http://harviacode.com */