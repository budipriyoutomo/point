<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Taddpoint extends MY_Controller {

	protected $access = array('SuperAdmin','Admin', 'User');
    public $pointupdate; 
    public $nikupdate; 

    function __construct()
    {
        parent::__construct();
        $this->load->model('Taddpoint_model');
        $this->load->model('Master');
        $this->load->library('form_validation');
	      $this->load->library('datatables');
    }

    public function index()
    {
	    $taddpoint = $this->Taddpoint_model->get_all();

        $data = array(
            'taddpoint_data' => $taddpoint
        );
		$this->load->view('header');
        $this->load->view('taddpoint/taddpoint_list', $data);
        $this->load->view('footer');
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->Taddpoint_model->json();
    }

    public function read($id)
    {
        $row = $this->Taddpoint_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nik' => $row->nik,
		'tgladd' => $row->tgladd,
		'task' => $row->task,
		'point' => $row->point,
		'user' => $row->user,
	    );

			$this->load->view('header');
            $this->load->view('taddpoint/taddpoint_read', $data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('taddpoint'));
        }
    }

    public function create()
    {
        $outlet = $this->session->userdata('outlet') ;

        $data = array(
            'button' => 'Create',
            'action' => site_url('taddpoint/create_action'),
	    'id' => set_value('id'),
	    'nik' => $this->Master->getnik(""),
        'nik_selected' => '',
	    'tgladd' => date('d-m-Y'),
	    'task' => $this->Master->gettaskoutlet($outlet,""),
        'task_selected' => '',
	    'point' => set_value('point'),
	    'user' => $this->session->userdata('username'),
	);

		$this->load->view('header');
		$this->load->view('taddpoint/taddpoint_form', $data);
    $this->load->view('footer');

    }

    public function create_action()
    {
        $this->_rules();

        $outlet = $this->session->userdata('outlet') ;

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $nik = $this->input->post('nik',TRUE);
            $pointadd = $this->input->post('point',TRUE);

            $data = array(
            'nik' => $nik,
            'tgladd' => date('Y-m-d'),
            'task' => $this->input->post('task',TRUE),
            'point' => $pointadd,
            'user' => $this->session->userdata('id'),
            );

            $pointoutlet = $this->Master->getpointoutlet($outlet);
            
            if ($pointoutlet->sisapoint >= $pointadd){
                $this->Taddpoint_model->insert($data);
                $this->Master->set_point($nik,$pointadd,"add");
                $row = $this->Master->getstaff_bynik($nik);
                $this->Master->setpointoutlet($row->outlet,$pointadd);
                $this->session->set_flashdata('message', 'Create Record Success');
                redirect(site_url('taddpoint'));
            }else {
                $this->session->set_flashdata('message', 'Point Not Avalaible');
                redirect(site_url('taddpoint'));
            }
            
        }
    }


    public function update($id)
    {
        
        $row = $this->Taddpoint_model->get_by_id($id);
        $outlet = $this->session->userdata('outlet') ;
        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('taddpoint/update_action'),
		'id' => set_value('id', $row->id),
        'nik' => $this->Master->getnik(""), // set_value('nik', $row->nik),
        'nik_selected' => $this->Master->getnik($row->nik),
		'tgladd' => set_value('tgladd', $row->tgladd),
        'task' => $this->Master->gettaskoutlet($outlet,""), //set_value('task', $row->task),
        'task_selected' => $this->Master->gettaskoutlet($outlet,$row->task), //set_value('task', $row->task),
		'point' => set_value('point', $row->point),
		'user' => set_value('user', $row->user),
        );
        $pointupdate =$row->point;
        $nikupdate =$row->nik;
        //    $this->Master->set_point($row->nik,$row->point,"del");
        //    $outlet = $this->Master->getstaff_bynik($row->nik);
        //    $this->Master->setpointoutlet($outlet->outlet,$pointadd);
                
			$this->load->view('header');
			$this->load->view('taddpoint/taddpoint_form', $data);
            $this->load->view('footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('taddpoint'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        $outlet = $this->session->userdata('outlet') ;
        
        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {

            
            $pointadd = $this->input->post('point',TRUE);
            $nik = $this->input->post('nik',TRUE);
            $data = array(
                'nik' => $nik,
                'tgladd' => $this->input->post('tgladd',TRUE),
                'task' => $this->input->post('task',TRUE),
                'point' => $pointadd,
                'user' => $this->input->post('user',TRUE),
                );

            $pointoutlet = $this->Master->getpointoutlet($outlet);
                if ($pointoutlet->sisapoint >= $pointadd){
                    $this->Taddpoint_model->update($this->input->post('id', TRUE), $data);
                    $this->Master->set_point($nikupdate,$pointupdate,"del");
                    $this->Master->set_point($nik,$pointadd,"add");
                    $this->session->set_flashdata('message', 'Update Record Success');
                    redirect(site_url('taddpoint'));
                }else{
                    $this->session->set_flashdata('message', 'Point Not Avalaible');
                    redirect(site_url('taddpoint'));
                } 

            
        }
    }

    public function delete($id)
    {
     	$level = $this->session->userdata('role') ;

		if ($level!='User')
		{
			$row = $this->Taddpoint_model->get_by_id($id);

			if ($row) {
                $this->Master->set_point($row->nik,$row->point,"del");
		
				$this->Taddpoint_model->delete($id);
				$this->session->set_flashdata('message', 'Delete Record Success');
				redirect(site_url('taddpoint'));
			} else {
				$this->session->set_flashdata('message', 'Record Not Found');
				redirect(site_url('taddpoint'));
			}
		}else{
			$this->session->set_flashdata('message', 'Access Denied');
			redirect(site_url('taddpoint'));

		}
    }

    public function _rules()
    {
	$this->form_validation->set_rules('nik', 'nik', 'trim|required');
	$this->form_validation->set_rules('tgladd', 'tgladd', 'trim|required');
	$this->form_validation->set_rules('task', 'task', 'trim|required');
	$this->form_validation->set_rules('point', 'point', 'trim|required');
	$this->form_validation->set_rules('user', 'user', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "taddpoint.xls";
        $judul = "taddpoint";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Tgladd");
	xlsWriteLabel($tablehead, $kolomhead++, "Task");
	xlsWriteLabel($tablehead, $kolomhead++, "Point");
	xlsWriteLabel($tablehead, $kolomhead++, "User");

	foreach ($this->Taddpoint_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nik);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgladd);
	    xlsWriteNumber($tablebody, $kolombody++, $data->task);
	    xlsWriteNumber($tablebody, $kolombody++, $data->point);
	    xlsWriteNumber($tablebody, $kolombody++, $data->user);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=taddpoint.doc");

        $data = array(
            'taddpoint_data' => $this->Taddpoint_model->get_all(),
            'start' => 0
        );

        $this->load->view('taddpoint/taddpoint_doc',$data);
    }

}

/* End of file Taddpoint.php */
/* Location: ./application/controllers/Taddpoint.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-01-04 05:29:06 */
/* http://harviacode.com */
