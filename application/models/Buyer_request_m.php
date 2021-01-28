<?php
/**
 *buyer_request Model
 */
class Buyer_request_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'buyer_request';
  protected $_buyer_request_by = 'id';
  public $rules = array(
      'customer' => array(
                'field' => 'customer',
                'label' => 'Customer',
                'rules' => 'trim|required'
        ),
      );


  function __construct()
  {
    parent::__construct();
  }

  public function get_new(){
    $buyer_request = new stdClass();
    $buyer_request->customer = '';
    $buyer_request->request_id = '';
    $buyer_request->pickup_info = '';
    $buyer_request->destination = '';
    $buyer_request->pass = '';
    $buyer_request->car = '';
    $buyer_request->details = '';
    $buyer_request->date = '';
    $buyer_request->type = '';
    $buyer_request->status = '';
    return $buyer_request;
  }


  //parent buyer_request array_from_post
  // 

}
