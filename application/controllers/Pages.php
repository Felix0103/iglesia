<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$data['title']='Login';
		$this->load->view('general/login',$data);
	}
	function dashboard()
	{
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
		$data['title']='Profile';
		$this->views('general/profile',$data);
	}
}