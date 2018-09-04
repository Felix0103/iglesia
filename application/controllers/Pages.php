<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct()
	{		
		parent::__construct();    

	}
	public function index()
	{
		$data['title']='Login';
		$this->load->view('general/login',$data);
	}
	function dashboard()
	{	
		if(strlen($this->session->userdata('site_lang'))==0){$this->session->set_userdata('site_lang', 'spanish');}
		$data['title']='Dashboard';
		$this->views('general/dashboard',$data);

	}
	public function login()
	{
		$data['title']='Login';
		$this->load->view('general/login',$data);
	}
	public function register()
	{
		$data['title']='Register';
		$this->load->view('general/register',$data);
	}
	public function profile()
	{ 
		
		$data['title']=$this->lang->line('menu_profile');
		$this->views('general/profile',$data);
	}

}