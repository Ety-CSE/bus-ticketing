<?php
/**
 *car Model
 */
class Car_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'cars';
  protected $_order_by = 'id';
  public $rules = array(
      'model' => array(
                'field' => 'model',
                'label' => 'Car Model',
                'rules' => 'trim|required'
        ),
    'brand' => array(
                'field' => 'brand',
                'label' => 'Brand Name',
                'rules' => 'trim|required',

        ),
      );


  function __construct()
  {
    parent::__construct();
  }



public function car(){

  $query = $this->db->get('cars');

  return $query->result();

}

  public function get_new(){
    $car = new stdClass();
    $car->model = '';
    $car->brand = '';
    $car->wheel = '';
    $car->seat = '';
    $car->door = '';
    $car->pass = '';
    $car->icon = '';
    $car->photo = '';
    $car->category = '';
    $car->status = '';
    return $car;
  }

}
