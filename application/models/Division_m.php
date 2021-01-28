<?php
/**
 *division Model
 */
class Division_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'division';
  protected $_division_by = 'id';
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
    $division = new stdClass();
    $division->name = '';
    $division->bd_name = '';
    return $division;
  }


 
}
