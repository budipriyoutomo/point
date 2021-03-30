<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends MY_Controller {

	protected $access = array('SuperAdmin','Admin', 'User');

    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Master');
        $this->load->library('form_validation');
	      $this->load->library('datatables');
    }

    public function index()
    {
	    $user = $this->User_model->get_all();

        $data = array(
            'user_data' => $user
        );
		$this->load->view('header');
        $this->load->view('user/user_list', $data);
        $this->load->view('footer');
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->User_model->json();
    }

    public function read($id)
    {
        $row = $this->User_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'username' => $row->username,
		'password' => $row->password,
		'role' => $row->role,
		'nama' => $row->nama,
		'pp' => $row->pp,
		'outlet' => $row->outlet,
	    );

			$this->load->view('header');
            $this->load->view('user/user_read', $data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('user/create_action'),
	    'id' => set_value('id'),
	    'username' => set_value('username'),
	    'password' => set_value('password'),
	    'role' => set_value('role'),
	    'nama' => set_value('nama'),
	    'pp' => set_value('pp'),
	    'outlet' => $this->Master->getoutlet(""),
      'outlet_selected' => '',
	);

		$this->load->view('header');
		$this->load->view('user/user_form', $data);
        $this->load->view('footer');

    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'username' => $this->input->post('username',TRUE),
		'password' => sha1($this->input->post('password',TRUE)),
		'role' => $this->input->post('role',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'pp' => 'an.png',
		'outlet' => $this->input->post('outlet',TRUE),
	    );

            $this->User_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('user'));
        }
    }

    public function update($id)
    {
        $row = $this->User_model->get_by_id($id);

        if ($row) {
            //$selected = $this->Master->get_selected_by_idjabatan($row->jabatan);
            $data = array(
                'button' => 'Update',
                'action' => site_url('user/update_action'),
		'id' => set_value('id', $row->id),
		'username' => set_value('username', $row->username),
		'password' => set_value('password', $row->password),
		'role' => set_value('role', $row->role),
		'nama' => set_value('nama', $row->nama),
		'pp' => set_value('pp', $row->pp),
		//'outlet' => set_value('outlet', ),
    'outlet' => $this->Master->getoutlet($row->outlet),
    'outlet_selected' => $row->outlet,
	    );
			$this->load->view('header');
			$this->load->view('user/user_form', $data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
		'role' => $this->input->post('role',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'pp' => $this->input->post('pp',TRUE),
		'outlet' => $this->input->post('outlet',TRUE),
	    );

            $this->User_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('user'));
        }
    }

    public function delete($id)
    {
     	$level = $this->session->userdata('role') ;

		if ($level!='User')
		{
			$row = $this->User_model->get_by_id($id);

			if ($row) {
				$this->User_model->delete($id);
				$this->session->set_flashdata('message', 'Delete Record Success');
				redirect(site_url('user'));
			} else {
				$this->session->set_flashdata('message', 'Record Not Found');
				redirect(site_url('user'));
			}
		}else{
			$this->session->set_flashdata('message', 'Access Denied');
			redirect(site_url('user'));

		}
    }

    public function _rules()
    {
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('role', 'role', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('pp', 'pp', 'trim|required');
	$this->form_validation->set_rules('outlet', 'outlet', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "user.xls";
        $judul = "user";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Username");
	xlsWriteLabel($tablehead, $kolomhead++, "Password");
	xlsWriteLabel($tablehead, $kolomhead++, "Role");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama");
	xlsWriteLabel($tablehead, $kolomhead++, "Pp");
	xlsWriteLabel($tablehead, $kolomhead++, "Outlet");

	foreach ($this->User_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->username);
	    xlsWriteLabel($tablebody, $kolombody++, $data->password);
	    xlsWriteLabel($tablebody, $kolombody++, $data->role);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pp);
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
        header("Content-Disposition: attachment;Filename=user.doc");

        $data = array(
            'user_data' => $this->User_model->get_all(),
            'start' => 0
        );

        $this->load->view('user/user_doc',$data);
    }

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-01-08 08:04:22 */
/* http://harviacode.com */
