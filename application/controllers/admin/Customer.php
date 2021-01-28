<?php

/**
 * Admin Panel rentacar Controller
 */
class Customer extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_m');
    $this->load->model('rentacar_m');
    $this->load->model('offer_m');
    $this->load->model('order_m');
    $this->load->model('buyer_request_m');
    $this->user_m->access_permission('3');
  }

  //rentacar List
  public function index(){
    //load view
    $this->data['subview'] = 'admin/dashboard/customer';
    $this->load->view('admin/_layout_main', $this->data);

    
  }

  //Buyer request List
  public function request_a_car_list(){
    // get rentacar
    $this->load->helper('aurora');
    $this->data['buyer_requests'] = $this->buyer_request_m->buyer_request_by_customer();

    //load view
    $this->data['subview'] = 'admin/customer/request_a_car_list';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //buyer_request response
  public function buyer_request_response($id = NULL){
    // get rentacar
    $this->load->helper('aurora');
    $this->data['buyer_requests'] = $this->buyer_request_m->get($id);
    $this->data['responses'] = $this->buyer_request_m->response_by_buyer_request($this->data['buyer_requests']->request_id);

    //load view
    $this->data['subview'] = 'admin/customer/request_a_car_response';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //Create/Edit Buyer request
  public function request_a_car($id = NULL)
  {

    if($id){
      $this->data['buyer_request'] = $this->buyer_request_m->get($id);
      @count($this->data['buyer_request']) || $this->data['errors'][] = 'buyer_request Could not be found';
    }else{
      $this->data['buyer_request'] = $this->buyer_request_m->get_new();

    }

    // Set up the form
    $rules = $this->buyer_request_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->buyer_request_m->array_from_post(array(
          'customer',
          'request_id',
          'pickup_info',
          'destination',
          'pass',
          'details',	
          'car',
          'date',
          'type',
          'status',
        ));

        // if(!$id){
          $data['date'] = date('Y-m-d h:i:s a');
        // }

        $data['pickup_info'] = serialize(array(
          'pickup_add' => $this->input->post('pickup_add'),
          'p_date' => $this->input->post('p_date'),
        ));


        $this->buyer_request_m->save($data,$id);
        redirect('admin/customer/request_a_car_list');
    }


  // load view
    $this->data['subview'] = 'admin/customer/request_a_car';
    $this->load->view('admin/_layout_main', $this->data);
  }

  // delete rentacar
  public function delete_request($id){
    //Delete order
    $this->buyer_request_m->delete($id);
    redirect('admin/customer/request_a_car_list','refresh');
  }



  // ORDER
    //order List
    public function order(){
      // get rentacar
      $this->load->helper('aurora');
      $this->data['orders'] = $this->order_m->order_by_rentacar();
  
      //load view
      $this->data['subview'] = 'admin/owner/order_list';
      $this->load->view('admin/_layout_main', $this->data);
  }

  //Create/Edit order
  public function edit_order($id = NULL){
  
      if($id){
        $this->data['order'] = $this->order_m->get($id);
        @count($this->data['order']) || $this->data['errors'][] = 'order Could not be found';
      }else{
        $this->data['order'] = $this->order_m->get_new();

      }


      // Set up the form
      $rules = $this->order_m->rules;
      $this->form_validation->set_rules($rules);

      // Process the form
      if ($this->form_validation->run() == TRUE) {
          $data = $this->order_m->array_from_post(array(
            'order_id',
            'offer_id',
            'rentacar',
            'package',
            'custome_offer',
            'rent',
            'car_info',
            'driver_info',
            'pickup_info',
            'destination',
            'pass_no',
            'note',
            'customer',
            'status',
          ));

          // $data['fuel'] = ;

          $data['car_info'] = serialize(array(
            'car' => $this->input->post('car'),
            'car_reg' => $this->input->post('car_reg'),
            'seat' => $this->input->post('seat'),
            'fuel' => implode(',', $this->input->post('fuel')),
            'ac' => $this->input->post('ac'),
          ));

          $data['custome_offer'] = serialize(array(
            'details' => $this->input->post('details'),
            'driver_lunch' => $this->input->post('driver_lunch'),
            'in_fuel' => $this->input->post('in_fuel'),
            'd_hour' => $this->input->post('d_hour'),
            'rent_comission' => $this->input->post('rent_comission'),
            'rcost' => $this->input->post('rcost'),
            'overtime_include' => $this->input->post('overtime_include'),
            'overtime' => $this->input->post('overtime'),
            'overtime_rent' => $this->input->post('overtime_rent'),
          ));


          $data['pickup_info'] = serialize(array(
            'p_add' => $this->input->post('p_add'),
            'p_date' => $this->input->post('p_date'),
          ));


          $data['destination'] = serialize(array(
            'd_add' => $this->input->post('d_add'),
            'd_date' => $this->input->post('d_date'),
          ));


          $data['driver_info'] = serialize(array(
            'driver' => $this->input->post('driver'),
            'd_phone' => $this->input->post('d_phone'),
            'd_lic_no' => $this->input->post('d_lic_no'),
          ));




          if(!$id){
            $data['date'] = date('Y-m-d h:i:s a');
          }

          // dump($data);
          $this->order_m->save($data, $id);
          redirect('admin/customer/order');
      }

      // load view
      $this->data['subview'] = 'admin/owner/order';
      $this->load->view('admin/_layout_main', $this->data);
  }

  
 // delete rentacar
  public function delete_order($id){
    //Delete offer
    $this->order_m->delete($id);
    redirect('admin/customer/order','refresh');
  }



  // offer_by_car_info
  public function offer_by_car_info($id){
    $car_info = $this->offer_m->offer_by_info($id);
    // dump($car_info->car);

    // car info from offer 1.car 2.fuel 3.ac
    $car = array();
    $car['car'] = $car_info->car;
    $car['fuel'] = $car_info->fuel;
    $car['ac'] = $car_info->ac;
    
    // get car info by id 1.seat 2.passanger
    $cars = $this->offer_m->car_info_by_id($car['car']);
    $car['seat'] = $cars->seat;
    $car['pass'] = $cars->pass;
    
    echo json_encode($car);
  }

  // package_by_car_info
  public function package_by_car_info(){
    $id = $this->input->post('id');
    $packages = $this->input->post('package');
    $package_info = $this->offer_m->package_by_info($id, $packages);
   
    
    switch ($packages) {
      case 'hourly':
        $package = unserialize($package_info->hourly);
        break;
      case 'daily':
        $package = unserialize($package_info->daily);
        break;
      case 'monthly':
        $package = unserialize($package_info->monthly);
        break;
      default:
      $package = unserialize($package_info->daily);
    }

    echo json_encode($package);
    
  }

}
