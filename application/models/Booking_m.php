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
    $booking = new stdClass();
    $booking->seat_no = '';
    $booking->user_id = '';
    $booking->journey_date = '';
    $booking->trip_id = '';
    $booking->trip_no = '';
    $booking->cosch_id = '';
    $booking->payment = '';
    $booking->status = '';
    return $booking;
  }

}
