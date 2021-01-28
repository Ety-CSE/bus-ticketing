<?php
/**
 *faq Model
 */
class Faq_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'faq';
  protected $_order_by = 'id';
  public $rules = array(
      'question' => array(
                'field' => 'question',
                'label' => 'Question',
                'rules' => 'trim|required'
        )
      );


  function __construct()
  {
    parent::__construct();
  }



  public function get_new(){
    $faq = new stdClass();
    $faq->question = '';
    $faq->answer = '';
    $faq->list_order = '';
    $faq->status = '';
    return $faq;
  }

}
