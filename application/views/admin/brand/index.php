<div class="container">
  <div class="row">
    <div class="content-header col-12">
      <div class="row h-100">
        <div class="col-6 content-justify">
          <h2 class="content-title"><i class="far fa-heart">  </i> Brands List</h2>
        </div>
        <div class="col-6 content-justify">
          <?php echo anchor('admin/brand/edit', '<i class="far fa-heart "></i> Add a Brand', 'class="btn btn-outline-success float-right btn-md"'); ?>
        </div>
      </div>
    </div>

    <div class="col-12 table-wrapper">
      <table class="table" id=" table">
        <thead class="thead-inverse">
          <tr>
            <th>#</th>
            <th class="">Logo</th>
            <th>Name</th>
            <th>Country</th>
            <th class="hidden-md-down">Details</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $no = 1;
          if(sizeof($brands)):foreach($brands as $brand):  ?>
          <tr>
            <td scope="row"><?php echo $no++; ?></td>
            <td scope="row">
              <img src="<?php echo ($brand->logo)? site_url('upload/'.$brand->logo): site_url('img/car.svg');?>" height="40px">
            </td>
            <td><?php echo anchor('admin/brand/edit/'.$brand->id, $brand->title); ?></td>
            <td class="hidden-md-down"><?php echo $brand->country; ?></td>
            <td class="hidden-md-down"><?php echo $brand->details; ?></td>
            
            <td><?php echo bt_edit('admin/brand/edit/'.$brand->id); ?></td>
            <td><?php echo bt_delete('admin/brand/delete/'.$brand->id); ?></td>
          </tr>
        <?php endforeach; ?> <?php else: ?>
        <tr>
          <th>We Could Not Find any brand !</th>
        </tr>
      <?php endif; ?>

        </tbody>
      </table>
    </div>
  </div>
</div>
