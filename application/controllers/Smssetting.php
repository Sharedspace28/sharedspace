<?php if (!defined('BASEPATH'))exit('No direct script access allowed');


class Smssetting extends CI_Controller {

    function __construct() {
        parent::__construct();

		$this->load->database();
		$this->load->library('session');
        $this->load->model('sms_model');
    }
        function sms_settings($param1 = '', $param2 ='', $param3 =''){

            if($param1 == 'clickattel'){
                
                $this->sms_model->UpdateClickattelSms();
               
                $this->session->set_flashdata('flash_message', get_phrase('Data saved successfully'));
                redirect(base_url(). 'smssetting/sms_settings', 'refresh');
            }
        
            if($param1 == 'msg91'){
                $this->sms_model->UpdateMsg91Sms();
               
                $this->session->set_flashdata('flash_message', get_phrase('Data saved successfully'));
                redirect(base_url(). 'smssetting/sms_settings', 'refresh');
               
                }
        
                $page_data['page_name']     = 'sms_settings';
                $page_data['page_title']    = get_phrase('Sms Settings');
                $this->load->view('backend/index', $page_data);
        
            }
     



    }
