<?php

/**
 * Admin Panel car Controller
 */
class Car extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('car_m');
    $this->car_m->access_permission('1');
    $this->session->set_userdata('upload_dir', $this->uri->segment(2));
  }

  //car List
  public function index(){
    // get car
    $this->load->helper('aurora');
    $this->data['cars'] = $this->car_m->get();

    // var_dump(sizeof($this->data['cars']));
    //load view
    $this->data['subview'] = 'admin/car/index';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //Edit car
   public function edit($id = NULL)
   {

    if($id){
      $this->data['car'] = $this->car_m->get($id);
      @count($this->data['car']) || $this->data['errors'][] = 'car Could not be found';
    }else{
      $this->data['car'] = $this->car_m->get_new();

    }


    // Set up the form
    $rules = $this->car_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->car_m->array_from_post(array('model', 'brand', 'wheel','seat','door','pass','icon', 'photo', 'category', 'status'));

        $this->car_m->save($data, $id);
        redirect('admin/car');
    }


  // load view
    $this->data['subview'] = 'admin/car/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete car
   public function delete($id){
    //Delete cars
    $this->car_m->delete($id);
    redirect('admin/car','refresh');
  }

  public function s_categories($cat){
    $dis = $this->car_m->s_categories($cat);
    dump($dis);
    foreach ($dis as $key => $value ) {
        $output .= '<option value="'.$key.'">'.$value.' </option>';
      };
      echo $output;
  }




}
