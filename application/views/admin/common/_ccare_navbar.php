<div  class="nav-main">
  <ul class="navbar nav">
    <li class="nav-item <?php echo $this->uri->segment(2)=='dashboard' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/dashboard');?>" class="nav-link"><i class="far fa-fw fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="nav-item <?php echo $this->uri->segment(2)=='rentacar' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/rentacar');?>" class="nav-link"><i class="fa fa-fw fa-baby-carriage"></i>Rent A Car</a></li>
    <li class="nav-item <?php echo $this->uri->segment(2)=='order' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/order');?>" class="nav-link"><i class="far fa-fw fa-glass-cheers"></i> Orders</a></li>
    <li class="nav-item <?php echo $this->uri->segment(2)=='Offer' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/Offer');?>" class="nav-link"><i class="far fa-fw fa-bullhorn"></i> Offers</a></li>
    <li class="nav-item <?php echo $this->uri->segment(2)=='bid' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/bid');?>" class="nav-link"><i class="far fa-fw fa-check-circle"></i> Bid</a></li>
    <li class="nav-item <?php echo $this->uri->segment(2)=='buyer_request' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/buyer_request');?>" class="nav-link"><i class="far fa-fw fa-user-check"></i> Buyer Request</a></li>
    <li class="nav-item <?php echo $this->uri->segment(2)=='notification' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/notification');?>" class="nav-link"><i class="far fa-fw fa-bell"></i> Notification</a></li>
    <li class="nav-item <?php echo $this->uri->segment(2)=='message' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/message');?>" class="nav-link"><i class="far fa-fw fa-comment"></i> Message</a></li>
    <li class="nav-item " data-toggle="collapse" data-target="#cars" aria-expanded="false" aria-controls="cars">
      <a href="#" class="nav-link"><i class="fas fa-fw fa-car-alt"></i> Cars</a>
      <ul class="collapse" id="cars">
        <li class="<?php echo $this->uri->segment(2)=='car' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/car');?>"><i class="far fa-fw fa-car-alt"></i> Cars</a></li>
        <li class="<?php echo $this->uri->segment(2)=='brand' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/brand');?>"><i class="fa fa-fw fa-file"></i>  Brand</a></li>
        <li class="<?php echo $this->uri->segment(2)=='category' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/category');?>"><i class="fa fa-fw fa-file"></i>  Category</a></li>
      </ul>
    </li>
    <li class="nav-item" data-toggle="collapse" data-target="#location" aria-expanded="false" aria-controls="location">
      <a href="#" class="nav-link"><i class="far fa-fw fa-map-signs"></i> Locations</a>
      <ul class="collapse" id="location">
        <li class="<?php echo $this->uri->segment(2)=='division' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/division');?>"><i class="fa fa-fw fa-map-marked-alt"></i>  Division</a></li>
        <li class="<?php echo $this->uri->segment(2)=='division' && $this->uri->segment(3)=='district'? 'active': ''?>"><a href="<?php echo site_url('admin/division/district');?>"><i class="fa fa-fw fa-map-marker-alt"></i>  District</a></li>
        <li class="<?php echo $this->uri->segment(2)=='division' && $this->uri->segment(3)=='police_station'? 'active': ''?>"><a href="<?php echo site_url('admin/division/police_station');?>"><i class="fa fa-fw fa-hotel"></i>  Police Station</a></li>
        <li class="<?php echo $this->uri->segment(2)=='division' && $this->uri->segment(3)=='post_office'? 'active': ''?>"><a href="<?php echo site_url('admin/division/post_office');?>"><i class="fa fa-fw fa-mail-bulk"></i>  Post Office</a></li>
      </ul>
    </li>
    <li class="nav-item" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages">
      <a href="#" class="nav-link"><i class="far fa-fw fa-pager"></i> Pages</a>
      <ul class="collapse" id="pages">
        <li class="<?php echo $this->uri->segment(2)=='page' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/page');?>"><i class="fa fa-fw fa-copy"></i>  All Pages</a></li>
        <li class="<?php echo $this->uri->segment(2)=='page' && $this->uri->segment(3)=='edit'? 'active': ''?>"><a href="<?php echo site_url('admin/page/edit');?>"><i class="fa fa-fw fa-file-signature"></i>  New Page</a></li>
      </ul>
    </li>
    <li class="nav-item" data-toggle="collapse" data-target="#users" aria-expanded="false" aria-controls="users">
      <a class="nav-link" href="#"><i class="fa fa-fw fa-users"></i> Users</a>
      <ul class="collapse" id="users">
        <li class="<?php echo $this->uri->segment(2)=='user' && $this->uri->segment(3)==''? 'active': ''?>">
            <a href="<?php echo base_url('admin/user');?>"><i class="fa fa-fw fa-user-secret"></i> Admin Users</a>
        </li>
        <li class="<?php echo $this->uri->segment(2)=='user' && $this->uri->segment(3)=='owner'? 'active': ''?>">
            <a href="<?php echo base_url('admin/user/owner');?>"><i class="fa fa-fw fa-user-secret"></i> Owner</a>
        </li>
        <li class="<?php echo $this->uri->segment(2)=='user' && $this->uri->segment(3)=='customer'? 'active': ''?>">
            <a href="<?php echo base_url('admin/user/customer');?>"><i class="fa fa-fw fa-user-secret"></i> Customer</a>
        </li>
        <li class="<?php echo $this->uri->segment(2)=='user' && $this->uri->segment(3)=='driver'? 'active': ''?>">
            <a href="<?php echo base_url('admin/user/driver');?>"><i class="fa fa-fw fa-user-secret"></i> Driver</a>
        </li>
        <li class="<?php echo $this->uri->segment(2)=='user' && $this->uri->segment(3)=='customer_care'? 'active': ''?>">
            <a href="<?php echo base_url('admin/user/customer_care');?>"><i class="fa fa-fw fa-user-secret"></i> Customer Care</a>
        </li>
      </ul>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(2)=='faq' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/faq');?>" class="nav-link"><i class="fa fa-fw fa-question"></i> FAQ</a></li>
    <li class="nav-item <?php echo $this->uri->segment(2)=='report' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/report');?>" class="nav-link"><i class="fa fa-fw fa-exclamation-triangle"></i> Reports</a></li>
    <li class="nav-item <?php echo $this->uri->segment(2)=='review' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/review');?>" class="nav-link"><i class="far fa-fw fa-star"></i> Reviews</a></li>

  </ul>

</div>


