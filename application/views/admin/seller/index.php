<div class="row c_search" style="display: none;">
      <i id="s_close" class="la la-times la-2x"></i>
  <div class="container">
    <div class="row">
      <div class="col-0 col-lg-2 col-md-2 col-sm-1"></div>
      <div class="content-header col-12 col-lg-8 col-md-8 col-sm-10">
          <h2 class="text-center hidden-xs-down">
            <span>FIND THE PERFECT</span> SERVICES  FOR YOU
       </h2>
          <form action="" method="GET">
            <input type="search" class="form-control c_search_input" data-action="<?php echo site_url('service/search_str');?>" id="s_search" placeholder="Search">
            <div class="search_sug"></div>
          </form>
          <p class="">Such as repair, plumbing, home shifting, car services, car rental & more ...</p>

        </div>
      <div class="col-0 col-lg-2 col-md-2 col-sm-1"></div>
    </div>
  </div>
</div>


<div class="row w_app w_viewpage">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 col-md-6 col-sm-6">
        <div class="col-auto">
          <label class="sr-only" for="search">Search</label>
          <div class="input-group mb-2 mt-2">
            <input type="search" class="form-control" id="search" placeholder="Search Services here ...">
          </div>
        </div>
      </div>
      <div class="content-header col-12 col-lg-6 col-md-6 col-sm-6">
         <h3 class="pull-right"> 
            <span>Call - imo | whatsApp</span> +880 1717 440 931
          </h3>
        </div>
    </div>
  </div>
</div>

<div class="container view" style="margin-top: 20px;">
  <div class="row">
    <div class="col-6">
      <h3 class="servicev_title text-left"><i class="la la-shopping-cart"> </i> My Services</h3>
    </div>
    <div class="col-6">
      <a class="btn btn-outline-secondary outline pull-right" href="<?php echo site_url('admin/seller/service'); ?>"><i class="la la-shopping-cart"> </i> Add New Service</a>
    </div>
    <div class="col-12">
      <?php //dump($service); ?>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Thumbnail</th>
            <th scope="col">Service Name</th>
            <th scope="col">Details</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; foreach ($service as $s):  ?>
          <tr>
            <th scope="row"><?php echo $i++; ?></th>
            <td>
              <img src="<?php echo site_url('upload/'.$s->s_photo); ?>" style="height: 80px;" alt="" class="img-fluid">
            </td>
            <td><?php echo anchor('admin/seller/service/'.$s->id, $s->s_name) ; ?></td>
            <td><?php echo substr($s->s_des, 0, 50); ?> ...</td>
            <td>
              <div class="btn-group btn-group-sm" role="group" aria-label="First group">
                <a href="<?php echo site_url('admin/seller/service/'.$s->id);?>" type="button" class="btn btn-outline-secondary  outline"><i class="la la-edit"></i> Edit</a>
                <a href="<?php echo site_url('admin/seller/delete/'.$s->id);?>" type="button" class="btn btn-outline-secondary  outline" onclick="return confirm('You are about to delete a record. This cannot be undone. Are you sure?');"><i class="la la-trash"></i> Delete</a>
                
              </div>
              <!-- <button class="btn btn-outline-secondary outline btn-small"><i class="la la-edit"></i> Edit  </button> -->
              <!-- <button class="btn btn-outline-secondary outline btn-small"><i class="la la-trash"></i> Edit  </button> -->
            <?php //echo bt_delete('admin/seller/delete/'.$s->id); ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>