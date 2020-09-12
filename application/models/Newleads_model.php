<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Newleads_model extends CI_Model { 
	
	function __construct()
    {
        parent::__construct();

        
        $this->load->database();
		$this->load->library('session');
    }
	

function new_leads_insert()
{
    $page_data['lead_name']  =   $this->input->post('lead_name');
    $page_data['lead_phoneno']   =   $this->input->post('lead_phoneno');
    $page_data['lead_email']      =   $this->input->post('lead_email');
    $page_data['lead_query']   =   $this->input->post('lead_query');
    $page_data['lead_source']      =   $this->input->post('lead_source');
    $page_data['created_at']      =   date('d-m-y');
    $this->db->insert('leads', $page_data);
}

function new_leads_update($param2)
{
    $page_data['lead_name']  =   $this->input->post('lead_name');
    $page_data['lead_phoneno']   =   $this->input->post('lead_phoneno');
    $page_data['lead_email']      =   $this->input->post('lead_email');
    $page_data['lead_query']   =   $this->input->post('lead_query');
    $page_data['lead_source']      =   $this->input->post('lead_source');
    

    $this->db->where('lead_id', $param2);
   $this->db->update('leads', $page_data);
}

function new_leads_delete($param2)
{    
    // $page_data['status']= 1;
    // $this->db->where('lead_id', $param2);
    // $this->db->update('leads',$page_data );
    
    $this->db->where('lead_id', $param2);
    $this->db->delete('leads');
}

	
	
}

