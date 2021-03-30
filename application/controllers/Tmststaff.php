<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tmststaff extends MY_Controller {

	protected $access = array('SuperAdmin','Admin', 'User');

    function __construct()
    {
        parent::__construct();
        $this->load->model('Tmststaff_model');
        $this->load->model('Master');
        $this->load->library('form_validation');
	    $this->load->library('datatables');
    }

    public function index()
    {
	    $tmststaff = $this->Tmststaff_model->get_all();

        $data = array(
            'tmststaff_data' => $tmststaff
        );
		$this->load->view('header');
        $this->load->view('tmststaff/tmststaff_list', $data);
        $this->load->view('footer');
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->Tmststaff_model->json();
    }

    public function read($id)
    {
        $row = $this->Tmststaff_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nik' => $row->nik,
		'nama' => $row->nama,
		'jabatan' => $row->jabatan,
		'outlet' => $row->outlet,
		'totalpoint' => $row->totalpoint,
        'pass' => $row->pass,
        'role' => $row->role,
        'pp' => $row->pp,
	    );

			$this->load->view('header');
            $this->load->view('tmststaff/tmststaff_read', $data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tmststaff'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tmststaff/create_action'),
	    'id' => set_value('id'),
	    'nik' => set_value('nik'),
	    'nama' => set_value('nama'),
	    'jabatan' => $this->Master->getjabatan(""),
        'outlet' => $this->Master->getoutlet(""),
        'divisi' => $this->Master->getdivisi(""),
        'jabatan_selected' =>'',
        'outlet_selected' => '',
        'divisi_selected' => '',
        'email' => set_value('email'),
        'status' => set_value('status'),
	    'totalpoint' => set_value('totalpoint'),
        'pass' => set_value('pass'),
        'role' => set_value('role'),
        'pp' => set_value('pp'),
	);

		$this->load->view('header');
		$this->load->view('tmststaff/tmststaff_form', $data);
        $this->load->view('footer');

    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nik' => $this->input->post('nik',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'jabatan' => $this->input->post('jabatan',TRUE),
        'outlet' => $this->input->post('outlet',TRUE),
        'divisi' => $this->input->post('divisi',TRUE),
        'email' => $this->input->post('email',TRUE),
        'status' => $this->input->post('status',TRUE),
		'totalpoint' => $this->input->post('totalpoint',TRUE),
        'pass' => $this->input->post('pass',TRUE),
        'role' => $this->input->post('role',TRUE),
        'pp' => $this->input->post('pp',TRUE),
	    );

            $this->Tmststaff_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tmststaff'));
        }
    }

    public function update($id)
    {
        $row = $this->Tmststaff_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tmststaff/update_action'),
		'id' => set_value('id', $row->id),
		'nik' => set_value('nik', $row->nik),
		'nama' => set_value('nama', $row->nama),
		'jabatan' => set_value('jabatan', $row->jabatan),
        'outlet' => set_value('outlet', $row->outlet),
        'divisi' => set_value('divisi', $row->divisi),
        'email' => set_value('email', $row->email),
        'status' => set_value('status', $row->status),
		'totalpoint' => set_value('totalpoint', $row->totalpoint),
        'pass' => set_value('pass', $row->pass),
        'role' => set_value('rolw', $row->role),
        'pp' => set_value('pp', $row->pp),
	    );
			$this->load->view('header');
			$this->load->view('tmststaff/tmststaff_form', $data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tmststaff'));
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
		'nama' => $this->input->post('nama',TRUE),
		'jabatan' => $this->input->post('jabatan',TRUE),
        'outlet' => $this->input->post('outlet',TRUE),
        'divisi' => $this->input->post('divisi',TRUE),
        'email' => $this->input->post('email',TRUE),
        'status' => $this->input->post('status',TRUE),
		'totalpoint' => $this->input->post('totalpoint',TRUE),
        'pass' => $this->input->post('pass',TRUE),
        'role' => $this->input->post('role',TRUE),
        'pp' => $this->input->post('pp',TRUE),
	    );

            $this->Tmststaff_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tmststaff'));
        }
    }

    public function delete($id)
    {
     	$level = $this->session->userdata('role') ;

		if ($level!='User')
		{
			$row = $this->Tmststaff_model->get_by_id($id);

			if ($row) {
				$this->Tmststaff_model->delete($id);
				$this->session->set_flashdata('message', 'Delete Record Success');
				redirect(site_url('tmststaff'));
			} else {
				$this->session->set_flashdata('message', 'Record Not Found');
				redirect(site_url('tmststaff'));
			}
		}else{
			$this->session->set_flashdata('message', 'Access Denied');
			redirect(site_url('tmststaff'));

		}
    }

    public function _rules()
    {
	$this->form_validation->set_rules('nik', 'nik', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
    $this->form_validation->set_rules('outlet', 'outlet', 'trim|required');
    $this->form_validation->set_rules('divisi', 'divisi', 'trim|required');
    $this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('totalpoint', 'totalpoint', 'trim|required');
    $this->form_validation->set_rules('pass', 'pass', 'trim|required');
    $this->form_validation->set_rules('role', 'role', 'trim|required');
    $this->form_validation->set_rules('pp', 'pp', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tmststaff.xls";
        $judul = "tmststaff";
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
        xlsWriteLabel($tablehead, $kolomhead++, "Nama");
        xlsWriteLabel($tablehead, $kolomhead++, "Jabatan");
        xlsWriteLabel($tablehead, $kolomhead++, "Outlet");
        xlsWriteLabel($tablehead, $kolomhead++, "Totalpoint");
        xlsWriteLabel($tablehead, $kolomhead++, "Pass");
        xlsWriteLabel($tablehead, $kolomhead++, "Role");
        xlsWriteLabel($tablehead, $kolomhead++, "PP");

	foreach ($this->Tmststaff_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
            xlsWriteLabel($tablebody, $kolombody++, $data->nik);
            xlsWriteLabel($tablebody, $kolombody++, $data->nama);
            xlsWriteLabel($tablebody, $kolombody++, $data->jabatan);
            xlsWriteLabel($tablebody, $kolombody++, $data->outlet);
            xlsWriteNumber($tablebody, $kolombody++, $data->totalpoint);
            xlsWriteLabel($tablebody, $kolombody++, $data->pass);
            xlsWriteLabel($tablebody, $kolombody++, $data->role);
            xlsWriteLabel($tablebody, $kolombody++, $data->pp);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tmststaff.doc");

        $data = array(
            'tmststaff_data' => $this->Tmststaff_model->get_all(),
            'start' => 0
        );

        $this->load->view('tmststaff/tmststaff_doc',$data);
    }

}

/* End of file Tmststaff.php */
/* Location: ./application/controllers/Tmststaff.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-01-09 02:55:31 */
/* http://harviacode.com */
