<?php
/**
 *police_station Model
 */
class police_station_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'police_station';
  protected $_police_station_by = 'id';
  public $rules = array(
      'name' => array(
                'field' => 'name',
                'label' => 'name',
                'rules' => 'trim|required'
        ),
      );


  function __construct()
  {
    parent::__construct();
  }



  public function get_new(){
    $police_station = new stdClass();
    $police_station->name = '';
    $police_station->bd_name = '';
    $police_station->division = '';
    $police_station->district = '';
    return $police_station;
  }


 
}
