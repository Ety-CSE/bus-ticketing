<div class="container">
  <div class="row">
    <div class="content-header col-12">
      <div class="row h-100">
          <div class="col-6 content-justify">
            <h2 class="content-title"><i class="fa fa-fw fa-hotel">  </i> Police Station List</h2>
          </div>
          <div class="col-6 content-justify">
          <?php echo anchor('admin/division/police_station_edit', '<i class="fa fa-fw fa-hotel"></i> Add a Police Station', 'class="btn btn-outline-success float-right btn-md"'); ?>
          </div>
        </div>
    </div>
    <div class="col-12 table-wrapper">
      <table class="table" id="table">
        <thead class="thead-inverse">
          <tr>
            <th>#</th>
            <th class="">Police Station</th>
            <th class="">থানা</th>
            <th>District</th>
            <th>Division</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $no = 1;
          if(sizeof($police_station)):foreach($police_station as $police_station):  ?>
          <tr>
            <th scope="row"><?php echo $no++; ?></th>
            <td><?php echo anchor('admin/division/police_station_edit/'.$police_station->id, $police_station->name); ?></td>
            <td><?php echo $police_station->bd_name; ?></td>
            <td><?php echo $this->police_station_m->district_by_id($police_station->district); ?></td>
            <td><?php echo $this->police_station_m->division_by_id($police_station->division); ?></td>

            <td><?php echo bt_edit('admin/division/police_station_edit/'.$police_station->id); ?></td>
            <td><?php echo bt_delete('admin/division/police_station_delete/'.$police_station->id); ?></td>
          </tr>
        <?php endforeach; ?> <?php else: ?>
        <tr>
          <th>We Could Not Find any police_station !</th>
        </tr>
      <?php endif; ?>

        </tbody>
      </table>
    </div>

    
  </div>
</div>
