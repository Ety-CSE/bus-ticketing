<?php

/**
 * Admin Panel trip Controller
 */
class Trip extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_m');
    $this->load->model('trip_m');
    $this->user_m->access_permission('1');


  }

  //trip List
  public function index(){
    // get trip
    $this->load->helper('aurora');
    $this->data['trips'] = $this->trip_m->get();

    //load view
    $this->data['subview'] = 'admin/trip/index';
    $this->load->view('admin/_layout_main', $this->data);

    
  }

  //Edit trip
   public function edit($id = NULL)
   {

    if($id){
      $this->data['trip'] = $this->trip_m->get($id);
      @count($this->data['trip']) || $this->data['errors'][] = 'trip Could not be found';
    }else{
      $this->data['trip'] = $this->trip_m->get_new();

    }


    // Set up the form
    $rules = $this->trip_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->trip_m->array_from_post(array(
            'route_id',
            'status',
        ));

        $trip_time = array();       

        $time = $_POST['t_of_journy'];
        foreach($time as $k => $d){
          $trip_time[$k] = array($d, $_POST['pickup_point'][$k], $_POST['drop_point'][$k], $_POST['coach'][$k], $_POST['statu'][$k]);
        }
        $data['trip_time'] = serialize($trip_time);

        $this->trip_m->save($data, $id);
        redirect('admin/trip');
    }


  // load view
    $this->data['subview'] = 'admin/trip/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  public function get_coach_by_route($id=NULL){
    $coach = $this->trip_m->coach_by_route_dw($id);
    foreach ($coach as $key => $value ) {
      $output .= '<option value="'.$key.'">'.$value.' </option>';
    };
    echo $output;
  }

  //delete trip
   public function delete($id){
    //Delete trips
    $this->trip_m->delete($id);
    redirect('admin/trip','refresh');
  }


}
