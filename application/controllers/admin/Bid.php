<?php

/**
 * Admin Panel bid Controller
 */
class Bid extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('bid_m');
    $this->bid_m->access_permission('1');

  }

  //bid List
  public function index(){
    // get bid
    $this->load->helper('aurora');
    $this->data['bids'] = $this->bid_m->get();

    // var_dump(sizeof($this->data['bids']));
    //load view
    $this->data['subview'] = 'admin/bid/index';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //Edit bid
   public function edit($id = NULL)
   {

    if($id){
      $this->data['bid'] = $this->bid_m->get($id);
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
        $this->bid_m->save($data,$id);
        redirect('admin/bid');
    }


  // load view
    $this->data['subview'] = 'admin/bid/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete bid
   public function delete($id){
    //Delete bids
    $this->bid_m->delete($id);
    redirect('admin/bid','refresh');
  }

  public function get_customer(){
    $token = $_POST['token'];
    $customer = $this->bid_m->customer_by_token($token);
    if($customer){
        echo $customer;
    }
  }

}
