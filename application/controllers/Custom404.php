<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custom404 extends Frontend_Controller {

	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('user_m');
	  $this->load->helper('form');
	}
  
	public function index(){
   
	$this->output->set_status_header('404'); 
	$this->data['subview'] = 'common/_error404';
	$this->load->view('_layout_main', $this->data);
   
	}
}