<!-- Load Header -->
<?php $this->load->view('common/_header'); ?>

    <!-- Load Main Navbar -->

<?php 
    if($this->session->userdata('id')){
        $this->load->view('admin/common/_admin_navbar');
    }else{ 
        $this->load->view('common/_navbar'); 
    }
?>

<!-- Load Main Content Area -->
<?php $this->load->view($subview); ?>


<!-- Load Main Navbar -->
<?php $this->load->view('common/_footer_nav'); ?>

<!-- Load Footer -->
<?php $this->load->view('common/_footer'); ?>