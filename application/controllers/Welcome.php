<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Frontend_Controller {

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

	public function __construct(){
	    parent::__construct();
		$this->load->model('user_m');
		$this->load->model('rentacar_m');
	    $this->load->model('division_m');
	}

	
	//Services List
	public function index(){
		$this->data['rentacar'] = $this->rentacar_m->get();
		$this->data['location'] = $this->division_m->get();
	  	$this->data['subview'] = 'home';
	    $this->load->view('_layout_main', $this->data);
	}
}
