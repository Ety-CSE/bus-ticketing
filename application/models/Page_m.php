<?php
/**
 *page Model
 */
class Page_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'pages';
  protected $_order_by = 'id';
  public $rules = array(
      'title' => array(
                'field' => 'title',
                'label' => 'Page Title',
                'rules' => 'trim|required'
        ),
    'slug' => array(
                'field' => 'slug',
                'label' => 'Page Slug',
                'rules' => 'trim|required',

        ),
      );


  function __construct()
  {
    parent::__construct();
  }



  public function get_new(){
    $page = new stdClass();
    $page->title = '';
    $page->slug = '';
    $page->setting = '';
    $page->content = '';
    $page->status = '';
    return $page;
  }



    //   get_by_slug
    public function get_by_slug($slug){
        $this->db->where('slug', $slug);
        $page = $this->db->get('pages');

        return $page->result();
    }

}
