<?php
/**
 *
 */
class MY_Model extends CI_Model
{
  //Basic Variables
  protected $_table_name = '';
  protected $_primary_key = 'id';
  protected $_primary_filter = 'intval';
  protected $_order_by = '';
  public $rules = array();
  protected $_timestamps = FALSE;

  function __construct()
  {
    parent::__construct();
  }

  //array form post
  public function array_from_post($fields)
  {
    $data = array();
    foreach ($fields as $field) {
      $data[$field] = $this->input->post($field);
    }
    return $data;
  }

  //Get Method
  public function get($id = NULL, $single = FALSE)
  {
    if ($id !== NULL) {
      $filter = $this->_primary_filter;
      $id = $filter($id);

      $this->db->where($this->_primary_key, $id);
      $method = 'row';
    }elseif($single == TRUE){
      $method = 'row';
    }else{
      $method = 'result';
    }


    // if (!count($this->db->ar_orderby)) {
    //   $this->db->order_by($this->_order_by);
    // }
    if(@!count($this->db->order_by($this->_order_by))) {
        $this->db->order_by($this->_order_by);
    }
    return $this->db->get($this->_table_name)->$method();
  }
// if(!count($this->db->order_by($this->_order_by))) { $this->db->order_by($this->_order_by); }

  //Get_By Method
  public function get_by($where, $single = FALSE)
  {
    $this->db->where($where);
    return $this->get(NULL, $single);

  }

  //Save Method
  public function save($data, $id = NULL)
  {
    // Set timestamps
    if ($this->_timestamps == TRUE) {
      $now = date('Y-m-d H:i:s');
      $id || $data['created'] = $now;
      $data['modified'] = $now;
    }
    //Insert
    if ($id === NULL) {
      !isset($data[$this->_primary_key]) || $data[$this->_primary_key] = NULL;
      $this->db->set($data);
      $this->db->insert($this->_table_name);
      $id = $this->db->insert_id();
    }
    //Update
    else{
      $filter = $this->_primary_filter;
      $id = $filter($id);
      $this->db->set($data);
      $this->db->where($this->_primary_key, $id);
      $this->db->update($this->_table_name);
    }

    return $id;
  }

  //Delete Method
  public function delete($id)
  {
    $filter = $this->_primary_filter;
    $id = $filter($id);

    if (!$id) {
      return FALSE;
    }else {
      $this->db->where($this->_primary_key, $id);
      $this->db->limit(1);
      $this->db->delete($this->_table_name);

    }
  }


  // Hashing Password
  public function hash($string)
  {
    return md5($string.$this->config->item('encryption_key'));
  }

  
  public function status($int){
    switch ($int) {
      case '0':
        $status = 'active';
        break;
      case '1':
        $status = 'Suspend';
        break;
      case '2':
        $status = 'Damaged';
        break;

      default:
        $status = 'No Status Found';
        break;
    }
    return $status;
  }

  // Notification_type
  public function n_type($int){
    switch ($int) {
      case '0':
        $type = 'Token';
        break;
      case '1':
        $type = 'Order';
        break;
      case '2':
        $type = 'Order Complete';
        break;
      case '3':
        $type = 'Review';
        break;

      default:
        $type = 'Not a Valid Notification';
        break;
    }
    return $type;
  }

