<div class="container">
  <div class="row">
    <div class="content-header col-12">
        <div class="row h-100">
          <div class="col-6 content-justify">
            <h2 class="content-title"><i class="fa fa-fw fa-mail-bulk">  </i> Post Office List</h2>
          </div>
          <div class="col-6 content-justify">
          <?php echo anchor('admin/division/post_office_edit', '<i class="fa fa-fw fa-mail-bulk"></i> Add a Post Office', 'class="btn btn-outline-success float-right btn-md"'); ?>
          </div>
        </div>
    </div>
    <div class="col-12 table-wrapper">
      <table class="table" id="table">
        <thead class="thead-inverse">
          <tr>
            <th>#</th>
            <th class="">Post Office</th>
            <th class="">ডাক</th>
            <th class="">Zip Code</th>
            <th class="">Police Station</th>
            <th>District</th>
            <th>Division</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $no = 1;
          if(sizeof($post_office)):foreach($post_office as $post_office):  ?>
          
          <tr>
            <th scope="row"><?php echo $no++; ?></th>
            <td><?php echo anchor('admin/division/post_office_edit/'.$post_office->id, $post_office->name); ?></td>
            <td><?php echo $post_office->bd_name; ?></td>
            <td><?php echo $post_office->zip; ?></td>
            <td><?php echo $this->post_office_m->police_station_by_id($post_office->police_station); ?></td>
            <td><?php echo $this->post_office_m->district_by_id($post_office->district); ?></td>
            <td><?php echo $this->post_office_m->division_by_id($post_office->division); ?></td>

            <td><?php echo bt_edit('admin/division/post_office_edit/'.$post_office->id); ?></td>
            <td><?php echo bt_delete('admin/division/post_office_delete/'.$post_office->id); ?></td>
          </tr>
        <?php endforeach; ?> <?php else: ?>
        <tr>
          <th>We Could Not Find any post_office !</th>
        </tr>
      <?php endif; ?>

        </tbody>
      </table>
    </div>

    
  </div>
</div>
