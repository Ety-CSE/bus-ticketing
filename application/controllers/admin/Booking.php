<?php

/**
 * Booking Controller
 */
class Booking extends Frontend_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_m');
    $this->load->model('route_m');
    $this->load->model('coach_m');
    $this->load->model('trip_m');
    $this->load->model('booking_m');
    $this->load->model('bus_m');
    $this->load->helper('form');
  }

  public function index($id=NULL)
  {

    $this->data['booking'] = $this->booking_m->get();
    
    $this->data['subview'] = 'admin/booking/booking';
    $this->load->view('admin/_layout_main', $this->data); 
  }

  public function ticket($id=NULL)
  {
    if($id){
      $this->data['booking'] = $this->booking_m->get($id);
      $this->data['trip'] = $this->trip_m->get($this->data['booking']->trip_id);
      $this->data['subview'] = 'admin/booking/ticket';
      $this->load->view('admin/_layout_main', $this->data); 
    }else{
      redirect(site_url('admin/customer'));
    }
  }


  

}
 