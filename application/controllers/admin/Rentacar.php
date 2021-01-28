<?php

/**
 * Admin Panel rentacar Controller
 */
class Rentacar extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('rentacar_m');
    $this->rentacar_m->access_permission('1');
  }

  //rentacar List
  public function index(){
    // get rentacar
    $this->load->helper('aurora');
    $this->data['rentacars'] = $this->rentacar_m->get();

    //load view
    $this->data['subview'] = 'admin/rentacar/index';
    $this->load->view('admin/_layout_main', $this->data);

    
  }

  //Edit rentacar
   public function edit($id = NULL)
   {

    if($id){
      $this->data['rentacar'] = $this->rentacar_m->get($id);
      @count($this->data['rentacar']) || $this->data['errors'][] = 'rentacar Could not be found';
    }else{
      $this->data['rentacar'] = $this->rentacar_m->get_new();
      

    }


    // Set up the form
    $rules = $this->rentacar_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->rentacar_m->array_from_post(array(
          'name',
          'phone',
          'about',
          'logo',
          'user_id',
          'police_station',
          'post_office',
          'zip',
          'district',
          'division',
          'country',
          'c_photo',
          'status',
        ));


        if(!$id){
          $data['date'] = date('Y-m-d h:i a');
        }
        
        $this->rentacar_m->save($data, $id);
        redirect('admin/rentacar');
    }


  // load view
    $this->data['subview'] = 'admin/rentacar/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete rentacar
   public function delete($id){
    //Delete rentacars
    $this->rentacar_m->delete($id);
    redirect('admin/rentacar','refresh');
  }


}
