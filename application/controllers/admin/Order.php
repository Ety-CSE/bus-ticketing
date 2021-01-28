<?php

/**
 * Admin Panel order Controller
 */
class Order extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('order_m');
    $this->order_m->access_permission('1');
    $this->session->set_userdata('upload_dir', $this->uri->segment(2));
  }

  //order List
  public function index(){
    // get order
    $this->load->helper('aurora');
    $this->data['orders'] = $this->order_m->get();

    // var_dump(sizeof($this->data['orders']));
    //load view
    $this->data['subview'] = 'admin/order/index';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //Edit order
   public function edit($id = NULL)
   {

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
          'date',
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

        $this->order_m->save($data, $id);
        redirect('admin/order');
    }


  // load view
    $this->data['subview'] = 'admin/order/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete order
   public function delete($id){
    //Delete orders
    $this->order_m->delete($id);
    redirect('admin/order','refresh');
  }






}
