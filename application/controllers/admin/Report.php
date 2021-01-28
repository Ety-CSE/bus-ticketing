<?php

/**
 * Admin Panel report Controller
 */
class Report extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('report_m');
    $this->report_m->access_permission('1');

  }

  //report List
  public function index(){
    // get report
    $this->load->helper('aurora');
    $this->data['reports'] = $this->report_m->get();

    // var_dump(sizeof($this->data['reports']));
    //load view
    $this->data['subview'] = 'admin/report/index';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //Edit report
   public function edit($id = NULL)
   {

    if($id){
      $this->data['report'] = $this->report_m->get($id);
      @count($this->data['report']) || $this->data['errors'][] = 'report Could not be found';
    }else{
      @$this->data['report'] = $this->report_m->get_new();

    }


    // Set up the form
    $rules = $this->report_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->report_m->array_from_post(array(
          'rentacar',
          'type',
          'report',
          'actions',
          'customer',
          'status', 
          'date'       
        ));

        $data['date'] = '';

        $this->report_m->save($data, $id);
        redirect('admin/report');
    }


  // load view
    $this->data['subview'] = 'admin/report/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete report
   public function delete($id){
    //Delete reports
    $this->report_m->delete($id);
    redirect('admin/report','refresh');
  }


}
