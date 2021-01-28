<?php
/**
 *district Model
 */
class District_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'district';
  protected $_district_by = 'id';
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
    $district = new stdClass();
    $district->name = '';
    $district->bd_name = '';
    $district->division = '';
    return $district;
  }


 
}
