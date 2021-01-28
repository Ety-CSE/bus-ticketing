<?php

/**
 * Admin Panel Dashboard Controller
 */
class Dashboard extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_m');

  }

  //Admin Dashboard 
  public function index(){
      $this->user_m->access_permission('1');
      $this->data['subview'] = "admin/dashboard/index";
      $this->load->view('admin/_layout_main', $this->data);
  }

  //Owner Dashboard 
  public function owner(){
    $this->user_m->access_permission('2');
    $this->data['subview'] = "admin/dashboard/owner";
    $this->load->view('admin/_layout_main', $this->data);
  }

  //customer Dashboard 
  public function customer(){
    $this->user_m->access_permission('3');
    $this->data['subview'] = "admin/dashboard/customer";
    $this->load->view('admin/_layout_main', $this->data);
  }

  //driver Dashboard 
  public function driver(){
    $this->user_m->access_permission('4');
    $this->data['subview'] = "admin/dashboard/driver";
    $this->load->view('admin/_layout_main', $this->data);
  }

  //customer_care Dashboard 
  public function customer_care(){
    $this->user_m->access_permission('4');
    $this->data['subview'] = "admin/dashboard/customer_care";
    $this->load->view('admin/_layout_main', $this->data);
  }


}
