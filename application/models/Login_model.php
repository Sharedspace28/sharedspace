<?php if (!defined('BASEPATH'))exit('No direct script access allowed');


class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();

		$this->load->database();
		$this->load->library('session');
      //  $this->load->model('login_model');
    }


    public function adminLoginFunction()
    {
        $email=html_escape($this->input->post('email'));
        $password=html_escape($this->input->post('password'));
    
        $data =array('email'=>$email ,'password'=>sha1($password));
        $query=$this->db->get_where('admin',$data);
    
        if($query->num_rows()>0)
        {
            $row=$query->row();
            $this->session->set_userdata('login_type','admin');
            $this->session->set_userdata('admin_login',1);
            $this->session->set_userdata('admin_id', $row->admin_id);
            $this->session->set_userdata('login_user_id', $row->admin_id);
            $this->session->set_userdata('name', $row->name);
            $this->session->set_userdata('company_name', $row->company_name);
            $this->session->set_userdata('project_name', $row->project_name);
            $this->session->set_userdata('sales_no', $row->sales_no);
            $this->session->set_userdata('crm_no', $row->crm_no);
            $this->session->set_userdata('channelpartner_no', $row->channelpartner_no);
        }
       elseif($query->num_rows()==0){
        $this->session->set_flashdata('error_message',get_phrase('Invalid Login Details'));
        redirect(base_url().'login','refresh');
    
       }
    }

}