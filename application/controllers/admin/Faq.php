<?php

/**
 * Admin Panel faq Controller
 */
class Faq extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('faq_m');
    $this->faq_m->access_permission('1');

  }

  //faq List
  public function index(){
    // get faq
    $this->load->helper('aurora');
    $this->data['faqs'] = $this->faq_m->get();

    // var_dump(sizeof($this->data['faqs']));
    //load view
    $this->data['subview'] = 'admin/faq/index';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //Edit faq
   public function edit($id = NULL)
   {

    if($id){
      $this->data['faq'] = $this->faq_m->get($id);
      @count($this->data['faq']) || $this->data['errors'][] = 'faq Could not be found';
    }else{
      $this->data['faq'] = $this->faq_m->get_new();
    }


    // Set up the form
    $rules = $this->faq_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->faq_m->array_from_post(array(
         'question',
         'answer',
         'list_order',
         'status',         
        ));


        $this->faq_m->save($data, $id);
        redirect('admin/faq');
    }


  // load view
    $this->data['subview'] = 'admin/faq/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete faq
  public function delete($id){
    //Delete faqs
    $this->faq_m->delete($id);
    redirect('admin/faq','refresh');
  }


}
