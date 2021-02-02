<?php

/**
 * Admin Panel rentacar Controller
 */
class Customer extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('route_m');
    $this->load->model('coach_m');
    $this->load->model('trip_m');
    $this->load->model('booking_m');
    $this->load->model('bus_m');
    $this->load->helper('form');
    $this->load->model('user_m');
    $this->user_m->access_permission('3');
  }

  //rentacar List
  public function index(){
    //load view
    $this->data['subview'] = 'admin/dashboard/customer';
    $this->load->view('admin/_layout_main', $this->data);

    
  }


  // booking
  public function booking()
  {
    $this->data['booking'] = $this->booking_m->booking_by_id($this->session->userdata('id'));
    
    $this->data['subview'] = 'admin/customer/booking';
    $this->load->view('admin/_layout_main', $this->data); 
    
  }


  public function ticket($id=NULL)
  {
    if($id){
      $this->data['booking'] = $this->booking_m->get($id);
      $this->data['trip'] = $this->trip_m->get($this->data['booking']->trip_id);
      $this->data['subview'] = 'admin/customer/ticket';
      $this->load->view('admin/_layout_main', $this->data); 
    }else{
      redirect(site_url('admin/customer'));
    }
  }


  // cancel_trip
  public function cancel_trip($id=NULL)
  {
    $this->db->set('status', '1');
    $this->db->where('id', $id);
    if($this->db->update('booking')){
      echo 'true';
    }else{
      echo 'false';
      
    }
    
  }

}
