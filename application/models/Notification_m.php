<?php
/**
 *notification Model
 */
class Notification_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'notification';
  protected $_notification_by = 'id';
  public $rules = array(
      'user_id' => array(
                'field' => 'user_id',
                'label' => 'User Id',
                'rules' => 'trim|required'
        ),
    'sub' => array(
                'field' => 'sub',
                'label' => 'Type',
                'rules' => 'trim|required',

        )
      );


  function __construct()
  {
    parent::__construct();
  }

  public function get_new(){
    $notification = new stdClass();
    $notification->user_id = '';
    $notification->sub = '';
    $notification->body = '';
    $notification->type = '';
    $notification->order_id = '';
    $notification->offer_id = '';
    $notification->date = '';
    $notification->status = '';
    return $notification;
  }


  //parent notification array_from_post
  // 

}
