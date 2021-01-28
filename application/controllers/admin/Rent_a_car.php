<?php

/**
 * Admin Panel rentacar Controller
 */
class Rent_a_car extends Admin_Controller
{

  public function __construct()
    {
      parent::__construct();
      $this->load->model('rentacar_m');
      $this->load->model('offer_m');
      $this->load->model('order_m');
      $this->load->model('buyer_request_m');
      $this->load->model('bid_m');
      $this->load->model('car_m');
      $this->user_m->access_permission('2');
    }


  //rentacar List
  public function index(){
    // get rentacar

    //load view
    $this->data['subview'] = 'admin/dashboard/owner';
    $this->load->view('admin/_layout_main', $this->data);

    
  }

  // OFFER
  //offer List
  public function offer(){
      // get rentacar
      $this->load->helper('aurora');
      $this->data['offers'] = $this->offer_m->offer_by_rentacar();
  
      //load view
      $this->data['subview'] = 'admin/owner/offer_list';
      $this->load->view('admin/_layout_main', $this->data);
  }

  //Create/Edit offer
  public function edit_offer($id = NULL)
   {

    if($id){
      $this->data['offer'] = $this->offer_m->get($id);
      @count($this->data['offer']) || $this->data['errors'][] = 'offer Could not be found';
    }else{
      $this->data['offer'] = $this->offer_m->get_new();

    }

    // Set up the form
    $rules = $this->offer_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->offer_m->array_from_post(array(
          'rentacar',
          'title',
          'details',
          'car',
          'year',
          'conditions',
          'ac',
          'fuel',
          'hourly',
          'daily',
          'monthly',
          'status',
        ));

        if(!$id){
          $data['date'] = date('Y-m-d h:i:s a');
        }

        $data['fuel'] = implode(',', $this->input->post('fuel'));

        $data['hourly'] = serialize(array(
          'h_details' => $this->input->post('h_details'),
          'h_driver_lunch' => $this->input->post('h_driver_lunch'),
          'h_fuel' => $this->input->post('h_fuel'),
          'h_overtime' => $this->input->post('h_overtime'),
          'h_rcost' => $this->input->post('h_rcost'),
          'h_rent' => $this->input->post('h_rent'),
        ));

        $data['daily'] = serialize(array(
          'd_details' => $this->input->post('d_details'),
          'd_driver_lunch' => $this->input->post('d_driver_lunch'),
          'd_fuel' => $this->input->post('d_fuel'),
          'd_rent' => $this->input->post('d_rent'),
          'd_rcost' => $this->input->post('d_rcost'),
          'd_hour' => $this->input->post('d_hour'),
          'd_overtime_include' => $this->input->post('d_overtime_include'),
          'd_overtime' => $this->input->post('d_overtime'),
          'd_overtime_rent' => $this->input->post('d_overtime_rent'),
        ));

        $data['monthly'] = serialize(array(
          'm_details' => $this->input->post('m_details'),
          'm_driver_lunch' => $this->input->post('m_driver_lunch'),
          'm_fuel' => $this->input->post('m_fuel'),
          'm_hour' => $this->input->post('m_hour'),
          'm_rent' => $this->input->post('m_rent'),
          'm_rcost' => $this->input->post('m_rcost'),
          'm_overtime_include' => $this->input->post('m_overtime_include'),
          'm_overtime' => $this->input->post('m_overtime'),
          'm_overtime_rent' => $this->input->post('m_overtime_rent'),
        ));

        $this->offer_m->save($data, $id);
        redirect('admin/rent_a_car/offer');
    }

