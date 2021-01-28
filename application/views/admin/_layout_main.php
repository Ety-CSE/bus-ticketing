<?php $this->load->model('user_m'); ?>


<!-- Load Header -->
<?php $this->load->view('admin/common/_header'); ?>
<!-- Load Navbar -->
<?php $this->load->view('admin/common/_admin_navbar'); ?>

<div class="container-fluid">
  <br><br><br>
  <div class="row">
    <div class="col-md-2">
        <!-- Load Main Navbar -->
        <?php $this->load->view($this->user_m->navbar_by_usertype($this->session->userdata('type')));  ?>
    </div>
    <div class="col-md-10 main_content_area">
        <!-- Load Main Content Area -->
        <?php $this->load->view($subview); ?>
    </div>
  </div>
</div>


<!-- Load Main Navbar -->
<?php //$this->load->view('common/_footer_nav'); ?>


<!-- Load Footer -->
<?php $this->load->view('admin/common/_footer'); ?>