  // Notification_status
  public function n_status($int){
    switch ($int) {
      case '0':
        $type = 'Unseen';
        break;
      case '1':
        $type = 'Seen';
      default:
        $type = 'No Status';
        break;
    }
    return $type;
  }

// USER ACCESS for admin area
  public function access_permission($type){
    if ($type != $this->session->userdata('type')) {
      switch ($this->session->userdata('type')) {
        case '1':
          $dashboard = 'admin/dashboard';
          break;
        case '2':
          $dashboard = 'admin/agent';
          break;
        case '3':
          $dashboard = 'admin/customer';
          break;

        case '4':
          $dashboard = 'admin/customer';
          break;

        default:
          $dashboard = 'admin/dashboard';
          break;
      }
        redirect($dashboard);
    }
  }


// Define User Dashboard
  public function dashboard_by_usertype($type){
    switch ($type) {
        case '1':
          $dashboard = 'admin/dashboard';
          break;
        case '2':
          $dashboard = 'admin/dashboard';
          break;
        case '3':
          $dashboard = 'admin/customer';
          break;

        case '4':
          $dashboard = 'admin/customer';
          break;

        default:
          $dashboard = 'admin/dashboard';
          break;
      }
      return $dashboard;
  } 


// S Type dW
 public function type_by_id($id = NULL){
    $this->db->where('id', $id);

    $parent = $this->db->get('category');

    foreach ($parent->result() as $row)
    {
        echo $row->cat_name;
    }
  }


// category by id
  public function category_by_id($id = NULL){
    $this->db->where('id', $id);

    $parent = $this->db->get('category');

    foreach ($parent->result() as $row)
    {
        echo $row->cat_name;
    }
  }


// brand_name_by_id
  public function brand_name_by_id($id = NULL){
    $this->db->where('id', $id);

    $brand = $this->db->get('brand');

    foreach ($brand->result() as $row)
    {
        return $row->name;
    }
  }


// Category dW
  public function categories(){
    $this->db->where('cat_parent', '== 0');

    $parent = $this->db->get('category');

    $array = array(
      0 => 'Select Category'
    );
    if (count($parent->result())) {
      foreach ($parent->result() as $loc) {
        $array[$loc->id] = $loc->cat_name;
      }
    }
    return $array;

  }

  // Brand dW
  public function brands(){

    $parent = $this->db->get('brand');

    $array = array(
      0 => 'Select Brand'
    );
    if (count($parent->result())) {
      foreach ($parent->result() as $brand) {
        $array[$brand->id] = $brand->name;
      }
    }
    return $array;

  }

  // s category by category dW
  public function s_categories($cat = NULL){
    $this->db->where('cat_parent', $cat);

    $parent = $this->db->get('category');

    $array = array(
      0 => 'Select Sub Category'
    );
    if (count($parent->result())) {
      foreach ($parent->result() as $loc) {
        $array[$loc->id] = $loc->cat_name;
      }
    }
    return $array;

  }

  // s type dW
    public function types(){
    $this->db->where('cat_parent', '2');

    $parent = $this->db->get('category');

    $array = array(
      0 => 'Select Services Type'
    );
    if (count($parent->result())) {
      foreach ($parent->result() as $loc) {
        $array[$loc->id] = $loc->cat_name;
      }
    }
    return $array;

  }

  // List of category
  public function s_category(){
    $this->db->where('cat_parent', '!= 0');

    $query = $this->db->get('category');

   
    return $query->result();

  }

