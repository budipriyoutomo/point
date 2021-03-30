<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tmstdivisi extends MY_Controller {
	
	protected $access = array('SuperAdmin','Admin', 'User');
	
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tmstdivisi_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
	    $tmstdivisi = $this->Tmstdivisi_model->get_all();

        $data = array(
            'tmstdivisi_data' => $tmstdivisi
        );
		$this->load->view('header');
        $this->load->view('tmstdivisi/tmstdivisi_list', $data);
        $this->load->view('footer');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tmstdivisi_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tmstdivisi_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'divisi' => $row->divisi,
	    );
            
			$this->load->view('header');
            $this->load->view('tmstdivisi/tmstdivisi_read', $data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tmstdivisi'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tmstdivisi/create_action'),
	    'id' => set_value('id'),
	    'divisi' => set_value('divisi'),
	);

		$this->load->view('header');
		$this->load->view('tmstdivisi/tmstdivisi_form', $data);
        $this->load->view('footer');
        
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'divisi' => $this->input->post('divisi',TRUE),
	    );

            $this->Tmstdivisi_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tmstdivisi'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tmstdivisi_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tmstdivisi/update_action'),
		'id' => set_value('id', $row->id),
		'divisi' => set_value('divisi', $row->divisi),
	    );
			$this->load->view('header');
			$this->load->view('tmstdivisi/tmstdivisi_form', $data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tmstdivisi'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'divisi' => $this->input->post('divisi',TRUE),
	    );

            $this->Tmstdivisi_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tmstdivisi'));
        }
    }
    
    public function delete($id) 
    {
     	$level = $this->session->userdata('role') ; 
	
		if ($level!='User') 
		{
			$row = $this->Tmstdivisi_model->get_by_id($id);

			if ($row) {
				$this->Tmstdivisi_model->delete($id);
				$this->session->set_flashdata('message', 'Delete Record Success');
				redirect(site_url('tmstdivisi'));
			} else {
				$this->session->set_flashdata('message', 'Record Not Found');
				redirect(site_url('tmstdivisi'));
			}
		}else{
			$this->session->set_flashdata('message', 'Access Denied');
			redirect(site_url('tmstdivisi'));
			
		}
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('divisi', 'divisi', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tmstdivisi.xls";
        $judul = "tmstdivisi";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Divisi");

	foreach ($this->Tmstdivisi_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->divisi);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tmstdivisi.doc");

        $data = array(
            'tmstdivisi_data' => $this->Tmstdivisi_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('tmstdivisi/tmstdivisi_doc',$data);
    }

}

/* End of file Tmstdivisi.php */
/* Location: ./application/controllers/Tmstdivisi.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-12 04:13:32 */
/* http://harviacode.com */