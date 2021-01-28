<?php

/**
 * Admin Panel coach Controller
 */
class Coach extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_m');
    $this->load->model('coach_m');
    // $this->load->model('media_m');
    $this->user_m->access_permission('1');


  }

  //coach List
  public function index(){
    // get coach
    $this->load->helper('aurora');
    $this->data['coachs'] = $this->coach_m->get();

    // var_dump(sizeof($this->data['coachs']));
    //load view
    $this->data['subview'] = 'admin/coach/index';
    $this->load->view('admin/_layout_main', $this->data);

    
  }

  //Edit coach
   public function edit($id = NULL)
   {

    if($id){
      $this->data['coach'] = $this->coach_m->get($id);
      @count($this->data['coach']) || $this->data['errors'][] = 'coach Could not be found';
    }else{
      $this->data['coach'] = $this->coach_m->get_new();

    }


    // Set up the form
    $rules = $this->coach_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->coach_m->array_from_post(array('bus_id', 'category','type','route','no','fare', 'status'));
      // echo "<pre>";
      //   var_dump($data);
      //   echo "</pre>";
      //   die();       

        $this->coach_m->save($data, $id);
        redirect('admin/coach');
    }


  // load view
    $this->data['subview'] = 'admin/coach/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete coach
   public function delete($id){
    //Delete coachs
    $this->coach_m->delete($id);
    redirect('admin/coach','refresh');
  }


}
