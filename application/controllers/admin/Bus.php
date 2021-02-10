<?php

/**
 * Admin Panel bus Controller
 */
class Bus extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_m');
    $this->load->model('bus_m');
    // $this->load->model('media_m');
    $this->user_m->access_permission('1');

    // $this->session->set_userdata('upload_dir', $this->uri->segment(2));

  }

  //bus List
  public function index(){
    // get bus
    $this->load->helper('aurora');
    $this->data['buss'] = $this->bus_m->get();

    // var_dump(sizeof($this->data['buss']));
    //load view
    $this->data['subview'] = 'admin/bus/index';
    $this->load->view('admin/_layout_main', $this->data);

    
  }

  //Edit bus
   public function edit($id = NULL)
   {

    if($id){
      $this->data['bus'] = $this->bus_m->get($id);
      @count($this->data['bus']) || $this->data['errors'][] = 'bus Could not be found';
    }else{
      $this->data['bus'] = $this->bus_m->get_new();

    }


    // Set up the form
    $rules = $this->bus_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->bus_m->array_from_post(array('name', 'des','photo', 'status'));
      // echo "<pre>";
      //   var_dump($data);
      //   echo "</pre>";
      //   die();       

        $this->bus_m->save($data, $id);
        redirect('admin/bus');
    }


  // load view
    $this->data['subview'] = 'admin/bus/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete bus
   public function delete($id){
    //Delete buss
    $this->bus_m->delete($id);
    redirect('admin/bus','refresh');
  }


}
