<?php

/**
 * User Controller
 */
class Rentacar extends Frontend_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_m');
    $this->load->model('rentacar_m');
    $this->load->model('offer_m');
    $this->load->helper('form');
  }

  public function index()
  {
	  $this->data['rentacar'] = $this->rentacar_m->get();
      $this->data['subview'] = 'admin/rentacar/rentacar';
      $this->load->view('_layout_main', $this->data);
  }

  public function location($id=NULL)
  {
      $this->data['rentacar'] = $this->rentacar_m->rentacar_by_district($id);
      if(!$this->data['rentacar']){
        $this->data['subview'] = 'admin/rentacar/no-rentacar';
      }else{
        $this->data['subview'] = 'admin/rentacar/rentacar';
      }
      $this->load->view('_layout_main', $this->data);
  }


  public function profile($id=NULL)
  {
      if(!$id){
          redirect('/rentacar', 'refresh');
        }
        $this->data['offers'] = $this->rentacar_m->offer_by_rentacar_id($id);
        $this->data['rentacar'] = $this->rentacar_m->get($id);
        $this->data['subview'] = 'admin/rentacar/profile';
        $this->load->view('_layout_main', $this->data);
  }


  public function offer($id=NULL)
  {
      if(!$id){
          redirect('/rentacar', 'refresh');
        }
        $this->data['offers'] = $this->offer_m->get($id);
        $this->data['rentacar'] = $this->rentacar_m->get($this->offer_m->rentacar_by_offer_id($id));
        $this->data['subview'] = 'admin/rentacar/offer';
        $this->load->view('_layout_main', $this->data);
  }

  public function order_process($id=NULL, $package=NULL)
  {
      if(!$id && !$package){
          redirect('/rentacar', 'refresh');
        }
        $this->data['package'] = $package;
        $this->data['offers'] = $this->offer_m->get($id);
        $this->data['rentacar'] = $this->rentacar_m->get($this->offer_m->rentacar_by_offer_id($id));
        $this->data['subview'] = 'admin/rentacar/order_process';
        $this->load->view('_layout_main', $this->data);
  }



  public function district_by_div($id = NULL){
    $dis = $this->user_m->district_by_div($id);
    echo json_encode($dis);
  }


}
