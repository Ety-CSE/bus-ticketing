<div class="container">
  <div class="row">
       <div class="content-header col-12">
      <h2 class="content-title"><i class="la la-clipboard la-2x">  </i> Services List</h2>
    </div>
    <?php echo anchor('admin/service/edit', '<i class="la la-clipboard"></i> Add a service', 'class="btn btn-success btn-md"'); ?>
  <!-- <h2>service List</h2> -->

    <table class="table table-striped table-bordered" style="background: #fff;">
      <thead class="thead-inverse">
        <tr>
          <th>#</th>
          <th class="">Photo</th>
          <th>Name</th>
          <th class="hidden-md-down">Details</th>
          <th class="hidden-sm-down">Category</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $no = 1;
        if(sizeof($services)):foreach($services as $service):  ?>
        <tr>
          <th scope="row"><?php echo $no++; ?></th>
          <th scope="row">
            <?php
              if ($service->s_photo) {
                $img = explode(',', $service->s_photo);
            ?>
            <img src="<?php echo site_url('upload/'.$this->service_m->media_by_id($img[0]));?>" height="40px">
            <?php
               } else {
                echo '<img src="'. site_url('images/services.jpg').'" height="40px">';
               }
              
             ?>
          </th>
          <td><?php echo anchor('admin/service/edit/'.$service->id, $service->s_name); ?></td>
          <td class="hidden-md-down"><?php echo substr($service->s_des,0,30).'...'; ?></td>
          <td class="hidden-sm-down">
            <?php
            if ($service->s_cat == '0') {
              echo 'No Type';
            }else{
              $this->service_m->category_by_id($service->s_cat);               
            }
           ?>
            
           </td>
          <!-- <td class="hidden-sm-down">
            <?php 
              $this->service_m->type_by_id($service->s_type); 
             ?>
          </td> -->
          <td><?php echo bt_edit('admin/service/edit/'.$service->id); ?></td>
          <td><?php echo bt_delete('admin/service/delete/'.$service->id); ?></td>
        </tr>
      <?php endforeach; ?> <?php else: ?>
      <tr>
        <th>We Could Not Find any service !</th>
      </tr>
    <?php endif; ?>

      </tbody>
    </table>
  </div>
</div>
