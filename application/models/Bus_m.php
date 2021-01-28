<?php
/**
 *bus Model
 */
class Bus_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'bus';
  protected $_order_by = 'id';
  public $rules = array(
      'name' => array(
                'field' => 'name',
                'label' => 'bus Name',
                'rules' => 'trim|required'
        ),
    'des' => array(
                'field' => 'des',
                'label' => 'bus Details',
                'rules' => 'trim|required',

        ),
      );


  function __construct()
  {
    parent::__construct();
  }

  public function get_new(){
    $bus = new stdClass();
    $bus->name = '';
    $bus->des = '';
    $bus->photo = '';
    $bus->status = '';
    return $bus;
  }




    public function bus_by_id($id = NULL){
   		$this->db->where('id', $id);

   		$parent = $this->db->get('bus');

  		foreach ($parent->result() as $row)
  		{
  		    echo $row->parent;
  		}
    }

}
