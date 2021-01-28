<?php

/**
 * Admin Panel category Controller
 */
class Category extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('category_m');
    // $this->load->model('media_m');
    $this->category_m->access_permission('1');

    // $this->session->set_userdata('upload_dir', $this->uri->segment(2));

  }

  //category List
  public function index(){
    // get category
    $this->load->helper('aurora');
    $this->data['categorys'] = $this->category_m->get();

    // var_dump(sizeof($this->data['categorys']));
    //load view
    $this->data['subview'] = 'admin/category/index';
    $this->load->view('admin/_layout_main', $this->data);

    
  }

  //Edit category
   public function edit($id = NULL)
   {

    if($id){
      $this->data['category'] = $this->category_m->get($id);
      @count($this->data['category']) || $this->data['errors'][] = 'category Could not be found';
    }else{
      $this->data['category'] = $this->category_m->get_new();

    }


    // Set up the form
    $rules = $this->category_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->category_m->array_from_post(array('title', 'details', 'status'));
      // echo "<pre>";
      //   var_dump($data);
      //   echo "</pre>";
      //   die();       

        $this->category_m->save($data, $id);
        redirect('admin/category');
    }


  // load view
    $this->data['subview'] = 'admin/category/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete category
   public function delete($id){
    //Delete categorys
    $this->category_m->delete($id);
    redirect('admin/category','refresh');
  }


}
