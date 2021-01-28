<?php

/**
 * Admin Panel page Controller
 */
class Page extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('page_m');
    // $this->load->model('media_m');
    $this->page_m->access_permission('1');

    // $this->session->set_userdata('upload_dir', $this->uri->segment(2));

  }

  //page List
  public function index(){
    // get page
    $this->load->helper('aurora');
    $this->data['pages'] = $this->page_m->get();

    // var_dump(sizeof($this->data['pages']));
    //load view
    $this->data['subview'] = 'admin/page/index';
    $this->load->view('admin/_layout_main', $this->data);

    
  }

  //Edit page
   public function edit($id = NULL)
   {

    if($id){
      $this->data['page'] = $this->page_m->get($id);
      @count($this->data['page']) || $this->data['errors'][] = 'page Could not be found';
    }else{
      $this->data['page'] = $this->page_m->get_new();

    }


    // Set up the form
    $rules = $this->page_m->rules;
    $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->page_m->array_from_post(array('title', 'content', 'setting', 'status'));
        $slug = str_replace(" ","-",strtolower($this->input->post('slug')));
        $data['slug'] = $slug;

        $this->page_m->save($data, $id);
        redirect('admin/page');
    }


  // load view
    $this->data['subview'] = 'admin/page/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete page
   public function delete($id){
    //Delete pages
    $this->page_m->delete($id);
    redirect('admin/page','refresh');
  }


}
