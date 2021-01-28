<div  class="nav-main">
  <ul class="navbar nav">
    <li class="nav-item <?php echo $this->uri->segment(2)=='dashboard' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/dashboard');?>" class="nav-link"><i class="far fa-fw fa-tachometer-alt"></i> Dashboard</a></li>
    
    <li class="nav-item" data-toggle="collapse" data-target="#bus" aria-expanded="<?php echo $this->uri->segment(2)=='bus'? 'true': 'false'?>" aria-controls="bus">
      <a href="#" class="nav-link"><i class="far fa-fw fa-bus"></i> Bus</a>
      <ul class="collapse <?php echo $this->uri->segment(2)=='bus' || $this->uri->segment(2)=='coach'?'show': '' ?>" id="bus">
        <li class="<?php echo $this->uri->segment(2)=='bus' ||  $this->uri->segment(2)=='bus' && $this->uri->segment(3)=='edit'? 'active': ''?>"><a href="<?php echo site_url('admin/bus');?>"><i class="fa fa-fw fa-bus"></i>  Bus</a></li>
        <li class="<?php echo $this->uri->segment(2)=='coach' || $this->uri->segment(2)=='coach' && $this->uri->segment(3)=='edit'? 'active': ''?>"><a href="<?php echo site_url('admin/coach');?>"><i class="fa fa-fw fa-subway"></i>  Coach</a></li>
      </ul>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(2)=='booking' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/booking');?>" class="nav-link"><i class="far fa-fw fa-calendar-check"></i> Booking</a></li>
    <li class="nav-item <?php echo $this->uri->segment(2)=='route' || $this->uri->segment(2)=='route' && $this->uri->segment(3)=='edit'? 'active': ''?>"><a href="<?php echo site_url('admin/route');?>" class="nav-link"><i class="far fa-fw fa-route"></i> Route</a></li>
    <li class="nav-item <?php echo $this->uri->segment(2)=='trip' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/trip');?>" class="nav-link"><i class="far fa-fw fa-history"></i> Trip</a></li>
    
    <li class="nav-item" data-toggle="collapse" data-target="#location" aria-expanded="<?php echo $this->uri->segment(2)=='division'? 'true': 'false'?>" aria-controls="location">
      <a href="#" class="nav-link"><i class="far fa-fw fa-map-signs"></i> Locations</a>
      <ul class="collapse <?php echo $this->uri->segment(2)=='division'?'show': '' ?>" id="location">
        <li class="<?php echo $this->uri->segment(2)=='division' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/division');?>"><i class="fa fa-fw fa-map-marked-alt"></i>  Division</a></li>
        <li class="<?php echo $this->uri->segment(2)=='division' && $this->uri->segment(3)=='district'? 'active': ''?>"><a href="<?php echo site_url('admin/division/district');?>"><i class="fa fa-fw fa-map-marker-alt"></i>  District</a></li>
        <li class="<?php echo $this->uri->segment(2)=='division' && $this->uri->segment(3)=='police_station'? 'active': ''?>"><a href="<?php echo site_url('admin/division/police_station');?>"><i class="fa fa-fw fa-hotel"></i>  Police Station</a></li>
        <li class="<?php echo $this->uri->segment(2)=='division' && $this->uri->segment(3)=='post_office'? 'active': ''?>"><a href="<?php echo site_url('admin/division/post_office');?>"><i class="fa fa-fw fa-mail-bulk"></i>  Post Office</a></li>
      </ul>
    </li>
    <li class="nav-item" data-toggle="collapse" data-target="#pages" aria-expanded="<?php echo $this->uri->segment(2)=='page'? 'true': 'false'?>" aria-controls="pages">
      <a href="#" class="nav-link"><i class="far fa-fw fa-pager"></i> Pages</a>
      <ul class="collapse <?php echo $this->uri->segment(2)=='page'?'show': '' ?>" id="pages">
        <li class="<?php echo $this->uri->segment(2)=='page' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/page');?>"><i class="fa fa-fw fa-copy"></i>  All Pages</a></li>
        <li class="<?php echo $this->uri->segment(2)=='page' && $this->uri->segment(3)=='edit'? 'active': ''?>"><a href="<?php echo site_url('admin/page/edit');?>"><i class="fa fa-fw fa-file-signature"></i>  New Page</a></li>
      </ul>
    </li>
    <li class="nav-item" data-toggle="collapse" data-target="#users" aria-expanded="<?php echo $this->uri->segment(2)=='user'? 'true': 'false'?>" aria-controls="users">
      <a class="nav-link" href="#"><i class="fa fa-fw fa-users"></i> Users</a>
      <ul class="collapse  <?php echo $this->uri->segment(2)=='user'?'show': '' ?>" id="users">
        <li class="<?php echo $this->uri->segment(2)=='user' && $this->uri->segment(3)==''? 'active': ''?>">
            <a href="<?php echo base_url('admin/user');?>"><i class="fa fa-fw fa-user-secret"></i> Admin Users</a>
        </li>
        
        <li class="<?php echo $this->uri->segment(2)=='user' && $this->uri->segment(3)=='customer'? 'active': ''?>">
            <a href="<?php echo base_url('admin/user/customer');?>"><i class="fa fa-fw fa-user-secret"></i> Customer</a>
        </li>

      </ul>
    </li>
    
  </ul>

</div>


