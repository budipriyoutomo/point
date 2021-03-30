<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tmstgift extends MY_Controller {
	
	protected $access = array('SuperAdmin','Admin', 'User','Staff');
	
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tmstgift_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
	    $tmstgift = $this->Tmstgift_model->get_all();

        $data = array(
            'tmstgift_data' => $tmstgift
        );
		$this->load->view('header');
        $this->load->view('tmstgift/tmstgift_list', $data);
        $this->load->view('footer');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tmstgift_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tmstgift_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'namagift' => $row->namagift,
		'point' => $row->point,
		'harga' => $row->harga,
		'productimage' => $row->productimage,
		'status' => $row->status,
	    );
            
			$this->load->view('header');
            $this->load->view('tmstgift/tmstgift_read', $data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tmstgift'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tmstgift/create_action'),
	    'id' => set_value('id'),
	    'namagift' => set_value('namagift'),
	    'point' => set_value('point'),
	    'harga' => set_value('harga'),
	    'productimage' => set_value('productimage'),
	    'status' => set_value('status'),
	);

		$this->load->view('header');
		$this->load->view('tmstgift/tmstgift_form', $data);
        $this->load->view('footer');
        
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'namagift' => $this->input->post('namagift',TRUE),
		'point' => $this->input->post('point',TRUE),
		'harga' => $this->input->post('harga',TRUE),
		'productimage' => $this->input->post('productimage',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Tmstgift_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tmstgift'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tmstgift_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tmstgift/update_action'),
		'id' => set_value('id', $row->id),
		'namagift' => set_value('namagift', $row->namagift),
		'point' => set_value('point', $row->point),
		'harga' => set_value('harga', $row->harga),
		'productimage' => set_value('productimage', $row->productimage),
		'status' => set_value('status', $row->status),
	    );
			$this->load->view('header');
			$this->load->view('tmstgift/tmstgift_form', $data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tmstgift'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'namagift' => $this->input->post('namagift',TRUE),
		'point' => $this->input->post('point',TRUE),
		'harga' => $this->input->post('harga',TRUE),
		'productimage' => $this->input->post('productimage',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Tmstgift_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tmstgift'));
        }
    }
    
    public function delete($id) 
    {
     	$level = $this->session->userdata('role') ; 
	
		if ($level!='User') 
		{
			$row = $this->Tmstgift_model->get_by_id($id);

			if ($row) {
				$this->Tmstgift_model->delete($id);
				$this->session->set_flashdata('message', 'Delete Record Success');
				redirect(site_url('tmstgift'));
			} else {
				$this->session->set_flashdata('message', 'Record Not Found');
				redirect(site_url('tmstgift'));
			}
		}else{
			$this->session->set_flashdata('message', 'Access Denied');
			redirect(site_url('tmstgift'));
			
		}
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('namagift', 'namagift', 'trim|required');
	$this->form_validation->set_rules('point', 'point', 'trim|required');
	$this->form_validation->set_rules('harga', 'harga', 'trim|required|numeric');
	$this->form_validation->set_rules('productimage', 'productimage', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tmstgift.xls";
        $judul = "tmstgift";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Namagift");
	xlsWriteLabel($tablehead, $kolomhead++, "Point");
	xlsWriteLabel($tablehead, $kolomhead++, "Harga");
	xlsWriteLabel($tablehead, $kolomhead++, "Productimage");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");

	foreach ($this->Tmstgift_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->namagift);
	    xlsWriteNumber($tablebody, $kolombody++, $data->point);
	    xlsWriteNumber($tablebody, $kolombody++, $data->harga);
	    xlsWriteLabel($tablebody, $kolombody++, $data->productimage);
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
        header("Content-Disposition: attachment;Filename=tmstgift.doc");

        $data = array(
            'tmstgift_data' => $this->Tmstgift_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('tmstgift/tmstgift_doc',$data);
    }

}

/* End of file Tmstgift.php */
/* Location: ./application/controllers/Tmstgift.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-02-15 03:50:43 */
/* http://harviacode.com */