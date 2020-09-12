<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Staffsales_model extends CI_Model { 
	
	function __construct()
    {
        parent::__construct();

        
        $this->load->database();
		$this->load->library('session');
    }
	

function staff_sales_insert()
{
    $page_data['name']  =   $this->input->post('name');
    $page_data['email']   =   $this->input->post('email');
    $page_data['phoneno']      =   $this->input->post('phoneno');
    $page_data['password']   =   $this->input->post('password');
    $page_data['created_at']      =   date('d-m-y');
    $page_data['admin_id'] = $this->session->userdata('admin_id');      
    $page_data['company_name'] = $this->session->userdata('company_name');      
    $page_data['project_name'] = $this->session->userdata('project_name');      
    $this->db->insert('staff_sales', $page_data);
}

function staff_sales_update($param2)
{
  
    $page_data['name']  =   $this->input->post('name');
    $page_data['email']   =   $this->input->post('email');
    $page_data['phoneno']      =   $this->input->post('phoneno');
    $page_data['password']   =   $this->input->post('password');

    $this->db->where('sales_id', $param2);
   $this->db->update('staff_sales', $page_data);
}

function staff_sales_delete($param2)
{    
    // $page_data['status']= 1;
    // $this->db->where('lead_id', $param2);
    // $this->db->update('leads',$page_data );
    
    $this->db->where('sales_id', $param2);
    $this->db->delete('staff_sales');
}

	
	
}

