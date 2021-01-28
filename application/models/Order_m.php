<?php
/**
 *order Model
 */
class Order_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'orders';
  protected $_order_by = 'id';
  public $rules = array(
      'order_id' => array(
                'field' => 'order_id',
                'label' => 'order_id',
                'rules' => 'trim|required'
        ),
    'customer' => array(
                'field' => 'customer',
                'label' => 'customer',
                'rules' => 'trim|required',

        ),
    'rent' => array(
                'field' => 'rent',
                'label' => 'Rent',
                'rules' => 'trim|required',

        )
      );


  function __construct()
  {
    parent::__construct();
  }



  public function get_new(){
    $order = new stdClass();
    $order->order_id = '';
    $order->offer_id = '';
    $order->rentacar = '';
    $order->package = '';
    $order->custome_offer = '';
    $order->rent = '';
    $order->car_info = '';
    $order->driver_info = '';
    $order->pickup_info = '';
    $order->destination = '';
    $order->pass_no = '';
    $order->note = '';
    $order->date = '';
    $order->customer = '';
    $order->status = '';
    return $order;
  }


  //parent order array_from_post
  // 

}
