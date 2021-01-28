<?php
/**
 *rentacar Model
 */
class Rentacar_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'rentacar';
  protected $_order_by = 'id';
  public $rules = array(
      'name' => array(
                'field' => 'name',
                'label' => 'Rentacar Name',
                'rules' => 'trim|required'
        )
      );


  function __construct()
  {
    parent::__construct();
  }



  public function get_new(){
    $rentacar = new stdClass();
    $rentacar->name = '';
    $rentacar->phone = '';
    $rentacar->about = '';
    $rentacar->logo = '';
    $rentacar->c_photo = '';
    $rentacar->user_id = '';
    $rentacar->police_station = '';
    $rentacar->post_office = '';
    $rentacar->zip = '';
    $rentacar->district = '';
    $rentacar->division = '';
    $rentacar->country = '';
    $rentacar->date = '';
    $rentacar->status = '';
    return $rentacar;
  }

}
