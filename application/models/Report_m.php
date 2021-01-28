<?php
/**
 *report Model
 */
class Report_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'report';
  protected $_order_by = 'id';
  public $rules = array(
      'report' => array(
                'field' => 'report',
                'label' => 'Report',
                'rules' => 'trim|required'
        )
      );


  function __construct()
  {
    parent::__construct();
  }



  public function get_new(){
    $report = new stdClass();
    $review->rentacar = '';
    $review->type = '';
    $review->report = '';
    $review->actions = '';
    $review->customer = '';
    $review->date = '';
    $review->status = '';
    return $report;
  }

}
