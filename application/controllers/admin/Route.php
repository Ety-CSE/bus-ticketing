<?php

/**
 * Admin Panel route Controller
 */
class route extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_m');
    $this->load->model('route_m');
    // $this->load->model('media_m');
    $this->user_m->access_permission('1');


  }

  //route List
  public function index(){
    // get route
    $this->load->helper('aurora');
    $this->data['routes'] = $this->route_m->get();

    // var_dump(sizeof($this->data['routes']));
    //load view
    $this->data['subview'] = 'admin/route/index';
    $this->load->view('admin/_layout_main', $this->data);

    
  }

  //Edit route
   public function edit($id = NULL)
   {

    if($id){
      $this->data['route'] = $this->route_m->get($id);
      @count($this->data['route']) || $this->data['errors'][] = 'route Could not be found';
    }else{
      $this->data['route'] = $this->route_m->get_new();

    }


    // Set up the form
    $rules = $this->route_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->route_m->array_from_post(array('route_no','where_to', 'where_from','distance','duration', 'status'));
      // echo "<pre>";
      //   var_dump($data);
      //   echo "</pre>";
      //   die();       

        $this->route_m->save($data, $id);
        redirect('admin/route');
    }


  // load view
    $this->data['subview'] = 'admin/route/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete route
   public function delete($id){
    //Delete routes
    $this->route_m->delete($id);
    redirect('admin/route','refresh');
  }


}
