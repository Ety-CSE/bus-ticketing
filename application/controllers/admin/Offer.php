<?php

/**
 * Admin Panel offer Controller
 */
class Offer extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('offer_m');
    $this->offer_m->access_permission('1');
    $this->session->set_userdata('upload_dir', $this->uri->segment(2));
  }

  //offer List
  public function index(){
    // get offer
    $this->load->helper('aurora');
    $this->data['offers'] = $this->offer_m->get();

    // var_dump(sizeof($this->data['offers']));
    //load view
    $this->data['subview'] = 'admin/offer/index';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //Edit offer
   public function edit($id = NULL)
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
        redirect('admin/offer');
    }


  // load view
    $this->data['subview'] = 'admin/offer/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete offer
   public function delete($id){
    //Delete offers
    $this->offer_m->delete($id);
    redirect('admin/offer','refresh');
  }






}
