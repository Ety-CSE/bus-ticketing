  <br><br><br><br>
<div class="container-fluid">
  <div class="row row-cols-1 row-cols-md-5">
    <?php foreach($rentacar as $rc):?>
    <div class="col rentacar">
        <a href="<?php echo site_url('rentacar/profile/'.$rc->id); ?>">
            <div class="card" style="width: 100%;">
                <img src="<?php echo site_url('upload/'.$rc->c_photo); ?>" class="card-img-top" style="height:175px;" alt="<?php echo $rc->name; ?>">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <img src="<?php echo site_url('upload/'.$rc->logo); ?>" class="card-img-top" style="height:50px; width:50px; border-radius:50px; border:1px solid #e6e6e6;">
                        </div>
                        <div class="col-9">
                        <h5 class="card-title" style="font-size:1em"><?php echo $rc->name; ?></h5>
                        <p class="card-text"><?php  echo $this->user_m->user_by_id($rc->user_id); ?></p>
                        </div>  
                    </div>
                    <hr>
                    <p class="card-text" style="height:60px;font-size:.9em"><?php  echo substr($rc->about,0, 80); ?>...</p>
                    <hr>
                    <p class="card-text"><small><b>Location: </b><?php echo $this->rentacar_m->district_by_id($rc->district); // echo $rc->district;//?></small></p>
                <!-- <hr>
                    <a href="#" class="btn btn-primary">View Profile</a>
                    <a href="#" class="btn btn-success">Message</a> -->
                </div>
            </a>
        </div>
        <?php // dump($rc) ?>
    </div>
    <?php endforeach;?>
  </div>
</div>
