<?php

class Mailer_model extends CI_Model{

    private $admin_address = "emon@engeducation.com";

   
    function userEmail($data, $templateName){

        $this->load->library('email');
        $this->email->set_mailtype('html');
        $this->email->from($data['to_address'], 'Student Enquiry Email');
        $this->email->to($this->admin_address);
        $this->email->subject('Student Enquiry Email');
        $body = $this->load->view('mail_scripts/' . $templateName, $data, true);
        //print_r($body);exit();
        $this->email->message($body);
        $this->email->send();
        $this->email->clear();
    }

    function userEnquiryEmail($data, $templateName){

        $this->load->library('email');
        $this->email->set_mailtype('html');
        $this->email->from($data['to_address'], 'Student Quick Enquiry Email');
        $this->email->to($this->admin_address);
        $this->email->subject('Student Quick Enquiry Email');
        $body = $this->load->view('mail_scripts/' . $templateName, $data, true);
        //print_r($body);exit();
        $this->email->message($body);
        $this->email->send();
        $this->email->clear();
    }



}//Mailer_model
?>