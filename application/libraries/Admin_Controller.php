<?php

/**
 * Admin_Controller (Admin Controller for Admin Users)
 */
class Admin_Controller extends MY_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->data['meta_title'] = "Admin Panel";
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('user_m');
    

    // Check Login
    $exception_uris = array(
      'admin/user/login',
      'admin/user/logout',
      'admin/user/with_email',
      'admin/user/with_phone',
      'admin/user/forgot_password',
      'admin/user/create_account',
      'admin/user/login_ajax',
      'admin/user/reg_ajax',
      // 'booking/booking_ajax'
    );
    if (in_array(uri_string(), $exception_uris) == FALSE) {
      # code...
      if ($this->user_m->loggedin() == FALSE) {
        redirect('admin/user/login');

      }
    }
  }

  
}
