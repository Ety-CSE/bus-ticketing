<?php

/**
 * User Controller
 */
class Customer extends Frontend_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_m');
    $this->load->helper('form');
  }

  public function index()
  {
      $this->data['services'] = $this->service_m->top_service('15');
      $this->data['subview'] = 'services';
      $this->load->view('_layout_main', $this->data);
  }

//Login Page
  public function customer_login(){
    $data['re_url'] = $this->input->post('re_url');

    $dashboard = $data['re_url'];

    // dump($this->input->post('email'));
    // die();

    $this->db->where(array('email'=> $this->input->post('email'),'password'=> $this->user_m->hash($this->input->post('password'))));
    $user = $this->db->get('users')->row();

    if (@count($user)) {
      // Log in user
      $data = array(
        'name' => $user->name,
        'email' => $user->email,
        'id' => $user->id,
        'type' => $user->type,
        'loggedin' => TRUE,
      );
      $this->session->set_userdata($data);
      redirect($dashboard);
    }else{
      
      redirect($dashboard);
    }

    
  }



  // CUSTOMER REGISTRATION
  public function registration(){
    $this->load->model('user_m');
    if ($this->user_m->loggedin()) {
      redirect(site_url());
    } else {
      $this->data['user'] = $this->user_m->get_new();


      // Set up the form
      $rules = $this->user_m->rules_admin;
      $id || $rules['password']['rules'] .= '|required';
      $this->form_validation->set_rules($rules);

      // Process the form
      if ($this->form_validation->run() == TRUE) {
          $data = $this->user_m->array_from_post(array('name', 'email', 'phone','type','status', 'password'));
          $data['password'] = $this->user_m->hash($data['password']);
          $data['type'] = '3';
          $data['status'] = '0';
          $id = $this->user_m->save($data, $id);
          // redirect('admin/user');

          if($id){
            $data = array(
              'name' => $this->input->post('name'),
              'email' => $this->input->post('email'),
              'id' => $id,
              'type' => '3',
              'loggedin' => TRUE,
            );
            $this->session->set_userdata($data);
            redirect(site_url('admin/customer/setting'));
          }
          
      }

      $this->data['subview'] = 'admin/user/reg';
      $this->load->view('admin/_layout_modal', $this->data);
    }
  }



  // Agent REGISTRATION
  public function agent_registration(){
    $this->load->model('user_m');
    if ($this->user_m->loggedin()) {
      redirect(site_url());
    } else {
      $this->data['user'] = $this->user_m->get_new();


      // Set up the form
      $rules = $this->user_m->rules_admin;
      $id || $rules['password']['rules'] .= '|required';
      $this->form_validation->set_rules($rules);

      // Process the form
      if ($this->form_validation->run() == TRUE) {
          $data = $this->user_m->array_from_post(array('name', 'email', 'phone','type','status', 'password'));
          $data['password'] = $this->user_m->hash($data['password']);
          $data['type'] = '2';
          $data['status'] = '0';
          $id = $this->user_m->save($data, $id);
          // redirect('admin/user');

          if($id){
            $data = array(
              'name' => $this->input->post('name'),
              'email' => $this->input->post('email'),
              'id' => $id,
              'type' => '2',
              'loggedin' => TRUE,
            );
            $this->session->set_userdata($data);
            redirect(site_url('admin/customer/setting'));
          }
          
      }

      $this->data['subview'] = 'admin/user/reg';
      $this->load->view('admin/_layout_modal', $this->data);
    }
  }


  public function _unique_email($str)
  {
    // Do NOT validate if email already exists
    // UNLESS it's the email for the current user

    $id =  $this->uri->segment(4);
    $this->db->where('email', $this->input->post('email'));
    if($id )
      {
        $this->db->where('id !=', $id);
      }
    $user = $this->user_m->get();

    if (count($user)) {
      $this->form_validation->set_message('_unique_email', '%s should be unique');
      return FALSE;
    }

    return TRUE;
  }

  // District DW By Division
  public function district_dw($id = NULL){
      $dis = $this->user_m->district_dw($id);
      foreach ($dis as $key => $value ) {
        $output .= '<option value="'.$key.'">'.$value.' </option>';
      };
      echo $output;
  }

  // police_station DW By Division
  public function police_station_dw($id = NULL){
      $dis = $this->user_m->police_station_dw($id);
      foreach ($dis as $key => $value ) {
        $output .= '<option value="'.$key.'">'.$value.' </option>';
      };
      echo $output;
  }

}
