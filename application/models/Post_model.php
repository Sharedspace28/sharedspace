<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Post_model extends CI_Model { 
	
	function __construct()
    {
        parent::__construct();

        
        $this->load->database();
		$this->load->library('session');
    }
	

function post_insert()
{
    $page_data['post_title']  =   $this->input->post('post_title');
    $page_data['post_data']   =   $this->input->post('post_data');
    $page_data['recent_post']      =   $this->input->post('recent_post');
    $page_data['popular_post']   =   $this->input->post('popular_post');
    $page_data['post_date']      =   date('d-m-y');
    $this->db->insert('post', $page_data);
}

function post_update($param2)
{
    $page_data['post_title']  =   $this->input->post('post_title');
    $page_data['post_data']   =   $this->input->post('post_data');
    $page_data['recent_post']      =   $this->input->post('recent_post');
    $page_data['popular_post']   =   $this->input->post('popular_post');
    

    $this->db->where('post_id', $param2);
   $this->db->update('post', $page_data);
}

function post_delete($param2)
{    
    $page_data['isDeleted']= 1;
    $this->db->where('post_id', $param2);
    $this->db->update('post',$page_data );
    
    // $this->db->where('lead_id', $param2);
    // $this->db->delete('leads');
}

	
	
}

