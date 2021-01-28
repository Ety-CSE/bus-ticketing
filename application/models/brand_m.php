<?php
/**
 *brand Model
 */
class Brand_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'brand';
  protected $_order_by = 'id';
  public $rules = array(
      'title' => array(
                'field' => 'title',
                'label' => 'Brand Name',
                'rules' => 'trim|required'
        ),
    'details' => array(
                'field' => 'details',
                'label' => 'Brand Details',
                'rules' => 'trim|required',

        ),
      );


  function __construct()
  {
    parent::__construct();
  }

  public function get_new(){
    $brand = new stdClass();
    $brand->title = '';
    $brand->details = '';
    $brand->country = '';
    $brand->status = '';
    $brand->logo = '';
    return $brand;
  }




    public function brand_by_id($id = NULL){
   		$this->db->where('id', $id);

   		$parent = $this->db->get('brand');

  		foreach ($parent->result() as $row)
  		{
  		    echo $row->parent;
  		}
    }

}
