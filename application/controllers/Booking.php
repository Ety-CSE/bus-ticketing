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
    $this->load->model('bus_m');
    $this->load->helper('form');
  }

  public function index($id=NULL)
  {

      $this->data['trip'] = $this->route_m->trip_by_coach($id);

      $this->data['coach'] = $id;
      $this->data['subview'] = 'admin/booking/trip';
      $this->load->view('_layout_main', $this->data);
  }

  public function seat($id=NULL)
  {

      $this->data['trip'] = $this->route_m->trip_by_coach($id);

      $this->data['coach'] = $id;
      $this->data['subview'] = 'admin/booking/booking';
      $this->load->view('_layout_main', $this->data);
  }


}
