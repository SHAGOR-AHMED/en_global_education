<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$data['banner'] = TRUE;
		$data['footer_section'] = TRUE;
		$data['title'] = "Welcome to EN Global Education";
		$data['content'] = $this->load->view('frontend/page/body', '', true);
		$this->load->view('frontend/index',$data);
	}
	public function about(){
		$data['banner'] = FALSE;
		$data['footer_section'] = TRUE;
		$data['title'] = "EN Global Education | About";
		$data['content'] = $this->load->view('frontend/page/about', '', true);
		$this->load->view('frontend/index',$data);
	}

	public function student(){
		$data['banner'] = FALSE;
		$data['footer_section'] = TRUE;
		$data['title'] = "EN Global Education | Students Services";
		$data['content'] = $this->load->view('frontend/page/student', '', true);
		$this->load->view('frontend/index',$data);
	}

	public function institue(){
		$data['banner'] = FALSE;
		$data['footer_section'] = TRUE;
		$data['title'] = "Our Partner Institues";
		$data['content'] = $this->load->view('frontend/page/institue', '', true);
		$this->load->view('frontend/index',$data);
	}

	public function uk(){
		$data['banner'] = FALSE;
		$data['footer_section'] = TRUE;
		$data['title'] = "Study In UK";
		$data['content'] = $this->load->view('frontend/page/uk', '', true);
		$this->load->view('frontend/index',$data);
	}

	public function norwy(){
		$data['banner'] = FALSE;
		$data['footer_section'] = TRUE;
		$data['title'] = "Study In Norwy";
		$data['content'] = $this->load->view('frontend/page/norwy', '', true);
		$this->load->view('frontend/index',$data);
	}

	public function ireland(){
		$data['banner'] = FALSE;
		$data['footer_section'] = TRUE;
		$data['title'] = "Study In Ireland";
		$data['content'] = $this->load->view('frontend/page/ireland', '', true);
		$this->load->view('frontend/index',$data);
	}

	public function germany(){
		$data['banner'] = FALSE;
		$data['footer_section'] = TRUE;
		$data['title'] = "Study In Germany";
		$data['content'] = $this->load->view('frontend/page/germany', '', true);
		$this->load->view('frontend/index',$data);
	}

	public function malysisa(){
		$data['banner'] = FALSE;
		$data['footer_section'] = TRUE;
		$data['title'] = "Study In Malaysia";
		$data['content'] = $this->load->view('frontend/page/malysisa', '', true);
		$this->load->view('frontend/index',$data);
	}

	public function sweden(){
		$data['banner'] = FALSE;
		$data['footer_section'] = TRUE;
		$data['title'] = "Study In Sweden";
		$data['content'] = $this->load->view('frontend/page/sweden', '', true);
		$this->load->view('frontend/index',$data);
	}

	public function scholarship(){
		$data['banner'] = FALSE;
		$data['footer_section'] = TRUE;
		$data['title'] = "EN Global Education | Scholarship";
		$data['content'] = $this->load->view('frontend/page/scholarship', '', true);
		$this->load->view('frontend/index',$data);
	}

	public function ScholarshipForm(){
		$data['banner'] = FALSE;
		$data['footer_section'] = TRUE;
		$data['title'] = "EN Global Education | Apply for Scholarship";
		$data['content'] = $this->load->view('frontend/page/scholarship_form', '', true);
		$this->load->view('frontend/index',$data);
	}

	public function apply(){
		$data['banner'] = FALSE;
		$data['footer_section'] = TRUE;
		$data['title'] = "Welcome to EN Global Education";
		$data['content'] = $this->load->view('frontend/page/apply', '', true);
		$this->load->view('frontend/index',$data);
	}

	public function contact(){
		$data['banner'] = FALSE;
		$data['footer_section'] = TRUE;
		$data['title'] = "Welcome to EN Global Education";
		$data['content'] = $this->load->view('frontend/page/contact', '', true);
		$this->load->view('frontend/index',$data);
	}

	public function CommonForm($cat){
		$data['val'] = $cat;
		$data['banner'] = FALSE;
		$data['footer_section'] = TRUE;
		$data['title'] = "EN Global Education | Join with us";
		$data['content'] = $this->load->view('frontend/page/common_form', $data, true);
		$this->load->view('frontend/index',$data);
	}


	/*
	**start emailing function
	*/

	public function sendEmail(){

		$data['first_name'] = trim($this->input->post('first_name'));
		$data['last_name'] = trim($this->input->post('last_name'));
		$data['mobile'] = trim($this->input->post('mobile'));
		$data['to_address'] = trim($this->input->post('to_address'));
		$data['country'] = trim($this->input->post('country'));
		$data['interest_course'] = trim($this->input->post('interest_course'));
		$data['ielts'] = trim($this->input->post('ielts'));
		$data['qualification'] = trim($this->input->post('qualification'));
		$data['comment'] = trim($this->input->post('comment'));

		$this->mailer_model->userEmail($data, "user_email");
	}

	public function QuickEnquiryMail(){

		$data['first_name'] = trim($this->input->post('first_name'));
		$data['last_name'] = trim($this->input->post('last_name'));
		$data['mobile'] = trim($this->input->post('mobile'));
		$data['to_address'] = trim($this->input->post('to_address'));
		$data['comment'] = trim($this->input->post('comment'));

		$this->mailer_model->userEnquiryEmail($data, "user_enquiry_email");
	}

}//welcome
?>