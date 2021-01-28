<?php
/**
 *bid Model
 */
class Bid_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'bid';
  protected $_bid_by = 'id';
  public $rules = array(
      'rentacar' => array(
                'field' => 'rentacar',
                'label' => 'Rent a Car',
                'rules' => 'trim|required'
        ),
    'package' => array(
                'field' => 'package',
                'label' => 'Package',
                'rules' => 'trim|required',

        )
      );


  function __construct()
  {
    parent::__construct();
  }

  public function get_new(){
    $bid = new stdClass();
    $bid->request_id = '';
    $bid->offer_id = '';
    $bid->rentacar = '';
    $bid->package = '';
    $bid->offer_details = '';
    $bid->rent = '';
    $bid->date = '';
    $bid->status = '';
    return $bid;
  }


  //parent bid array_from_post
  // 

}