  // List of sub category
  public function s_type($id){
    $this->db->where('cat_parent', $id);

    $query = $this->db->get('category');

    
    return $query->result();

  }


// Search Services
public function search_s($str){
  $this->db->order_by("s_name", "asc");
  $this->db->or_like(array('s_name' => $str, 's_des' => $str));

  $query = $this->db->get('services');  
  return $query->result();

}


// Services sort
public function services_sort($cat){
  $this->db->where("s_cat", $cat);

  $query = $this->db->get('services');  
   
  return $query->result();
}


//================================================
// Division DW

public function division_dw(){
  $this->db->order_by("name", "desc");

  $query = $this->db->get('division');  
   $array = array(
      "" => 'Select Division'
    );
    if (count($query->result())) {
      foreach ($query->result() as $loc) {
        $array[$loc->id] = $loc->name;
      }
    }
    return $array;

}

// Division Name by id
public function division_by_id($id){
  $this->db->where('id', $id);

  $query = $this->db->get('division');  
  $s = $query->row();
  return  $s->name;

}

// ==========================================
// District dW
public function district_dw($id=NULL){
  $this->db->where('division', $id);
  $this->db->order_by("name", "desc");

  $query = $this->db->get('district');  
   $array = array(
      "" => 'Select District'
    );
    if (count($query->result())) {
      foreach ($query->result() as $loc) {
        $array[$loc->id] = $loc->name;
      }
    }
    return $array;

}

// district_by_id
public function district_by_id($id){
  $this->db->where('id', $id);

  $query = $this->db->get('district');  
  $s = $query->row();
  return  $s->name;

}


// =========================
// police_station_dw

public function police_station_dw($id){
  $this->db->where('district', $id);

  $query = $this->db->get('police_station');  
 $array = array(
      "" => 'Select District'
    );
    if (count($query->result())) {
      foreach ($query->result() as $loc) {
        $array[$loc->id] = $loc->name;
      }
    }
    return $array;

}

// district_by_id
public function police_station_by_id($id){
  $this->db->where('id', $id);

  $query = $this->db->get('police_station');  
  $s = $query->row();
  return  $s->name;

}


// =============================

// Search Services DW
public function services_dw(){
  $this->db->order_by("s_name", "asc");

  $query = $this->db->get('services');  
   $array = array(
      "" => 'Select Services'
    );
    if (count($query->result())) {
      foreach ($query->result() as $loc) {
        $array[$loc->id] = $loc->s_name;
      }
    }
    return $array;

}


// Seller Services
  public function get_seller_services(){
    $seller = $this->session->userdata('id');
    $this->db->where('seller_id', $seller);

    $query = $this->db->get('services');  
    return $s = $query->result(); 

  }

// service_by_id
public function service_by_id($id){
  $this->db->where('id', $id);

  $query = $this->db->get('services');  
  $s = $query->row();
  return $s->s_name;
  // return $s->photo;

}

// service_by_id with ICON
public function service_by_id_icon($id){
  $this->db->where('id', $id);

  $query = $this->db->get('services');  
  return $s = $query->row();  

}

// services_by_type
public function services_by_type($type){
  // $this->db->order_by("s_name", "asc");
  $this->db->where('s_type', $type);

  $query = $this->db->get('services');  
  $s = $query->result();
  return $s;
}



// top_service
public function top_service($ten){
  $this->db->from('services');
  $this->db->order_by("services.id", "asc");
  $this->db->limit($ten);

  $query = $this->db->get();  
  $s = $query->result();
  return $s;
}

// top_service
public function get_service($ten = NULL){
  $this->db->from('services');
  $this->db->where('services.id',$ten);

  $query = $this->db->get();  
  $s = $query->row();
  return $s;
}

// services_by_type
public function services_by_category($cat){
  // $this->db->order_by("s_name", "asc");
  $this->db->where('s_cat', $cat);

  $query = $this->db->get('services');  
  $s = $query->result();
  return $s;

}

// services_by_token ID
public function service_by_token($id){
  $this->db->where('token', $id);

  $query = $this->db->get('tokens');  
  $t = $query->row();


  $this->db->where('id', $t->service_id);
  $query = $this->db->get('services');  
  $s = $query->row();

  return $s->s_name;

}




// TOKEN TYPE
public function token_status($int){
  switch ($int) {
    case '0':
      $status = 'Panding';
      break;
    case '1':
      $status = 'Order';
      break;
    case '2':
      $status = 'Cancle';
      break;

    default:
      $status = 'Junk Token';
      break;
  }
  return $status;
}

// order TYPE
public function order_status($int){
  switch ($int) {
    case '0':
      $status = 'Panding';
      break;
    case '1':
      $status = 'Connected!';
      break;
    case '2':
      $status = 'Reviewed';
      break;
      
    default:
      $status = 'Junk Token';
      break;
  }
  return $status;
}

// Seller Status
public function seller_status($int){
  switch ($int) {

    case NULL:
      $status = 'Not Requested';
      break;
    case '0':
      $status = 'Pending';
      break;
    case '1':
      $status = 'Approved';
      break;
      
    default:
      $status = 'Junk User';
      break;
  }
  return $status;
}



// S By order id
  public function token_by_order($id = NULL){
    $this->db->where('id', $id);

    $query = $this->db->get('tokens');
    $tokens = $query->row();

    return $tokens->token; 

   }

// Total Order
  public function total_order($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->get('orders');
    $order = $query->row();
    $price = unserialize($order->o_product);
    $t_price = 0;
    if($price['0']['0']){
      // echo 'hello';
      for ($i=0; $i<=@count($price['1'])-1; $i++) {
        $t_price = $t_price+$price['1'][$i];
      }
    }
    // dump($price);
    return $t_price+$order->s_charge;

  }


// Admin User Type
public function user_type($int){
  switch ($int) {
    case '0':
      $usertype = 'New User';
      break;
    case '1':
      $usertype = 'Admin';
      break;
    case '2':
      $usertype = 'Affillet Agent';
      break;
    case '3':
      $usertype = 'Customer';
      break;
    case '4':
      $usertype = 'Rent A Car';
      break;

    default:
      $usertype = 'No User';
      break;
  }
  return $usertype;
}


// Load Admin header
public function load_header($type){
  switch ($type) {
    case '0': //new user
      $header = 'admin/common/_header';
      break;
    case '1': //admin
      $header = 'admin/common/_header';
      break;
    case '2': //services provicer
      $header = 'admin/common/_header';
      break;
    case '3': //customer
      $header = 'admin/common/_customer-header';
      break;
    case '4': //Office stuff
      $header = 'admin/common/_customer-header';
      break;

    default: //default header
      $header = 'admin/common/_header';
      break;
  }
  return $header;
}

// Load Admin Nav
public function load_nav($type){
  switch ($type) {
    case '1': //new user
      $header = 'admin/common/_main_navbar';
      break;
    case '2': //admin
      $header = 'admin/common/_agent_main_navbar';
      break;

    default: //default header
      $header = 'admin/common/_agent_main_navbar';
      break;
  }
  return $header;
}


// User type registration

// seller_by_agent
public function seller_by_agent(){
   $this->db->where('parent', $this->session->userdata('id'));

    $parent = $this->db->get('users');

   return $parent->result();
}

// ADMIN

// get_admin
public function get_admin(){
   $this->db->where('type', '1');

    $parent = $this->db->get('users');

   return $parent->result();
}


// CUSTOMER
public function get_customer(){
   $this->db->where('type', '3');

    $parent = $this->db->get('users');

   return $parent->result();
}

// CUSTOMER DW
    public function get_customer_dw(){
      $this->db->where('type', '3');

    $parent = $this->db->get('users');
    $array = array(
      "" => 'Select Customer'
    );
    if (count($parent->result())) {
      foreach ($parent->result() as $loc) {
        $array[$loc->id] = $loc->name;
      }
    }
    return $array;

  }

// customer_by_id
public function customer_by_id($id){
  // $this->db->order_by("s_name", "asc");
  $this->db->where('id', $id);

  $query = $this->db->get('users');  
  $s = $query->row();
  return $s->name;

}

// customer_by_id
public function customer_info_id($id){
  $this->db->select(array("photo", "name","phone","address","zip","police_station", "district", "division"));
  $this->db->where('id', $id);

  $query = $this->db->get('users');  
  $s = $query->row();
  return $s;

}

// SUPPLIER
public function get_supplier(){
   $this->db->where('type', '2');

    $parent = $this->db->get('users');

   return $parent->result();
}

// supplier DW
public function get_supplier_dw(){
    $this->db->where('type', '4');

    $parent = $this->db->get('users');
    $array = array(
      0 => 'Select Seller'
    );
    if (count($parent->result())) {
      foreach ($parent->result() as $loc) {
        $array[$loc->id] = $loc->name;
      }
    }
    return $array;

  }


// EMPLOYEE
public function get_seller(){
   $this->db->where('type', '4');

    $parent = $this->db->get('users');

   return $parent->result();
}

// TOKEN token_by_customer
 public function token_by_customer(){
   $this->db->where(array('customer_id' => $this->session->userdata('id'), 'status' => '0'));

    $parent = $this->db->get('tokens');

   return $parent->result();
}

// TOKEN customer by token
 public function customer_by_token($token=NULL){
   $this->db->where('token' , $token);

    $parent = $this->db->get('tokens')->row();

   return $parent->customer_id;    
}

// Connect connect_by_seller
 public function connect_by_seller(){
    $this->db->where('seller_id', $this->session->userdata('id'));
    $connect = $this->db->get('connect');

   return $connect->result();
}


// Connect order_by_customer
 public function connect_by_customer(){
    $this->db->where('customer_id', $this->session->userdata('id'));
    $connect = $this->db->get('connect');

   return $connect->result();
}

// Connect order_by_ID
 public function service_by_connect($id=NULL){

    $this->db->where('id', $id);   

    $query = $this->db->get('connect');
    $connect = $query->row();
    return $connect->service_id;
}

// Connect by services
 public function connect_by_service($id = NULL){
    $this->db->where('service_id', $id);
    $connect = $this->db->get('connect');

   return $connect->result();
}


// review_by_token
 public function review_by_token($token=NULL){

    $this->db->where('token', $token);
    $review = $this->db->get('reviews');
    return $review->row();
  }

// review_by_service
 public function review_by_service($id=NULL){

    $this->db->where('service_id', $id);
    $review = $this->db->get('reviews');
    return $review->result();
  }


