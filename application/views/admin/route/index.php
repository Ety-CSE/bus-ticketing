<div class="container">
  <div class="row">
    <div class="content-header col-12">
      <div class="row h-100">
        <div class="col-6 content-justify">
          <h2 class="content-title"><i class="far fa-route">  </i> route List</h2>
        </div>
        <div class="col-6 content-justify">
          <?php echo anchor('admin/route/edit', '<i class="far fa-route "></i> Add a route', 'class="btn btn-outline-success float-right btn-md"'); ?>
        </div>
      </div>
    </div>

    <div class="col-12 table-wrapper">
      <table class="table" id=" table">
        <thead class="thead-inverse">
          <tr>
            <th>#</th>
            <th class="">Route No</th>
            <th>To</th>
            <th>From</th>
            <th class="hidden-md-down">Distance</th>
            <th class="hidden-md-down">Duration</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $no = 1;
          if(sizeof($routes)):foreach($routes as $route):  ?>
          <tr>
            <td scope="row"><?php echo $no++; ?></td>
            <td scope="row"><?php echo $route->route_no; ?></td>
            <td><?php echo $this->route_m->district_by_id($route->where_to); ?></td>
            <td><?php echo $this->route_m->district_by_id($route->where_from); ?></td>
            <td class="hidden-md-down"><?php echo $route->distance; ?> Km</td>
            <td class="hidden-md-down"><?php echo $route->duration; ?> Houre</td>
            <td><?php echo $this->route_m->status($route->status); ?></td>
            
            <td><?php echo bt_edit('admin/route/edit/'.$route->id); ?></td>
            <td><?php echo bt_delete('admin/route/delete/'.$route->id); ?></td>
          </tr>
        <?php endforeach; ?> <?php else: ?>
        <tr>
          <th>We Could Not Find any route !</th>
        </tr>
      <?php endif; ?>

        </tbody>
      </table>
    </div>
  </div>
</div>
