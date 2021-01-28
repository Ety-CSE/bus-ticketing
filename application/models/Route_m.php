<?php
/**
 *route Model
 */
class Route_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'route';
  protected $_order_by = 'id';
  public $rules = array(
      'where_to' => array(
                'field' => 'where_to',
                'label' => 'To',
                'rules' => 'trim|required'
        ),
    'where_from' => array(
                'field' => 'where_from',
                'label' => 'Where',
                'rules' => 'trim|required',

        ),
      );


  function __construct()
  {
    parent::__construct();
  }

  public function get_new(){
    $route = new stdClass();
    $route->where_to = '';
    $route->where_from = '';
    $route->distance = '';
    $route->duration = '';
    $route->status = '';
    return $route;
  }




    public function route_by_id($id = NULL){
   		$this->db->where('id', $id);

   		$parent = $this->db->get('route');

  		foreach ($parent->result() as $row)
  		{
  		    echo $row->parent;
  		}
    }

}