 public function star_by_review($service_id = NULL){
    $this->db->where('service_id', $service_id);
    $review = $this->db->get('reviews');
    $r = $review->result();

    // dump($r);
    $star = intval(0);
    foreach ($r as $r_s) {
      $star += intval($r_s->review);

    }
    if ($r) {
      $avg_star = $star/sizeof($r);
    } else {
      $avg_star = '0';
      }
    
    $unit = 100/5;
    return $percent = $unit*$avg_star;
 }

//=========================================

  // client_by_token
 public function client_by_token($token=NULL){

    $this->db->where('token', $token);
    $review = $this->db->get('tokens');
    $client = $review->row()->customer_id;

    // get CUSTOMER
    $this->db->where('id', $client);
    $c = $this->db->get('users');

    return $c->row();
  }

  // notification by customer
 public function notification_by_customer(){

    $this->db->where('customer_id', $this->session->userdata('id'));
    $review = $this->db->get('notifications');
    $note = $review->result();

    return $note;
  }
  // notification by customer
 public function notification_by_customer_count(){

    $this->db->where('customer_id', $this->session->userdata('id'));
    $this->db->where('status', '0');
    $review = $this->db->get('notifications');
    $note = $review->result();

    return $note;
  }





  // MEDIA FUNCTION

  public function media_by_id($id){
    $media = $this->media_m->get($id);
    if($media){
        return $media->url;
    }
  }


