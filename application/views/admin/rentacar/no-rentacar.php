  <br><br><br><br><br><br><br><br>
<div class="container-fluid">
  <div class="row">
    <div class="col-6">
    <br><br>
        <h3 class="text-center">OPS !</h3>
        <p class="text-center">No Rent a Car</p>
        <p class="text-center"><i class="fa fa-car fa-3x"></i></p>
        <p class="text-center">in
        <h2 class="text-center"><?php echo $this->rentacar_m->district_by_id($this->uri->segment(3));?></h2></p>
    </div>
    <div class="col-4">
        <img src="<?php echo site_url('img/no-result.svg');?>" alt="" class="img-fluid">
    </div>
  </div>
</div>
