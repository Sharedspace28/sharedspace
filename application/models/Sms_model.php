<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Sms_model extends CI_Model { 
	
	function __construct()
    {
        parent::__construct();

        
        $this->load->database();
		$this->load->library('session');
    }
    
    function UpdateClickattelSms()
    {
        $sms_data['info']    =   $this->input->post('clickatell_username');
        $this->db->where('type', 'clickatell_username');
        $this->db->update('sms_settings', $sms_data);

        $sms_data['info']    =   $this->input->post('clickatell_password');
        $this->db->where('type', 'clickatell_password');
        $this->db->update('sms_settings', $sms_data);

        $sms_data['info']    =   $this->input->post('clickatell_apikey');
        $this->db->where('type', 'clickatell_apikey');
        $this->db->update('sms_settings', $sms_data);


    }
    function UpdateMsg91Sms()
    {
        $sms_data['info']    =   $this->input->post('msg91_authentication_key');
        $this->db->where('type', 'msg91_authentication_key');
        $this->db->update('sms_settings', $sms_data);

        $sms_data['info']    =   $this->input->post('msg91_sender_id');
        $this->db->where('type', 'msg91_sender_id');
        $this->db->update('sms_settings', $sms_data);

        $sms_data['info']    =   $this->input->post('msg91_route');
        $this->db->where('type', 'msg91_route');
        $this->db->update('sms_settings', $sms_data);

        $sms_data['info']    =   $this->input->post('msg91_contry_code');
        $this->db->where('type', 'msg91_contry_code');
        $this->db->update('sms_settings', $sms_data);
    }

}