    // load view
    $this->data['subview'] = 'admin/owner/offer';
    $this->load->view('admin/_layout_main', $this->data);
  }

  // delete order
  public function delete($id){
    //Delete order
    $this->offer_m->delete($id);
    redirect('admin/rent_a_car/order','refresh');
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
          redirect('admin/rent_a_car/order');
      }

      // load view
      $this->data['subview'] = 'admin/owner/order';
      $this->load->view('admin/_layout_main', $this->data);
  }

  
  // delete rentacar
  public function delete_order($id){
    //Delete offer
    $this->order_m->delete($id);
    redirect('admin/rent_a_car/order','refresh');
  }

  // BUYER REQUEST
  //buyer request List
  public function buyer_request(){
    // get rentacar
    $this->load->helper('aurora');
    $this->data['buyer_requests'] = $this->buyer_request_m->active_buyer_request();

    //load view
    $this->data['subview'] = 'admin/owner/buyer_request';
    $this->load->view('admin/_layout_main', $this->data);
  }

  // BID
  //buyer request List
  public function my_bid(){
    // get rentacar
    $this->load->helper('aurora');
    $this->data['bids'] = $this->bid_m->bid_by_rentacar();

    //load view
    $this->data['subview'] = 'admin/owner/my_bid';
    $this->load->view('admin/_layout_main', $this->data);
  }
  //Edit bid
  public function bid($id = NULL)
    {
      $this->data['buyer_request'] = $this->buyer_request_m->get($id);
      $r_id = $this->data['buyer_request']->request_id;
      $this->data['bid'] = $this->bid_m->bid_by_buyer_request($r_id);

      $bid_id = $this->data['bid'];
      if($bid_id){
       @count($this->data['bid']) || $this->data['errors'][] = 'bid Could not be found';
      }else{
        $this->data['bid'] = $this->bid_m->get_new();
  
      }
 
 
     // Set up the form
     $rules = $this->bid_m->rules;
     $this->form_validation->set_rules($rules);
 
     // Process the form
     if ($this->form_validation->run() == TRUE) {
         $data = $this->bid_m->array_from_post(array(
             'request_id',
             'offer_id',
             'rentacar',
             'package',
             'offer_details',
             'rent',
             'date',
             'status',
         ));
         
         
         $hourly = serialize(array(
         'details' => $this->input->post('details'),
         'h_driver_lunch' => $this->input->post('h_driver_lunch'),
         'h_fuel' => $this->input->post('h_fuel'),
         'h_overtime' => $this->input->post('h_overtime'),
         'h_rcost' => $this->input->post('h_rcost'),
         // 'h_rent' => ,
         ));
   
         $daily = serialize(array(
         'details' => $this->input->post('details'),
         'd_driver_lunch' => $this->input->post('d_driver_lunch'),
         'd_fuel' => $this->input->post('d_fuel'),
         // 'd_rent' => $this->input->post('d_rent'),
         'd_rcost' => $this->input->post('d_rcost'),
         'd_hour' => $this->input->post('d_hour'),
         'd_overtime_include' => $this->input->post('d_overtime_include'),
         'd_overtime' => $this->input->post('d_overtime'),
         'd_overtime_rent' => $this->input->post('d_overtime_rent'),
         ));
 
         $monthly = serialize(array(
         'details' => $this->input->post('details'),
         'm_driver_lunch' => $this->input->post('m_driver_lunch'),
         'm_fuel' => $this->input->post('m_fuel'),
         'm_hour' => $this->input->post('m_hour'),
         // 'm_rent' => $this->input->post('m_rent'),
         'm_rcost' => $this->input->post('m_rcost'),
         'm_overtime_include' => $this->input->post('m_overtime_include'),
         'm_overtime' => $this->input->post('m_overtime'),
         'm_overtime_rent' => $this->input->post('m_overtime_rent'),
         ));
 
         $custom = serialize(array(
         'details' => $this->input->post('details'),
         'c_driver_lunch' => $this->input->post('c_driver_lunch'),
         'c_fuel' => $this->input->post('c_fuel'),
         'c_hour' => $this->input->post('c_hour'),
         // 'c_rent' => $this->input->post('c_rent'),
         'c_rcost' => $this->input->post('c_rcost'),
         'c_overtime_include' => $this->input->post('c_overtime_include'),
         'c_overtime' => $this->input->post('c_overtime'),
         'c_overtime_rent' => $this->input->post('c_overtime_rent'),
         ));
 
         switch ($this->input->post('package')) {
             case 'hourly':
               $data['rent'] = $this->input->post('h_rent');
               $data['offer_details'] = $hourly;
               break;
             case 'daily':
               $data['rent'] = $this->input->post('d_rent');
               $data['offer_details'] = $daily;
               break;
             case 'monthly':
               $data['rent'] = $this->input->post('m_rent');
               $data['offer_details'] = $monthly;
               break;
             case 'custom':
               $data['rent'] = $this->input->post('m_rent');
               $data['offer_details'] = $custom;
               break;  
             default:
               $data['rent'] = $this->input->post('c_rent');
               $data['offer_details'] = $hourly;
           }
 
         $data['date'] = date('Y-m-d h:i:s a');
         $this->bid_m->save($data,$bid_id->id);
         redirect('admin/rent_a_car/buyer_request');
     }
   // load view
     $this->data['subview'] = 'admin/owner/bid';
     $this->load->view('admin/_layout_main', $this->data);
   }
 

  

  // AJAX FUNCTIONS

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
