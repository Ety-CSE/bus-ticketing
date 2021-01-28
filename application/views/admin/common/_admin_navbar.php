<!-- navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" >
    <a class="navbar-brand" href="<?php echo site_url();?>">
      <h3 style="font-size:1em;">    
        <img src="<?php echo site_url('img/logo.png');?>" alt="" height="50px"></h3>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- collapse navbar-collapse -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="far fa-comment"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="far fa-bell"></i></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle pull-right" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="far fa-user"> </i> <b class="hidden-md-down "> <?php echo $this->session->userdata('name'); ?></b>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?php echo base_url("admin/dashboard"); ?>"> <i class="far fa-tachometer-alt fw"></i> Dashboard</a>
            <a class="dropdown-item" href="<?php echo base_url("admin/user/edit/".$this->session->userdata('id')); ?>"> <i class="far fa-user fw"></i> My Profile</a>
            <a class="dropdown-item" href="<?php echo base_url('admin/setting'); ?>"> <i class="far fa-cog fw"></i> Setting</a>
            <a class="dropdown-item" href="<?php echo base_url('admin/user/logout'); ?>"> <i class="far fa-power-off fw"></i> Log Out</a>
          </div>
        </li>
    </ul>
    
    </div>
</nav>
<!-- navbar -->