  // MEDIA AJAX

  public function ajax_media_by_id($id){
    $media = $this->media_m->get($id);
    if($media){
        echo $media->url;
    }
  }

  // FIle Size 
  public function convert_filesize($bytes, $decimals = 2){
    $size = array('B','kB','MB','GB','TB','PB','EB','ZB','YB');
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor];
  }

  // Image Dimantion 
  public function img_dimention($filename = NULL){
      $size = getimagesize($filename);
      $fp = fopen($filename, "rb");
      if ($size && $fp) {
          header("Content-type: {$size['mime']}");
          fpassthru($fp);
          exit;
      } else {
          // error
      }
  }

  // GET media by type
  public function media_by_type($type = NULL){
     $this->db->where('type', $type);
     $media = $this->db->get('media')->result();

     return $media;
  }
  
// GET media category DW
  public function media_cat_DW(){
    $this->db->order_by("category", "asc");

    $query = $this->db->get('media');  

    $array = array(
      "" => 'Select Category'
    );
    if (count($query->result())) {
      foreach ($query->result() as $loc) {
        $array[$loc->id] = $loc->category;
      }
    }
    return array_unique($array);

  }


  // GET media by category
  public function media_by_category($type = NULL){
    $this->db->where('type', $type);
    $media = $this->db->get('media')->result();

    return $media;
  }


  
}
