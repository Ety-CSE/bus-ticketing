<?php
/**
 *coach Model
 */
class Coach_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'coach';
  protected $_order_by = 'id';
  public $rules = array(
      'no' => array(
                'field' => 'no',
                'label' => 'Coach No',
                'rules' => 'trim|required'
        ),
    'bus_id' => array(
                'field' => 'bus_id',
                'label' => 'Bus ID',
                'rules' => 'trim|required',

        ),
      );


  function __construct()
  {
    parent::__construct();
  }

  public function get_new(){
    $coach = new stdClass();
    $coach->bus_id = '';
    $coach->category = '';
    $coach->type = '';
    $coach->route = '';
    $coach->no = '';
    $coach->fare = '';
    $coach->status = '';
    return $coach;
  }




    public function coach_by_id($id = NULL){
   		$this->db->where('id', $id);

   		$parent = $this->db->get('coach');

  		foreach ($parent->result() as $row)
  		{
  		    echo $row->parent;
  		}
    }

}
