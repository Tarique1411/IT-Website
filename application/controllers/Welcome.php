<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->template('welcome/welcome_message');
	}

	public function services(){
		$this->load->template('welcome/services');	
	}

	public function careers() {
		$this->load->template('welcome/careers');	
	}

	public function portfolio() {
		$this->load->template('welcome/portfolio');	
	}

	public function about() {
		$this->load->template('welcome/about');	
	}

	public function contact() {
		
		if(isset($_POST['submit']) && $this->input->server('REQUEST_METHOD') == 'POST'){
            $data = array('name' =>$this->input->post('name'),
                          'email' =>$this->input->post('email'),
                    	  'phone' =>$this->input->post('phone'),
                    	  'requirement' =>$this->input->post('message'),
                    	  'created' =>date('Y-m-d H:i:s') );


            $this->db->insert('contact_us',$data);
        }
		$this->load->template('welcome/contact');	
	}

	public function applyJob(){
		$this->load->template('welcome/apply_job');	
	}

	public function blog(){


		if(isset($_POST['submit']) && $this->input->server('REQUEST_METHOD') == 'POST'){
            $data = array('name' =>$this->input->post('name'),
                          'email' =>$this->input->post('email'),
                    	  'subject' =>$this->input->post('subject'),
                    	  'text' =>$this->input->post('message'),
                    	  'created' =>date('Y-m-d H:i:s') );
           // echo '<pre>'; print_r($data);die;


            $this->db->insert('blog_reply',$data);
        }
        $reply['data'] = $this->db->get('blog_reply')->result();

		$this->load->template('welcome/blog',$reply);	
	}

	public function projectDetail() {
		$this->load->template('welcome/project_detail');	
	}

	public function siteMap(){
		$this->load->template('welcome/site_map');	
	}

	public function appDevelopement(){
		$this->load->template('welcome/app_development');	
	}

	public function login(){
		$this->load->template('welcome/login');
	}

	public function clientProject() {
		$this->load->template('welcome/client_project');	
	}

	public function clientProjectDetails() {
		$this->load->template('welcome/client_project_details');	
	}

	public function changePassword() {
		$this->load->template('welcome/change_password');
	}

	public function terms() {
		$this->load->template('welcome/terms');
	}

	public function check()
	{
		$this->load->view('welcome_message');
	}

	public function error(){
		$this->output->set_status_header('404'); 
		$this->load->template('welcome/error');
	}
	public function multischool(){
		$this->load->template('welcome/multischool');
	}
	public function singleschool(){
		$this->load->template('welcome/singleschool');
	}
	public function smarthospital(){
		$this->load->template('welcome/smarthospital');
	}
	public function pos(){
		$this->load->template('welcome/pos');
	}
	public function hrms(){
		$this->load->template('welcome/hrms');
	}
	public function androidapp(){
		$this->load->template('welcome/androidapp');
	}
	
}
