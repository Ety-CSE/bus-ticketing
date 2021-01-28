<?php
/**
 *offer Model
 */
class offer_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'offers';
  protected $_offer_by = 'id';
  public $rules = array(
      'title' => array(
                'field' => 'title',
                'label' => 'Offer Title',
                'rules' => 'trim|required'
        ),
    'details' => array(
                'field' => 'details',
                'label' => 'Details',
                'rules' => 'trim|required',

        ),
    'car' => array(
                'field' => 'car',
                'label' => 'Service ID',
                'rules' => 'trim|required',

        )
      );


  function __construct()
  {
    parent::__construct();
  }



  public function get_new(){
    $offer = new stdClass();
    $offer->rentacar = '';
    $offer->title = '';
    $offer->car = '';
    $offer->ac = '';
    $offer->fuel = '';
    $offer->year = '';
    $offer->conditions = '';
    $offer->monthly = '';
    $offer->details = '';
    $offer->daily = '';
    $offer->hourly = '';
    $offer->date = '';
    $offer->status = '';
    return $offer;
  }


  //parent offer array_from_post
  // 

}
