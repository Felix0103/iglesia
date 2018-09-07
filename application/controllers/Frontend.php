<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function __construct()
	{		
		parent::__construct();    

	}
	public function index()
	{
		$data['title']='Albor de Vida';
		$this->load->view('frontend/header',$data);
		$this->load->view('frontend/index',$data);
		$this->load->view('frontend/footer',$data);
	}
	public function pages()
	{	$data['title']='Albor de Vida';
		
		switch ($_POST['page']) {
			case 'index':
				$this->load->view('frontend/index',$data);
				break;
			case 'about':
				$this->load->view('frontend/about',$data);
				break;
			
			default:
				# code...
				break;
		}
		
	}


}