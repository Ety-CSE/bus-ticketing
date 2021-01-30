<?php
/**
 *bus Model
 */
class Booking_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'booking';
  protected $_order_by = 'id';
  public $rules = array(
      'user_id' => array(
                'field' => 'user_id',
                'label' => 'User ID',
                'rules' => 'trim|required'
        ),
      );


  function __construct()
  {
    parent::__construct();
  }

  public function get_new(){
    $bus = new stdClass();
    $bus->seat_no = '';
    $bus->user_id = '';
    $bus->journey_date = '';
    $bus->trip_id = '';
    $bus->payment = '';
    $bus->status = '';
    return $bus;
  }

}
