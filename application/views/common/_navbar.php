<!-- navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" >
    <a class="navbar-brand" href="<?php echo site_url();?>">
        <h3 style="font-size:1em;">    
        <img src="<?php echo site_url('img/logo.png');?>" alt="" height="50px"></h3>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url();?>">Bus Reservation <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Cancle Tickete</a>
        </li>
        
        <li class="nav-item active">
            <?php if($this->session->userdata('id')): ?>
            <a class="nav-link" href="<?php echo site_url('admin/user/logout');?>" tabindex="-1" aria-disabled="true">Sign Out</a>
            <?php else: ?>
            <a class="nav-link" href="<?php echo site_url('admin/user/login');?>" tabindex="-1" aria-disabled="true">Sign in</a>
            <?php endif; ?>
        </li>
    </ul>
    
    </div>
</nav>
<!-- navbar -->