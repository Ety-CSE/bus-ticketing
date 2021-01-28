<?php $this->load->model('user_m'); ?>


<!-- Load Header -->
<?php $this->load->view('common/_header'); ?>


<div class="container-fluid">
  <br><br><br>
  <div class="row">
    <div class="col-md-2">
    <!-- Load Main Navbar -->
      <?php 
        if($this->session->userdata('id')){
          $this->load->view('admin/common/_admin_navbar');
        }else{ 
          $this->load->view('common/_navbar'); 
        }
      ?>
    </div>
    <div class="col-md-10">
        <!-- Load Main Content Area -->
        <?php $this->load->view($subview); ?>
    </div>
  </div>
</div>


<!-- Load Main Navbar -->
<?php $this->load->view('common/_footer_nav'); ?>


<!-- Load Footer -->
<?php $this->load->view('common/_footer'); ?>