<?php

/**
 * Admin Panel division Controller
 */
class division extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('division_m');
    $this->load->model('district_m');
    $this->load->model('police_station_m');
    $this->load->model('post_office_m');
    $this->division_m->access_permission('1');

  }

  //division List
  public function index(){
    // get division
    $this->load->helper('aurora');
    $this->data['divisions'] = $this->division_m->get();

    // var_dump(sizeof($this->data['divisions']));
    //load view
    $this->data['subview'] = 'admin/division/index';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //Edit division
   public function edit($id = NULL)
   {

    if($id){
      $this->data['division'] = $this->division_m->get($id);
      @count($this->data['division']) || $this->data['errors'][] = 'Division Could not be found';
    }else{
      $this->data['division'] = $this->division_m->get_new();

    }


    // Set up the form
    $rules = $this->division_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->division_m->array_from_post(array('name', 'bd_name'));
        
        $this->division_m->save($data,$id);
        redirect('admin/division');
    }


  // load view
    $this->data['subview'] = 'admin/division/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete division
   public function delete($id){
    //Delete divisions
    $this->division_m->delete($id);
    redirect('admin/division','refresh');
  }

// ============================================================


// district List
  public function district(){
    // get district
    $this->load->helper('aurora');
    $this->data['district'] = $this->district_m->get();

    // var_dump(sizeof($this->data['districts']));
    //load view
    $this->data['subview'] = 'admin/district/index';
    $this->load->view('admin/_layout_main', $this->data);
  }




  //Edit district
   public function district_edit($id = NULL)
   {

    if($id){
      $this->data['district'] = $this->district_m->get($id);
      @count($this->data['district']) || $this->data['errors'][] = 'district Could not be found';
    }else{
      $this->data['district'] = $this->district_m->get_new();

    }


    // Set up the form
    $rules = $this->district_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->district_m->array_from_post(array('name', 'bd_name', 'division'));
        
        $this->district_m->save($data,$id);
        redirect('admin/division/district');
    }


  // load view
    $this->data['subview'] = 'admin/district/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete district
   public function district_delete($id){
    //Delete districts
    $this->district_m->delete($id);
    redirect('admin/division/district','refresh');
  }



  // ===========================================
  // police_station

// police_station List
  public function police_station(){
    // get police_station
    $this->load->helper('aurora');
    $this->data['police_station'] = $this->police_station_m->get();

    // var_dump(sizeof($this->data['police_stations']));
    //load view
    $this->data['subview'] = 'admin/police_station/index';
    $this->load->view('admin/_layout_main', $this->data);
  }




  //Edit police_station
   public function police_station_edit($id = NULL)
   {

    if($id){
      $this->data['police_station'] = $this->police_station_m->get($id);
      @count($this->data['police_station']) || $this->data['errors'][] = 'police_station Could not be found';
    }else{
      $this->data['police_station'] = $this->police_station_m->get_new();

    }


     // Set up the form
    $rules = $this->police_station_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->police_station_m->array_from_post(array('name', 'bd_name', 'division', 'district'));
        
        $this->police_station_m->save($data,$id);
        redirect('admin/division/police_station');
    }


  // load view
    $this->data['subview'] = 'admin/police_station/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete police_station
   public function police_station_delete($id){
    //Delete police_stations
    $this->police_station_m->delete($id);
    redirect('admin/division/police_station','refresh');
  }


    // ===========================================
  // post_office

// post_office List
public function post_office(){
  // get post_office
  $this->load->helper('aurora');
  $this->data['post_office'] = $this->post_office_m->get();

  // var_dump(sizeof($this->data['post_offices']));
  //load view
  $this->data['subview'] = 'admin/post_office/index';
  $this->load->view('admin/_layout_main', $this->data);
}




//Edit post_office
 public function post_office_edit($id = NULL)
 {

  if($id){
    $this->data['post_office'] = $this->post_office_m->get($id);
    @count($this->data['post_office']) || $this->data['errors'][] = 'post_office Could not be found';
  }else{
    $this->data['post_office'] = $this->post_office_m->get_new();

  }


   // Set up the form
  $rules = $this->post_office_m->rules;
  $this->form_validation->set_rules($rules);

  // Process the form
  if ($this->form_validation->run() == TRUE) {
      $data = $this->post_office_m->array_from_post(array('name', 'bd_name', 'zip', 'police_station', 'division', 'district'));
      
      $this->post_office_m->save($data,$id);
      redirect('admin/division/post_office');
  }


// load view
  $this->data['subview'] = 'admin/post_office/edit';
  $this->load->view('admin/_layout_main', $this->data);
}

//delete post_office
 public function post_office_delete($id){
  //Delete post_offices
  $this->post_office_m->delete($id);
  redirect('admin/division/post_office','refresh');
}

  //  Division DW
  public function division_dw($id = NULL){
    $dis = $this->division_m->division_dw();
    foreach ($dis as $key => $value ) {
      $output .= '<option value="'.$key.'">'.$value.' </option>';
    };
    echo $output;
}


  // District DW By Division
  public function district_dw($id = NULL){
      $dis = $this->division_m->district_dw($id);
      foreach ($dis as $key => $value ) {
        $output .= '<option value="'.$key.'">'.$value.' </option>';
      };
      echo $output;
  }

  // police_station_dw DW By Division
  public function police_station_dw($id = NULL){
    $dis = $this->division_m->police_station_dw($id);
    foreach ($dis as $key => $value ) {
      $output .= '<option value="'.$key.'">'.$value.' </option>';
    };
    echo $output;
  }

    // post_office_dw DW By Division
    public function post_office_dw($id = NULL){
      $dis = $this->division_m->post_office_dw($id);
      foreach ($dis as $key => $value ) {
        $output .= '<option value="'.$key.'">'.$value.' </option>';
      };
      echo $output;
    }

    // get zip by po DW By Division
    public function get_zip_by_po($id = NULL){
      echo $dis = $this->division_m->get_zip_by_po($id);
    }


    public function division_by_id($id){
      echo $dis = $this->division_m->division_by_id($id);
    }

    public function district_by_id($id){
      echo $dis = $this->division_m->district_by_id($id);
    }

    public function police_station_by_id($id){
      echo $dis = $this->division_m->police_station_by_id($id);
    }

    public function post_office_by_id($id){
      echo $dis = $this->division_m->post_office_by_id($id);
    }
}
