<?php

/**
 * Admin Panel buyer_request Controller
 */
class Buyer_request extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('buyer_request_m');
    $this->buyer_request_m->access_permission('1');

  }

  //buyer_request List
  public function index(){
    // get buyer_request
    $this->load->helper('aurora');
    $this->data['buyer_requests'] = $this->buyer_request_m->get();

    // var_dump(sizeof($this->data['buyer_requests']));
    //load view
    $this->data['subview'] = 'admin/buyer_request/index';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //Edit buyer_request
   public function edit($id = NULL)
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
        redirect('admin/buyer_request');
    }


  // load view
    $this->data['subview'] = 'admin/buyer_request/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete buyer_request
   public function delete($id){
    //Delete buyer_requests
    $this->buyer_request_m->delete($id);
    redirect('admin/buyer_request','refresh');
  }

  // public function get_customer(){
  //   $token = $_POST['token'];
  //   $customer = $this->buyer_request_m->customer_by_token($token);
  //   if($customer){
  //       echo $customer;
  //   }
  // }

}
