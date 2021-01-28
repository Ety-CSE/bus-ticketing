<?php

/**
 * Admin Panel review Controller
 */
class Review extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('review_m');
    $this->review_m->access_permission('1');

  }

  //review List
  public function index(){
    // get review
    $this->load->helper('aurora');
    $this->data['reviews'] = $this->review_m->get();

    // var_dump(sizeof($this->data['reviews']));
    //load view
    $this->data['subview'] = 'admin/review/index';
    $this->load->view('admin/_layout_main', $this->data);
  }


  
  //Edit review
   public function edit($id = NULL)
   {

    if($id){
      $this->data['review'] = $this->review_m->get($id);
      @count($this->data['review']) || $this->data['errors'][] = 'review Could not be found';
    }else{
      $this->data['review'] = $this->review_m->get_new();

    }


    // Set up the form
    $rules = $this->review_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->review_m->array_from_post(array(
          'review',
          'customer',
          'star',
          'offer_id',
          'order_id',
          'date',
          'status'          
        ));

        $data['date'] = '';

        $this->review_m->save($data, $id);
        redirect('admin/review');
    }


  // load view
    $this->data['subview'] = 'admin/review/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete review
   public function delete($id){
    //Delete reviews
    $this->review_m->delete($id);
    redirect('admin/review','refresh');
  }


}
