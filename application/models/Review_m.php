<?php
/**
 *review Model
 */
class Review_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'review';
  protected $_order_by = 'id';
  public $rules = array(
      'review' => array(
                'field' => 'review',
                'label' => 'Review Description',
                'rules' => 'trim|required'
        )
      );


  function __construct()
  {
    parent::__construct();
  }



  public function get_new(){
    $review = new stdClass();
    $review->review = '';
    $review->customer = '';
    $review->star = '';
    $review->offer_id = '';
    $review->order_id = '';
    $review->date = '';
    $review->status = '';
    return $review;
  }

}
