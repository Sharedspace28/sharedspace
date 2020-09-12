<?php if (!defined('BASEPATH'))exit('No direct script access allowed');


class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();

		$this->load->database();
		$this->load->library('session');
        $this->load->model('newleads_model');
    }


    public function index() 
    {
        if($this->session->userdata('admin_login') !=1) redirect(base_url().'login', 'refresh');
        if($this->session->userdata('admin_login') ==1) redirect(base_url().'admin/dashboard', 'refresh');
    }

    function dashboard()
    {
        if($this->session->userdata('admin_login') !=1) redirect(base_url().'login', 'refresh');   //This line is for security if u din't login thr page will not be open
        
        $page_data['page_name']= 'dashboard';
        $page_data['page_title']=get_phrase('Admin Dashboard');

        $this->load->view('backend/index1',$page_data);
    }
public function do_upload()
{
    $config['upload_path']          = './uploads/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 100;
    $config['max_width']            = 1024;
    $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('userfile'))
    {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
    }
    else
    {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('upload_success', $data);
    }

}


    
        function new_leads($param1 = '', $param2 ='', $param3 =''){

            if($param1 == 'insert'){
                
                $this->newleads_model->new_leads_insert();
               
                $this->session->set_flashdata('flash_message', get_phrase('Data saved successfully'));
                redirect(base_url(). 'admin/new_leads', 'refresh');
            }
        
            if($param1 == 'update'){
        
                $this->newleads_model->new_leads_update($param2);
               

               
                $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
                redirect(base_url(). 'admin/new_leads', 'refresh');
               
                }
        
            if($param1 == 'delete'){
        

                $this->newleads_model->new_leads_delete($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
                redirect(base_url(). 'admin/new_leads', 'refresh');
        
                }
        
                $page_data['page_name']     = 'new_leads';
                $page_data['page_title']    = get_phrase('New Leads');
                $page_data['new_leads']  = $this->db->get('leads')->result_array();
                $this->load->view('backend/index1', $page_data);
        
            }
     
          

            public function comments($param1 = '', $param2 ='', $param3 =''){

                if($param1 == 'insert'){
                    
                    $page_data['name']      = $this->input->post('name');  
                    $page_data['comments']      = $this->input->post('comments');  
                   
                    $page_data['post_id']      = $param2; 
                    $this->db->insert('comments', $page_data);
                   
                    $this->session->set_flashdata('flash_message', get_phrase('Data saved successfully'));
                    redirect(base_url(). 'index', 'refresh');
                }

            }



            public function query($param1 = '', $param2 ='', $param3 =''){

                if($param1 == 'insert'){
                   
                    $page_data['name']      = $this->input->post('name');  
                    $page_data['email']      = $this->input->post('email');  
                    $page_data['query']      = $this->input->post('query');  
                    $this->db->insert('query', $page_data);
                   
                    $this->session->set_flashdata('flash_message', get_phrase('Data saved successfully'));
                    redirect(base_url(). 'home', 'refresh');
                }
                $page_data['page_name']     = 'query';
                $page_data['page_title']    = get_phrase('query');
                $page_data['query']  = $this->db->get('query')->result_array();
                $this->load->view('backend/index1', $page_data);

            }

            public function new_blog($param1 = '', $param2 ='', $param3 ='')
            {
                    

                    $page_data['post']  =  $this->db->get_where('post', array ('post_id' => $param2))->result_array();
                    $this->load->view('webpage/blog', $page_data);

            }




    }
