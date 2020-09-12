<?php if (!defined('BASEPATH'))exit('No direct script access allowed');


class Comment extends CI_Controller {

    function __construct() {
        parent::__construct();

		$this->load->database();
		$this->load->library('session');
      
    }

    public function education($param1 = '', $param2 ='', $param3 =''){

        if($param1 == 'insert'){
           
            $type='education';
            $date=date("Y-m-d") ;
            $page_data['name']      = $this->input->post('name');  
            $page_data['comments']      = $this->input->post('comment');  
            $page_data['post_id'] =1;
            $page_data['post_type']=$type;
            $page_data['created_at']=   $date;
            $this->db->insert('comments', $page_data);
           
            $this->session->set_flashdata('flash_message', get_phrase('Data saved successfully'));
            redirect(base_url(). 'education', 'refresh');
        }
      
    }

    public function whatmatters($param1 = '', $param2 ='', $param3 =''){

        if($param1 == 'insert'){
           
            $type='whatmatters';
            $date=date("Y-m-d") ;
            $page_data['name']      = $this->input->post('name');  
            $page_data['comments']      = $this->input->post('comment');  
            $page_data['post_id'] =2;
            $page_data['post_type']=$type;
            $page_data['created_at']=   $date;
            $this->db->insert('comments', $page_data);
           
            $this->session->set_flashdata('flash_message', get_phrase('Data saved successfully'));
            redirect(base_url(). 'whatmatter', 'refresh');
        }
      
    }
        public function covid($param1 = '', $param2 ='', $param3 =''){

            if($param1 == 'insert'){
               
                $type='covid';
                $date=date("Y-m-d") ;
                $page_data['name']      = $this->input->post('name');  
                $page_data['comments']      = $this->input->post('comment');  
                $page_data['post_id'] =3;
                $page_data['post_type']=$type;
                $page_data['created_at']=   $date;
                $this->db->insert('comments', $page_data);
               
                $this->session->set_flashdata('flash_message', get_phrase('Data saved successfully'));
                redirect(base_url(). 'covid', 'refresh');
            }
        }
            public function sizezero($param1 = '', $param2 ='', $param3 =''){

                if($param1 == 'insert'){
                   
                    $type='sizezero';
                    $date=date("Y-m-d") ;
                    $page_data['name']      = $this->input->post('name');  
                    $page_data['comments']      = $this->input->post('comment');  
                    $page_data['post_id'] =4;
                    $page_data['post_type']=$type;
                    $page_data['created_at']=   $date;
                    $this->db->insert('comments', $page_data);
                   
                    $this->session->set_flashdata('flash_message', get_phrase('Data saved successfully'));
                    redirect(base_url(). 'sizezero', 'refresh');
                }
    }

    public function beginagain($param1 = '', $param2 ='', $param3 =''){

        if($param1 == 'insert'){
           
            $type='beginagain';
            $date=date("Y-m-d") ;
            $page_data['name']      = $this->input->post('name');  
            $page_data['comments']      = $this->input->post('comment');  
            $page_data['post_id'] =5;
            $page_data['post_type']=$type;
            $page_data['created_at']=   $date;
            $this->db->insert('comments', $page_data);
           
            $this->session->set_flashdata('flash_message', get_phrase('Data saved successfully'));
            redirect(base_url(). 'beginagain', 'refresh');
        }
}

public function teacher($param1 = '', $param2 ='', $param3 =''){

    if($param1 == 'insert'){
       
        $type='teacher';
        $date=date("Y-m-d") ;
        $page_data['name']      = $this->input->post('name');  
        $page_data['comments']      = $this->input->post('comment');  
        $page_data['post_id'] =6;
        $page_data['post_type']=$type;
        $page_data['created_at']=   $date;
        $this->db->insert('comments', $page_data);
       
        $this->session->set_flashdata('flash_message', get_phrase('Data saved successfully'));
        redirect(base_url(). 'teacher', 'refresh');
    }
}


 

    }
