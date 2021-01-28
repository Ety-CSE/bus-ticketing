<?php

/**
 * Admin Panel notification Controller
 */
class Notification extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('notification_m');
    $this->notification_m->access_permission('1');

  }

  //notification List
  public function index(){
    // get notification
    $this->load->helper('aurora');
    $this->data['notifications'] = $this->notification_m->get();

    // var_dump(sizeof($this->data['notifications']));
    //load view
    $this->data['subview'] = 'admin/notification/index';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //Edit notification
   public function edit($id = NULL)
   {

    if($id){
      $this->data['notification'] = $this->notification_m->get($id);
      @count($this->data['notification']) || $this->data['errors'][] = 'notification Could not be found';
    }else{
      $this->data['notification'] = $this->notification_m->get_new();

    }


    // Set up the form
    $rules = $this->notification_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->notification_m->array_from_post(array(
          'user_id',
          'sub',
          'body',
          'type',
          'order_id',
          'offer_id',
          'date',
          'status',
        ));
        $data['date'] = "12/12/20";
        $this->notification_m->save($data,$id);
        redirect('admin/notification');
    }


  // load view
    $this->data['subview'] = 'admin/notification/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete notification
   public function delete($id){
    //Delete notifications
    $this->notification_m->delete($id);
    redirect('admin/notification','refresh');
  }

  public function get_customer(){
    $token = $_POST['token'];
    $customer = $this->notification_m->customer_by_token($token);
    if($customer){
        echo $customer;
    }
  }

}
