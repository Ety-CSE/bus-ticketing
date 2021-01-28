<?php

/**
 * Admin Panel setting Controller
 */
class Setting extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('setting_m');

  }

  //setting List
  public function index(){
    // get setting
    $this->load->helper('aurora');
    $this->data['settings'] = $this->setting_m->get();

    // var_dump(sizeof($this->data['settings']));
    //load view
    $this->data['subview'] = 'admin/setting/index';
    $this->load->view('admin/_layout_main', $this->data);
  }

    //setting List
  public function contact(){
    // get setting
    $this->load->helper('aurora');
    $this->data['settings'] = $this->setting_m->get();

    // var_dump(sizeof($this->data['settings']));
    //load view
    $this->data['subview'] = 'admin/setting/contact';
    $this->load->view('admin/_layout_main', $this->data);
  }


  //setting List
  public function header(){
    // get setting
    $this->load->helper('aurora');
    $this->data['settings'] = $this->setting_m->get();

    // var_dump(sizeof($this->data['settings']));
    //load view
    $this->data['subview'] = 'admin/setting/header';
    $this->load->view('admin/_layout_main', $this->data);
  }


  //setting List
  public function footer(){
    // get setting
    $this->load->helper('aurora');
    $this->data['settings'] = $this->setting_m->get();

    // var_dump(sizeof($this->data['settings']));
    //load view
    $this->data['subview'] = 'admin/setting/footer';
    $this->load->view('admin/_layout_main', $this->data);
  }


  
}
