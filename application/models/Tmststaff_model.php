<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tmststaff_model extends CI_Model
{

    public $table = 'tmststaff';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('tmststaff.id,nik,nama,tmstjabatan.jabatan,tmstoutlet.outlet,tmststaff.totalpoint,tmstdivisi.divisi,status');
        $this->datatables->from('tmststaff');
        $this->datatables->join('tmstjabatan', 'tmststaff.jabatan = tmstjabatan.id');
        $this->datatables->join('tmstoutlet', 'tmststaff.outlet = tmstoutlet.id');
        $this->datatables->join('tmstdivisi', 'tmststaff.divisi = tmstdivisi.id');
        //add this line for join
        //$this->datatables->join('table2', 'tmststaff.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('tmststaff/read/$1'),'Read')." | ".anchor(site_url('tmststaff/update/$1'),'Update')." | ".anchor(site_url('tmststaff/delete/$1'),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'id');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
        $this->db->or_like('nik', $q);
        $this->db->or_like('nama', $q);
        $this->db->or_like('jabatan', $q);
        $this->db->or_like('outlet', $q);
        $this->db->or_like('totalpoint', $q);
        $this->db->or_like('pass', $q);
        $this->db->or_like('role', $q);
        $this->db->or_like('pp', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
        $this->db->or_like('nik', $q);
        $this->db->or_like('nama', $q);
        $this->db->or_like('jabatan', $q);
        $this->db->or_like('outlet', $q);
        $this->db->or_like('totalpoint', $q);
        $this->db->or_like('pass', $q);
        $this->db->or_like('role', $q);
        $this->db->or_like('pp', $q);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

    function get_by_nik($nik,$password)
    {
        $this->db->where("nik", $nik);
        $this->db->where("pass", $password);
        return $this->db->get($this->table)->row();
    }

    
    function changepass($nik,$password)
    {
        $this->db->where("nik", $nik);
        $this->db->set("pass", $password);
        $this->db->update($this->table);
        //return $this->db->get($this->table)->row();
    }

}

/* End of file Tmststaff_model.php */
/* Location: ./application/models/Tmststaff_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-01-09 02:55:31 */
/* http://harviacode.com */