<?php
/**
 *police_station Model
 */
class Post_office_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'post_office';
  protected $_post_office_by = 'id';
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
    $post_office = new stdClass();
    $post_office->name = '';
    $post_office->bd_name = '';
    $post_office->zip = '';
    $post_office->division = '';
    $post_office->district = '';
    $post_office->police_station = '';
    return $post_office;
  }


 
}
