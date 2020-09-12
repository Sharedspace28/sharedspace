<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Apartments_model extends CI_Model { 
	
	function __construct()
    {
        parent::__construct();

        
        $this->load->database();
		$this->load->library('session');
    }
	

function apartments_insert()
{
    $page_data['apartment_name']  =   $this->input->post('apartment_name');
    $page_data['floor_no']   =   $this->input->post('floor_no');
    $page_data['apartment_no']      =   $this->input->post('apartment_no');
    $page_data['phase']   =   $this->input->post('phase');
    $page_data['created_at']      =   date('d-m-y');
    $page_data['admin_id']   =   $this->session->userdata('admin_id');
    $page_data['company_name']   =   $this->session->userdata('company_name');
    $page_data['project_name']   =   $this->session->userdata('project_name');

    $this->db->insert('apartments', $page_data);
}

function apartments_update($param2)
{
    $page_data['apartment_name']  =   $this->input->post('apartment_name');
    $page_data['floor_no']   =   $this->input->post('floor_no');
    $page_data['apartment_no']      =   $this->input->post('apartment_no');
    $page_data['phase']   =   $this->input->post('phase');

    $this->db->where('apartment_id', $param2);
   $this->db->update('apartments', $page_data);
}

function apartments_delete($param2)
{    
    // $page_data['status']= 1;
    // $this->db->where('lead_id', $param2);
    // $this->db->update('leads',$page_data );
    
    $this->db->where('apartment_id', $param2);
    $this->db->delete('apartments');
}

	
	
}

