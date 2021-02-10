<?php

/**
 * Admin Panel User Controller
 */
class User extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_m');
  }

  //User List
  public function index(){
    // get user
    $this->user_m->access_permission('1');
    $this->load->helper('aurora');
    $this->data['users'] = $this->user_m->get_admin();

    //load view
    $this->data['subview'] = 'admin/user/index';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //Edit User
   public function edit($id = NULL)
   {
    $this->user_m->access_permission('1');

    if($id){
      if ($id != $this->session->userdata('id')) {
        $this->user_m->access_permission('1');
      }
      $this->data['user'] = $this->user_m->get($id);
      @count($this->data['user']) || $this->data['errors'][] = 'User Could not be found';
    }else{
      $this->user_m->access_permission('1');
      $this->data['user'] = $this->user_m->get_new();

    }


    // Set up the form
    $rules = $this->user_m->rules_admin;
    $id || $rules['password']['rules'] .= '|required';
      $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->user_m->array_from_post(array('name', 'email', 'phone','type','status', 'password'));
        $data['password'] = $this->user_m->hash($data['password']);
        $this->user_m->save($data, $id);
        redirect('admin/user');
    }


    // load view
    $this->data['subview'] = 'admin/user/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }




  //delete user
   public function delete($id){
    //Delete Users
    $this->user_m->delete($id);
    redirect('admin/user','refresh');
  }

//Login Page
  public function login(){

    $dashboard = $this->user_m->dashboard_by_usertype($this->session->userdata('type'));

    //Check If login
    $this->user_m->loggedin() == FALSE || redirect($dashboard);
    $rules = $this->user_m->rules;
    $this->form_validation->set_rules($rules);
    if ($this->form_validation->run() == TRUE) {
      //We can Login and redirect

      if($this->user_m->login() == TRUE){
        redirect($dashboard);
      }else{
        // Login Error;
        $this->session->set_flashdata('error', 'This email/password connection does not match');
        redirect('admin/user/login', 'refresh');
      }
    }
    $this->data['subview'] = 'admin/user/login';
    $this->load->view('admin/_layout_modal', $this->data);
  }

//Login Page
public function login_ajax(){
    
    $email = $this->input->post('email');
    $pass = $this->input->post('pass');
    if($this->user_m->login_ajax($email, $pass) == TRUE){
      echo $this->session->userdata('id');
    }else{
      // Login Error;
      echo "false";
    }
  
}

//Login Page
public function reg_ajax(){
  $id = ""; 
  $data = $this->user_m->array_from_post(array('name', 'email', 'password'));
  $data['password'] = $this->user_m->hash($data['password']);
  // $data['name'] = '3';
  // $data['email'] = '3';
  $data['type'] = '3';
  $data['status'] = '0';
  $save = $this->db->insert('users',$data);


  if($save){
    $data = array(
      'name' => $data['name'],
      'email' => $data['email'],
      'id' => $this->db->insert_id(),
      'type' => $data['type'],
      'loggedin' => TRUE,
    );
    $this->session->set_userdata($data);
    echo $this->session->userdata('id');
  }else{
    dump('false');
  }

}


  // Log Out Page
  public function logout(){
    $this->user_m->logout();
    redirect('');
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
      $this->form_validation->set_message('_unique_email', '%s is already used.');
      return FALSE;
    }

    return TRUE;
  }




  // Create User with email
  public function with_email(){
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
          // dump($data);
          // die();
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
            redirect(site_url('admin/user/regSuccess'));
          }
          
      }

      //load view
      $this->data['subview'] = 'admin/user/withEmail';
      $this->load->view('admin/_layout_modal', $this->data);
    }    
  }


  // Create User with phone
  public function with_phone(){
    //load view
    $this->data['subview'] = 'admin/user/withPhone';
    $this->load->view('admin/_layout_modal', $this->data);
  }

  // forgot password
  public function forgot_password(){
    //load view
    $this->data['subview'] = 'admin/user/forgotPass';
    $this->load->view('admin/_layout_modal', $this->data);
  }

  // Create Account
  public function create_account(){
    //load view
    $this->data['subview'] = 'admin/user/createAccount';
    $this->load->view('admin/_layout_modal', $this->data);
  }

  // regSuccess
  public function regSuccess(){
    //load view
    $this->data['subview'] = 'admin/user/regSuccess';
    $this->load->view('admin/_layout_modal', $this->data);
  }




// DIFFERENT USERS METHODS

    //User List
  public function customer(){
    // get user
    $this->data['users'] = $this->user_m->get_customer();
    $this->load->helper('aurora');

    //load view
    $this->data['subview'] = 'admin/user/customer';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //User List
  public function customer_edit(){
    // get user
    $this->data['users'] = $this->user_m->get();
    $this->load->helper('aurora');

    //load view
    $this->data['subview'] = 'admin/user/customer_edit';
    $this->load->view('admin/_layout_main', $this->data);
  }


  //User List
  public function owner(){
    // get user
    $this->data['users'] = $this->user_m->get_owner();
    $this->load->helper('aurora');

    //load view
    $this->data['subview'] = 'admin/user/owner';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //User List
  public function owner_edit(){
    // get user
    $this->data['users'] = $this->user_m->get();
    $this->load->helper('aurora');

    //load view
    $this->data['subview'] = 'admin/user/index';
    $this->load->view('admin/_layout_main', $this->data);
  }


  //User List
  public function driver(){
    // get user
    $this->data['users'] = $this->user_m->get_driver();
    $this->load->helper('aurora');

    //load view
    $this->data['subview'] = 'admin/user/driver';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //User List
  public function driver_edit(){
    // get user
    $this->data['users'] = $this->user_m->get();
    $this->load->helper('aurora');

    //load view
    $this->data['subview'] = 'admin/user/index';
    $this->load->view('admin/_layout_main', $this->data);
  }


  //User List
  public function customer_care(){
    // get user
    $this->data['users'] = $this->user_m->get_customer_care();
    $this->load->helper('aurora');

    //load view
    $this->data['subview'] = 'admin/user/customer_care';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //User List
  public function customer_care_edit(){
    // get user
    $this->data['users'] = $this->user_m->get();
    $this->load->helper('aurora');

    //load view
    $this->data['subview'] = 'admin/user/index';
    $this->load->view('admin/_layout_main', $this->data);
  }



}
