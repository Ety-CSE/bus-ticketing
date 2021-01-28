<div class="row c_search" style="display: none;">
      <i id="s_close" class="la la-times la-2x"></i>
  <div class="container">
    <div class="row">
      <div class="col-0 col-lg-2 col-md-2 col-sm-1"></div>
      <div class="content-header col-12 col-lg-8 col-md-8 col-sm-10">
          <h2 class="text-center hidden-xs-down">
            <span>Simple way to buy and schedule</span> Home sellers
       </h2>
          <form action="" method="GET">
            <input type="search" class="form-control c_search_input" data-action="<?php echo site_url('seller/search_str');?>" id="s_search" placeholder="Search">
            <div class="search_sug"></div>
          </form>
          <p class="">Such as repair, plumbing, home shifting, car sellers, car rental & more ...</p>

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
            <input type="search" class="form-control" id="search" placeholder="Search sellers here ...">
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
      <h3 class="sellerv_title text-left"><i class="la la-shopping-cart"> </i> My sellers</h3>
    </div>
    <div class="col-6">
      <a class="btn btn-outline-secondary outline pull-right" href="<?php echo site_url('admin/agent/add_seller'); ?>"><i class="la la-shopping-cart"> </i> Add New seller</a>
    </div>
    <div class="col-12">
      <?php //dump($seller); ?>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Thumbnail</th>
            <th scope="col">Seller Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Status</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <?php if(sizeof($seller)): $i = 1; foreach ($seller as $s):  ?>
          <tr>
            <th scope="row"><?php echo $i++; ?></th>
            <td>
              <div class="photo-wrapper" style="height: 80px;width: 80px; background: url(<?php echo site_url('upload/'.$s->photo); ?>) center center;background-size: cover;"></div>
            </td>
            <td><?php echo anchor('admin/agent/seller_profile/'.$s->id, $s->name) ; ?></td>
            <td><?php echo $s->phone ; ?></td>
            <td><?php echo $s->email ; ?></td>
            <td><?php  echo $this->user_m->seller_status($s->s_req); ?>  
              <?php echo $approve = ($s->s_req == '0') ? '<button class="btn btn-outline-secondary outline approve" data-id="'.$s->id.'">Approve</button> ' : ' <i class="la la-check-circle-o la-2x" style="color:green"></i>' ; ?>
            </td>
            <td>
              <div class="btn-group btn-group-sm" role="group" aria-label="First group">
                <a href="<?php echo site_url('admin/agent/seller_profile/'.$s->id);?>" type="button" class="btn btn-outline-secondary  outline"><i class="la la-edit"></i> Edit</a>
                <a href="<?php echo site_url('admin/agent/delete/'.$s->id);?>" type="button" class="btn btn-outline-secondary  outline" onclick="return confirm('You are about to delete a record. This cannot be undone. Are you sure?');"><i class="la la-trash"></i> Delete</a>
                
              </div>
              
            </td>
          </tr>
          <?php endforeach; else: ?>
          <tr>
            <td colspan="7">
              <i class="la la-warning la-2x"> </i> You have no seller.
            </td>
          </tr>
        <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>


<script>
  $('.approve').click(function(){
    var url = "<?php echo site_url('admin/agent/approve_seller/'); ?>";
    var id = $(this).data('id');
    
    $.get( url+id, function( data ) {
          if(data == 'true'){
                alertify.success('<p class="text-center" style="color:#fff;margin:0px">Request Sucessfull</p>');
                $(this).css('display', 'none');
                $('.note').html('<i class="la la-clock-o la-2x"></i> Your request is Under Process!');

                location.reload();
            }else{
              alertify.warning('<p class="text-center" style="color:#fff;margin:0px">Request pending</p>');
            }
        });
  });
</script>