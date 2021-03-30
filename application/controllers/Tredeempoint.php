<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tredeempoint extends MY_Controller {
	
    protected $access = array('SuperAdmin','Admin', 'User','Staff');
    //protected $access = array('Staff');
	
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tredeempoint_model');
        $this->load->model('Tmstgift_model');
        $this->load->library('form_validation');        
	    $this->load->library('datatables');
    }

    public function index()
    {
	    $tredeempoint = $this->Tredeempoint_model->get_all();

        $data = array(
            'tredeempoint_data' => $tredeempoint
        );
		$this->load->view('header');
        $this->load->view('tredeempoint/tredeempoint_list', $data);
        $this->load->view('footer');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tredeempoint_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tredeempoint_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nik' => $row->nik,
		'tglredeem' => $row->tglredeem,
		'idgift' => $row->idgift,
		'status' => $row->status,
	    );
            
			$this->load->view('header');
            $this->load->view('tredeempoint/tredeempoint_read', $data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tredeempoint'));
        }
    }

    public function create() 
    {
        
        $data = array(
            'button' => 'Create',
            'action' => site_url('tredeempoint/create_action'),
            'id' => set_value('id'),
            'nik' => $this->session->userdata('nik') ,
            'tglredeem' => date('d-m-Y'),
            'idgift' => $this->Tmstgift_model->getaktifgift(),
            'gift_selected' => '',
            'status' => 1,
        );

		$this->load->view('header');
		$this->load->view('tredeempoint/tredeempoint_form', $data);
        $this->load->view('footer');
        
    }
    
    public function create_action() 
    {
        $this->_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nik' => $this->session->userdata('nik'),
		'tglredeem' => date('Y-m-d'),
		'idgift' => $this->input->post('idgift',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Tredeempoint_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tredeempoint'));
        }
        
    }
    
    public function update($id) 
    {
        $row = $this->Tredeempoint_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tredeempoint/update_action'),
		'id' => set_value('id', $row->id),
		'nik' => set_value('nik', $row->nik),
		'tglredeem' => set_value('tglredeem', $row->tglredeem),
		'idgift' => $this->Tmstgift_model->getaktifgift(),//set_value('idgift', $row->idgift),
        'status' => set_value('status', $row->status),
        'gift_selected' => set_value('idgift', $row->idgift),
	    );
			$this->load->view('header');
			$this->load->view('tredeempoint/tredeempoint_form', $data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tredeempoint'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'nik' => $this->input->post('nik',TRUE),
		'tglredeem' => $this->input->post('tglredeem',TRUE),
		'idgift' => $this->input->post('idgift',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Tredeempoint_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tredeempoint'));
        }
    }
    
    public function delete($id) 
    {
     	$level = $this->session->userdata('role') ; 
	
		if ($level!='User') 
		{
			$row = $this->Tredeempoint_model->get_by_id($id);

			if ($row) {
				$this->Tredeempoint_model->delete($id);
				$this->session->set_flashdata('message', 'Delete Record Success');
				redirect(site_url('tredeempoint'));
			} else {
				$this->session->set_flashdata('message', 'Record Not Found');
				redirect(site_url('tredeempoint'));
			}
		}else{
			$this->session->set_flashdata('message', 'Access Denied');
			redirect(site_url('tredeempoint'));
			
		}
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nik', 'nik', 'trim|required');
	$this->form_validation->set_rules('tglredeem', 'tglredeem', 'trim|required');
	$this->form_validation->set_rules('idgift', 'idgift', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tredeempoint.xls";
        $judul = "tredeempoint";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nik");
	xlsWriteLabel($tablehead, $kolomhead++, "Tglredeem");
	xlsWriteLabel($tablehead, $kolomhead++, "Idgift");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");

	foreach ($this->Tredeempoint_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nik);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tglredeem);
	    xlsWriteNumber($tablebody, $kolombody++, $data->idgift);
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
        header("Content-Disposition: attachment;Filename=tredeempoint.doc");

        $data = array(
            'tredeempoint_data' => $this->Tredeempoint_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('tredeempoint/tredeempoint_doc',$data);
    }

}

/* End of file Tredeempoint.php */
/* Location: ./application/controllers/Tredeempoint.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-01-04 05:22:33 */
/* http://harviacode.com */