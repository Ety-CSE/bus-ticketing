<?php
/**
 *
 * USER - 141
 * ADDRESS - 410
 * MEDIA - 511
 * SERVICE - 596
 * 
 * 
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


  // Category
    
  public function category($int){
    switch ($int) {
      case '0':
        $category = 'Economy';
        break;
      case '1':
        $category = 'Business';
        break;
      case '2':
        $category = 'VIP';
        break;

      default:
        $category = 'No Category Found';
        break;
    }
    return $category;
  }

  // Category

  // type
  public function type($int){
    switch ($int) {
      case '0':
        $type = 'AC';
        break;
      case '1':
        $type = 'NO-AC';
        break;

      default:
        $type = 'No type Found';
        break;
    }
    return $type;
  }

  // type

  // BUS
  public function bus_by_id($id){
    $this->db->where('id', $id);
  
    $query = $this->db->get('bus');  
    $s = $query->row();
    return  $s->name;
  
  }


  // bus DW
public function get_bus_dw(){

$parent = $this->db->get('bus');
$array = array(
  "" => 'Select Bus'
);
if (count($parent->result())) {
  foreach ($parent->result() as $loc) {
    $array[$loc->id] = $loc->name;
  }
}
return $array;


}


// route Name by id
public function route_by_id($id){
  $this->db->where('route_no', $id);

  $query = $this->db->get('route');  
  $s = $query->row();
  $route =  $this::district_by_id($s->where_to).' - '.$this::district_by_id($s->where_from);
  return  $route;

}

  // bus DW
  public function get_coach_dw(){
    // $this->db->select('bus_id', 'route', 'no');
    $parent = $this->db->get('coach');
    $array = array(
      "" => 'Select Coach'
    );
    if (count($parent->result())) {
      foreach ($parent->result() as $loc) {
        $array[$loc->id] = $this::bus_by_id($loc->bus_id).' | '.$loc->no.' ( '.$this::route_by_id($loc->route).' )';
      }
    }
    return $array;
    
    
    }
    
    
// bus DW
public function get_coach_trip($id=NULL){
$this->db->where('route', $id);
$parent = $this->db->get('coach');
$co = $parent->row();
// foreach($co as $c){
  $coach = $this::bus_by_id($co->bus_id).' - '.$co->no;
// }
return $coach;
// dump($co);
}

public function get_route_trip($id=NULL){
  $this->db->where('route_no', $id);
  $parent = $this->db->get('route');
  $co = $parent->row();
  // dump($co);
    $coach = $this::district_by_id($co->where_from).' - '.$this::district_by_id($co->where_to);
    return $coach;
  }

// coach by trip
public function trip_by_coach($id=NULL){
  $this->db->where('route_id', $id);
  $parent = $this->db->get('trip');
  $coach = $parent->row();

  return $coach;
  }

public function get_route_dw(){

  $parent = $this->db->get('route');
  $array = array(
    "" => 'Select Route'
  );
  if (count($parent->result())) {
    foreach ($parent->result() as $loc) {
      $array[$loc->route_no] = $this::district_by_id($loc->where_to).' - '.$this::district_by_id($loc->where_from);
    }
  }
  return $array;
  
  }
  // Bus Name by id

  public function coach_by_route_dw($id=NULL){
    $this->db->where('route', $id);
    $parent = $this->db->get('coach');
    $array = array(
      "" => 'Select Route'
    );
    if (count($parent->result())) {
      foreach ($parent->result() as $loc) {
        $array[$loc->id] = $this::bus_by_id($loc->bus_id).' - '.$loc->no;
      }
    }
    return $array;
    
    }

    public function coach_dw(){
      $parent = $this->db->get('coach');
      $array = array(
        "" => 'Select Route'
      );
      if (count($parent->result())) {
        foreach ($parent->result() as $loc) {
          $array[$loc->id] = $this::bus_by_id($loc->bus_id).' - '.$loc->no;
        }
      }
      return $array;
      
      }

  // booking
  public function get_coach($to=NULL,$from=NULL,$d_of_journy=NULL,$d_of_return=NULL){
    $this->db->where('where_to', $to);
    $this->db->where('where_from', $from);
    $this->db->or_where('where_to', $from);
    $this->db->where('where_from', $to);

    $query = $this->db->get('route');
    
    $route = $query->row();//$this->db->last_query();//
    $route_no = $route->route_no;

    $this->db->where('route', $route_no);
    $c = $this->db->get('coach');
    return $c->result();


  }

    // booking
    public function get_fare_by_route($route=NULL){
      $this->db->where('route_no', $route);
  
      $query = $this->db->get('route');
      
      $route = $query->row();//$this->db->last_query();//
      $fare = $route->fare;

      return $fare;
  
  
    }

       // booking
       public function get_bus_by_coach($id=NULL){
        $this->db->where('id', $id);
    
        $query = $this->db->get('coach');
        
        $route = $query->row();//$this->db->last_query();//
        $bus = $this::bus_by_id($route->bus_id).' - '.$route->no;
  
        return $bus;
    
    
      }
/*====================================
=================USER=================
======================================*/

  // USER ACCESS for admin area
  public function access_permission($type){
    if ($type != $this->session->userdata('type')) {
      switch ($this->session->userdata('type')) {
        case '1':
          $dashboard = 'admin/dashboard';
          break;
        case '2':
          $dashboard = 'admin/dashboard/owner';
          break;
        case '3':
          $dashboard = 'admin/dashboard/customer';
          break;
        case '4':
          $dashboard = 'admin/dashboard/driver';
          break;
        case '5':
          $dashboard = 'admin/dashboard/customer-care';
          break;
        default:
          $dashboard = 'admin/dashboard/customer';
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
          $dashboard = 'admin/dashboard/owner';
          break;
        case '3':
          $dashboard = 'admin/dashboard/customer';
          break;
        case '4':
          $dashboard = 'admin/dashboard/driver';
          break;
        case '5':
          $dashboard = 'admin/dashboard/customer-care';
          break;
        default:
          $dashboard = 'admin/dashboard/customer';
          break;
      }
      return $dashboard;
  } 

  // Define User Navbar
  public function navbar_by_usertype($type){
    switch ($type) {
        case '1':
          $navbar = 'admin/common/_main_navbar';
          break;
        case '2':
          $navbar = 'admin/common/_owner_navbar';
          break;
        case '3':
          $navbar = 'admin/common/_customer_navbar';
          break;
        case '4':
          $navbar = 'admin/common/_driver_navbar';
          break;
        case '5':
          $navbar = 'admin/common/_ccare_navbar';
          break;
        default:
          $navbar = 'admin/common/_customer_navbar';
          break;
      }
      return $navbar;
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
      $usertype = 'Owner [Rent A Car]';
      break;
    case '3':
      $usertype = 'Customer';
      break;
    case '4':
      $usertype = 'Driver';
      break;
    case '5':
      $usertype = 'Customer Care';
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

// ADMIN

// get_admin
public function get_admin(){
   $this->db->where('type', '1');

    $parent = $this->db->get('users');

   return $parent->result();
}


// get_owner
public function get_owner(){
  $this->db->where('type', '2');

   $parent = $this->db->get('users');

  return $parent->result();
}

// owner 



public function get_owner_dw(){
  $this->db->where('type', '2');

$parent = $this->db->get('users');
$array = array(
  "" => 'Select Owner'
);
if (count($parent->result())) {
  foreach ($parent->result() as $loc) {
    $array[$loc->id] = $loc->name;
  }
}
return $array;

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

// uiser_by_id
public function user_by_id($id){
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
public function get_driver(){
   $this->db->where('type', '4');

    $parent = $this->db->get('users');

   return $parent->result();
}

// supplier DW
public function get_driver_dw(){
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



// get_customer_care
public function get_customer_care(){
  $this->db->where('type', '5');

   $parent = $this->db->get('users');

  return $parent->result();
}


/*====================================
=================USER=================
======================================*/



/*====================================
=================CARS=================
======================================*/ 

// rent a car

public function car_dw(){
  $this->db->order_by("brand", "asc");


  $query = $this->db->get('cars');  
  $array = array(
      "" => 'Select car'
    );
    if (count($query->result())) {
      foreach ($query->result() as $loc) {
        $array[$loc->id] = $this::brand_by_id($loc->brand) .' - '. $loc->model;
      }
    }
    return $array;

}


// brand Name by id
public function car_by_id($id){
  $this->db->where('id', $id);

  $query = $this->db->get('cars');  
  $s = $query->row();
  return  $s->model;

}


// brand Name by id
public function car_info_id($id){
  $this->db->where('id', $id);

  $query = $this->db->get('cars');  
  $s = $query->result();
  return  $s;

}


// icon  by id
public function car_icon_by_id($id){
  $this->db->where('id', $id);

  $query = $this->db->get('cars');  
  $s = $query->row();
  return  $s->icon;

}

// photo  by id
public function car_photo_by_id($id){
  $this->db->where('id', $id);

  $query = $this->db->get('cars');  
  $s = $query->row();
  return  $s->photo;

}

// Car Category

public function category_dw(){
  $this->db->order_by("title", "asc");


  $query = $this->db->get('category');  
  $array = array(
      "" => 'Select Category'
    );
    if (count($query->result())) {
      foreach ($query->result() as $loc) {
        $array[$loc->id] = $loc->title;
      }
    }
    return $array;

}


// Category Name by id
public function category_by_id($id){
  $this->db->where('id', $id);

  $query = $this->db->get('category');  
  $s = $query->row();
  return  $s->title;

}

// Car brand

public function brand_dw(){
  $this->db->order_by("title", "asc");


  $query = $this->db->get('brand');  
  $array = array(
      "" => 'Select brand'
    );
    if (count($query->result())) {
      foreach ($query->result() as $loc) {
        $array[$loc->id] = $loc->title;
      }
    }
    return $array;

}


// brand Name by id
public function brand_by_id($id){
  $this->db->where('id', $id);

  $query = $this->db->get('brand');  
  $s = $query->row();
  return  $s->title;

}


/*====================================
=================CARS=================
Rent a car======================================*/

// rent a car

public function rentacar_dw(){
  $this->db->order_by("name", "asc");


  $query = $this->db->get('rentacar');  
  $array = array(
      "" => 'Select RentAcar'
    );
    if (count($query->result())) {
      foreach ($query->result() as $loc) {
        $array[$loc->id] = $loc->name;
      }
    }
    return $array;

}


// rent a car Name by id
public function rentacar_by_id($id){
  $this->db->where('id', $id);

  $query = $this->db->get('rentacar');  
  $s = $query->row();
  return  $s->name;

}

// rent a car id by user
public function rentacar_by_user_id($id){
  $this->db->where('user_id', $id);

  $query = $this->db->get('rentacar');  
  $s = $query->row();
  return  $s->id;

}

// user id by rent a car id
public function user_id_by_rentacar($id){
  $this->db->where('user_id', $id);

  $query = $this->db->get('rentacar');  
  $s = $query->row();
  return  $s->id;

}


// rentacar_by_district
public function rentacar_by_district($id){
  $this->db->where('district', $id);

  $query = $this->db->get('rentacar');  
  $s = $query->result();
  return  $s;

}

/*Rent a car====================================*/
/*=================Offer===================*/

// rent a car

public function offer_dw(){
  $this->db->order_by("title", "asc");


  $query = $this->db->get('offers');  
  $array = array(
      "" => 'Select Offer'
    );
    if (count($query->result())) {
      foreach ($query->result() as $loc) {
        $array[$loc->id] = $loc->title.' | '.$this::rentacar_by_id($loc->rentacar);
      }
    }
    return $array;

}
// offer_by_rentacar_dw
public function offer_by_rentacar_dw(){
  $rentacar = $this::rentacar_by_user_id($this->session->userdata('id'));
  $this->db->order_by("title", "asc");
  $this->db->where("rentacar", $rentacar);


  $query = $this->db->get('offers');  
  $array = array(
      "" => 'Select Offer'
    );
    if (count($query->result())) {
      foreach ($query->result() as $loc) {
        $array[$loc->id] = $loc->title.' | '.$this::rentacar_by_id($loc->rentacar);
      }
    }
    return $array;

}


// offer_by_car_info
public function offer_by_info($id=NULL){
  $this->db->where('id', $id);

  $query = $this->db->get('offers');
  $offer = $query->row();
  return $offer;
}

// offer_by_car_info
public function package_by_info($id=NULL, $package=NULL){
  $this->db->select($package);
  $this->db->where('id', $id);
  $query = $this->db->get('offers');
  $offer = $query->row();
  return $offer;
}

// brand Name by id
public function offer_by_id($id){
  $this->db->where('id', $id);

  $query = $this->db->get('offers');  
  $s = $query->row();
  return  $s->title;

}

// offer by rent a car
public function offer_by_rentacar(){
  $id = $this::rentacar_by_user_id($this->session->userdata('id'));
  $this->db->where('rentacar', $id);
  $this->db->order_by("title", "asc");

  $query = $this->db->get('offers');  
  
  return $query->result();

}

// offer by rent a car
public function offer_by_rentacar_id($id=NULL){
  $this->db->where('rentacar', $id);
  $this->db->order_by("title", "asc");

  $query = $this->db->get('offers');  
  
  return $query->result();

}

/*=================Offer===================*/

// offer by rent a car
public function rentacar_by_offer_id($id=NULL){
  $this->db->where('id', $id);

  $query = $this->db->get('offers');  
  
  $o = $query->row();
  return $o->rentacar;

}

// order by rent a car
public function order_by_rentacar(){
  $id = $this::rentacar_by_user_id($this->session->userdata('id'));
  $this->db->where('rentacar', $id);
  $this->db->order_by("order_id", "asc");

  $query = $this->db->get('orders');  
  
  return $query->result();

}

public function order_dw(){
  $this->db->order_by("id", "asc");


  $query = $this->db->get('orders');  
  $array = array(
      "" => 'Select order'
    );
    if (count($query->result())) {
      foreach ($query->result() as $loc) {
        $array[$loc->id] = $loc->order_id;
      }
    }
    return $array;

}


// brand Name by id
public function order_by_id($id){
  $this->db->where('id', $id);

  $query = $this->db->get('orders');  
  $s = $query->row();
  return  $s->order_id;

}

/*=================Order===================*/
/*=================Buyer Request===================*/
public function buyer_request_dw(){
  $this->db->order_by("id", "asc");


  $query = $this->db->get('buyer_request');  
  $array = array(
      "" => 'Select Request ID'
    );
    if (count($query->result())) {
      foreach ($query->result() as $loc) {
        $array[$loc->id] = $loc->request_id;
      }
    }
    return $array;

}

public function buyer_request_by_customer(){
  $this->db->where('customer', $this->session->userdata('id'));
  $this->db->order_by("id", "desc");


  $query = $this->db->get('buyer_request');  
  return $query->result();
}
// brand Name by id
public function br_by_id($id){
  $this->db->where('id', $id);

  $query = $this->db->get('buyer_request');  
  $s = $query->row();
  return  $s->request_id;

}

// genarate unique buyer request id
public function new_buyer_request_id(){
  $random = substr(md5(mt_rand()), 0, 7);
  $id = strtoupper($random);
  $this::check_unique($id);
}

// check unique
public function check_unique($id){
  $this->db->where('request_id',$id);
  $this->db->limit(1);

  $br_id = $this->db->get('buyer_request')->result();
  if(!$br_id){
    echo $id;
  }else{
    $this::new_buyer_request_id();
  }
}


  // Buyer Request_status
  public function br_status($int){
    switch ($int) {
      case '0':
        $type = 'Active';
        break;
      case '1':
          $type = 'Dactive';
        break;
      case '2':
          $type = 'Cancle';
        break;
      case '3':
          $type = 'Orderd';
        break;
        
      default:
        $type = 'No Status';
        break;
    }
    return $type;
  }

  // br_by_request_id
  public function br_by_request_id($r_id){
    $this->db->where('request_id', $r_id);
  
    $query = $this->db->get('buyer_request');  
    $br = $query->row();
    return  $br;
  
  }
  // active_buyer_request
  public function active_buyer_request(){
    $this->db->where('status', '0');
  
    $query = $this->db->get('buyer_request');  
    $br = $query->result();
    return  $br;
  
  }
/*=================Buyer Request===================*/

/*=================bid Request===================*/
public function bid_request_dw(){
  $this->db->order_by("id", "asc");


  $query = $this->db->get('buyer_request');  
  $array = array(
      "" => 'Select Request ID'
    );
    if (count($query->result())) {
      foreach ($query->result() as $loc) {
        $array[$loc->id] = $loc->request_id;
      }
    }
    return $array;

}


// brand Name by id
public function bid_by_id($id){
  $this->db->where('id', $id);

  $query = $this->db->get('buyer_request');  
  $s = $query->row();
  return  $s->request_id;

}

// bid_by_buyer_request
public function bid_by_buyer_request($id){
  $rentacar = $this::rentacar_by_user_id($this->session->userdata('id'));
  $this->db->where('request_id',$id);
  $this->db->where('rentacar',$rentacar);

  $bid = $this->db->get('bid')->row();

  return $bid;

}

// bid_by_rentacar
public function bid_by_rentacar(){
  $rentacar = $this::rentacar_by_user_id($this->session->userdata('id'));
  // $this->db->where('request_id',$id);
  $this->db->where('rentacar',$rentacar);

  $bid = $this->db->get('bid');

  return $bid->result();

}

// response_by_buyer_request
public function response_by_buyer_request($id){
  $this->db->where('request_id',$id);
  // $this->db->where('rentacar',$rentacar);

  $bid = $this->db->get('bid');

  return $bid->result();

}

/*=================bid Request===================*/

/*==============ADDRESS=================
======================================*/
// Division DW

public function division_dw(){
  $this->db->order_by("name", "asc");

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


// District dW
public function district_dw($id=NULL){
  if($id){
    $this->db->where('division', $id);
  }
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



// District to dW
public function to_district_dw($id=NULL){
  if($id){
    $this->db->where('division', $id);
  }
  $this->db->order_by("name", "desc");

  $query = $this->db->get('district');  
   $array = array(
      "" => 'To'
    );
    if (count($query->result())) {
      foreach ($query->result() as $loc) {
        $array[$loc->id] = $loc->name;
      }
    }
    return $array;

}

// District from dW
public function from_district_dw($id=NULL){
  if($id){
    $this->db->where('division', $id);
  }
  $this->db->order_by("name", "desc");

  $query = $this->db->get('district');  
   $array = array(
      "" => 'From'
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



// district_by_id
public function district_by_div($id){
  $this->db->where('division', $id);

  $query = $this->db->get('district');  
  $s = $query->result();
  return  $s;

}

// police_station_dw

public function police_station_dw($id){
  if($id){
    $this->db->where('district', $id);
  }
  $query = $this->db->get('police_station');  
  $array = array(
      "" => 'Select Police Station'
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


// post_office_dw

public function post_office_dw($id){
  if($id){
    $this->db->where('police_station', $id);
  }

  $query = $this->db->get('post_office');  
 $array = array(
      "" => 'Select Post Office'
    );
    if (count($query->result())) {
      foreach ($query->result() as $loc) {
        $array[$loc->id] = $loc->name;
      }
    }
    return $array;

}

// post_office_id
public function post_office_by_id($id){
  $this->db->where('id', $id);

  $query = $this->db->get('post_office');  
  $s = $query->row();
  return  $s->name;

}


// post_office_id
public function get_zip_by_po($id){
  $this->db->where('id', $id);

  $query = $this->db->get('post_office');  
  $s = $query->row();
  echo  $s->zip;

}

/*====================================
==============ADDRESS=================
======================================*/




/*====================================
============NOTIFICATION==============
======================================*/

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




/*====================================
============NOTIFICATION==============
======================================*/




/*====================================
=============DROWP DOWN===============
======================================*/

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




  // CAR dW
  public function cars(){

    $car = $this->db->get('cars');

    $array = array(
      0 => 'Select Car'
    );
    if (count($car->result())) {
      foreach ($car->result() as $car) {
        $array[$car->id] = $this::brand_name_by_id($car->brand).' - '.$car->model;
      }
    }
    return $array;

  }

  // car_info by id
  public function car_info_by_id($id=NULL){
    $this->db->where('id', $id);
    $query = $this->db->get('cars');

    $car = $query->row();
    return $car;
  }

/*====================================
=============DROWP DOWN===============
======================================*/




/*====================================
=============NAME BY ID===============
======================================*/

// TYPE by ID
 public function type_by_id($id = NULL){
    $this->db->where('id', $id);

    $parent = $this->db->get('category');

    foreach ($parent->result() as $row)
    {
        echo $row->cat_name;
    }
  }



// Car Name By id
public function car_name_by_id($id = NULL){
    $this->db->where('id', $id);

    $car = $this->db->get('cars');

    foreach ($car->result() as $row)
    {
        return $this::brand_name_by_id($row->brand).' - '.$row->model;
    }
  }


/*====================================
=============NAME BY ID===============
======================================*/




/*====================================
================TOKEN=================
======================================*/

// // TOKEN TYPE
// public function token_status($int){
//   switch ($int) {
//     case '0':
//       $status = 'Panding';
//       break;
//     case '1':
//       $status = 'Order';
//       break;
//     case '2':
//       $status = 'Cancle';
//       break;

//     default:
//       $status = 'Junk Token';
//       break;
//   }
//   return $status;
// }



//   // client_by_token
//  public function client_by_token($token=NULL){

//     $this->db->where('token', $token);
//     $review = $this->db->get('tokens');
//     $client = $review->row()->customer_id;

//     // get CUSTOMER
//     $this->db->where('id', $client);
//     $c = $this->db->get('users');

//     return $c->row();
//   }

//   // TOKEN token_by_customer
//  public function token_by_customer(){
//    $this->db->where(array('customer_id' => $this->session->userdata('id'), 'status' => '0'));

//     $parent = $this->db->get('tokens');

//    return $parent->result();
// }

// // TOKEN customer by token
//  public function customer_by_token($token=NULL){
//    $this->db->where('token' , $token);

//     $parent = $this->db->get('tokens')->row();

//    return $parent->customer_id;    
// }



/*====================================
================TOKEN=================
======================================*/


/*====================================
==============CATEGORY================
======================================*/

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



/*====================================
==============CATEGORY================
======================================*/




/*====================================
===============CONNECT================
======================================*/


// // Connect connect_by_seller
//  public function connect_by_seller(){
//     $this->db->where('seller_id', $this->session->userdata('id'));
//     $connect = $this->db->get('connect');

//    return $connect->result();
// }


// // Connect order_by_customer
//  public function connect_by_customer(){
//     $this->db->where('customer_id', $this->session->userdata('id'));
//     $connect = $this->db->get('connect');

//    return $connect->result();
// }

// // Connect order_by_ID
//  public function service_by_connect($id=NULL){

//     $this->db->where('id', $id);   

//     $query = $this->db->get('connect');
//     $connect = $query->row();
//     return $connect->service_id;
// }

// // Connect by services
//  public function connect_by_service($id = NULL){
//     $this->db->where('service_id', $id);
//     $connect = $this->db->get('connect');

//    return $connect->result();
// }

/*====================================
===============CONNECT================
======================================*/



/*====================================
================ORDER=================
======================================*/

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


/*====================================
================ORDER=================
======================================*/




/*====================================
================REVIEW================
======================================*/



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

/*====================================
================REVIEW================
======================================*/


/*====================================
================PACKAGE===============
======================================*/



/*====================================
================PACKAGE===============
======================================*/

  
}
