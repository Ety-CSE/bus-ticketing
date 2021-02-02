<?php

/**
 * User Controller
 */
class Search extends Frontend_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_m');
    $this->load->model('route_m');
    $this->load->model('coach_m');
    $this->load->model('booking_m');
    $this->load->model('bus_m');
    $this->load->helper('form');
  }

  public function index($to=NULL,$from=NULL)
  {
      $to = $this->input->post('where_to');
      $from = $this->input->post('where_from');
      $d_of_journy = $this->input->post('d_of_journy');
      $d_of_return = $this->input->post('d_of_return');
      $this->data['route'] = $this->route_m->district_by_id($to).' - '.$this->route_m->district_by_id($from);
      $_SESSION['search'] = serialize(array($to,$from,$d_of_journy, $d_of_return));
      $this->data['coach'] = $this->coach_m->get_coach($to, $from, $d_of_journy, $d_of_return);
      $this->data['subview'] = 'admin/booking/index';
      $this->load->view('_layout_main', $this->data);
  }

  public function ajax_save(){
    $data = $this->coach_m->array_from_post(array('seat_no', 'user_id','journey_date','trip_id','trip_no', 'coach_id'));
    $data['payment'] =  serialize(array($this->input->post('total'),$this->input->post('payment_meathod'),$this->input->post('phone'),$this->input->post('trns_id')));
    $data['status'] = '0';

    if($this->booking_m->save($data)){
      echo $this->db->insert_id();
    }
    else{
      echo 'false';
    }
    // dump($data);
  }


}
