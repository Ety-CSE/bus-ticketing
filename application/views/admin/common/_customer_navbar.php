<div  class="nav-main">
<br>
  <ul class="navbar nav">
    <li class="nav-item <?php echo $this->uri->segment(2)=='dashboard' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/dashboard');?>" class="nav-link"><i class="far fa-fw fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="nav-item <?php echo $this->uri->segment(2)=='customer' && $this->uri->segment(3)=='booking' || $this->uri->segment(3)=='ticket' ? 'active': ''?>"><a href="<?php echo site_url('admin/customer/booking');?>" class="nav-link"><i class="far fa-fw fa-bus"></i> My Booking </a></li>
    <!-- <li class="nav-item <?php echo $this->uri->segment(2)=='customer' && $this->uri->segment(3)=='order'? 'active': ''?>"><a href="<?php echo site_url('admin/customer/order');?>" class="nav-link"><i class="far fa-fw fa-glass-cheers"></i> Orders</a></li>
    <li class="nav-item <?php echo $this->uri->segment(2)=='notification' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/notification');?>" class="nav-link"><i class="far fa-fw fa-bell"></i> Notification</a></li>
    <li class="nav-item <?php echo $this->uri->segment(2)=='message' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/message');?>" class="nav-link"><i class="far fa-fw fa-comment"></i> Message</a></li>
    <li class="nav-item <?php echo $this->uri->segment(2)=='wallet' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/wallet');?>" class="nav-link"><i class="far fa-fw fa-wallet"></i> wallet</a></li>
    <li class="nav-item <?php echo $this->uri->segment(2)=='report' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/report');?>" class="nav-link"><i class="fa fa-fw fa-exclamation-triangle"></i> Reports</a></li>
    <li class="nav-item <?php echo $this->uri->segment(2)=='faq' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/faq');?>" class="nav-link"><i class="fa fa-fw fa-question"></i> FAQ</a></li> -->
    <!-- <li class="nav-item <?php echo $this->uri->segment(2)=='support' && $this->uri->segment(3)==''? 'active': ''?>"><a href="<?php echo site_url('admin/support');?>" class="nav-link"><i class="fa fa-fw fa-headset"></i> Support</a></li> -->

  </ul>

</div>


