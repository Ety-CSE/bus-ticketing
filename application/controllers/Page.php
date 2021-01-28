<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends Frontend_Controller {



	public function __construct(){
	    parent::__construct();
	    $this->load->model('user_m');
	    $this->load->model('page_m');
	}

	
	//Services List
	public function index($id = NULL){
		$this->data['page'] = $this->page_m->get_by_slug($id);
	  	$this->data['subview'] = 'admin/page/view';
	    $this->load->view('_layout_main', $this->data);
	}
}
