<?php
/**
 *trip Model
 */
class Trip_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'trip';
  protected $_order_by = 'id';
  public $rules = array(
      'route_id' => array(
                'field' => 'route_id',
                'label' => 'Route id',
                'rules' => 'trim|required'
        ),
      );


  function __construct()
  {
    parent::__construct();
  }

  public function get_new(){
    $trip = new stdClass();
    $trip->trip_time = '';
    $trip->route_id = '';
    $trip->status = '';
    return $trip;
  }




    public function trip_by_id($id = NULL){
   		$this->db->where('id', $id);

   		$parent = $this->db->get('trip');

  		foreach ($parent->result() as $row)
  		{
  		    echo $row->parent;
  		}
    }

}
