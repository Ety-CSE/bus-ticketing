<div  class="nav-main">
  <ul class="navbar nav">
    <li class="nav-item <?php echo $this->uri->segment(2)=='dashboard' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/dashboard');?>" class="nav-link"><i class="far fa-fw fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="nav-item <?php echo $this->uri->segment(2)=='order' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/order');?>" class="nav-link"><i class="far fa-fw fa-car"></i> My Rides</a></li>
    <!-- <li class="nav-item <?php echo $this->uri->segment(2)=='buyer_request' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/buyer_request');?>" class="nav-link"><i class="far fa-fw fa-user-check"></i> Buyer Request</a></li> -->
    <li class="nav-item <?php echo $this->uri->segment(2)=='report' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/report');?>" class="nav-link"><i class="fa fa-fw fa-exclamation-triangle"></i> Reports</a></li>
    <li class="nav-item <?php echo $this->uri->segment(2)=='faq' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/faq');?>" class="nav-link"><i class="fa fa-fw fa-question"></i> FAQ</a></li>
    <li class="nav-item <?php echo $this->uri->segment(2)=='support' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/support');?>" class="nav-link"><i class="fa fa-fw fa-headset"></i> Support</a></li>
  </ul>

</div>


