<div class="container">
  <div class="row">
    <div class="content-header col-12">
      <div class="row h-100">
        <div class="col-6 content-justify">
          <h2 class="content-title"><i class="far fa-trip">  </i> Trip List</h2>
        </div>
        <div class="col-6 content-justify">
          <?php echo anchor('admin/trip/edit', '<i class="far fa-trip "></i> Add a trip', 'class="btn btn-outline-success float-right btn-md"'); ?>
        </div>
      </div>
    </div>

    <div class="col-12 table-wrapper">
      <table class="table" id=" table">
        <thead class="thead-inverse">
          <tr>
            <th>#</th>
            <th>Route</th>
            <th>Trip</th>
            <th>Bus</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $no = 1;
          if(sizeof($trips)):foreach($trips as $trip):  ?>
          <tr>
            <td scope="row"><?php echo $no++; ?></td>
            <td><?php echo $this->trip_m->get_route_trip($trip->route_id); ?></td>
            <td>
              <?php 
                $trip_time = unserialize($trip->trip_time);
                
                echo count($trip_time);
              ?> Trips
            </td>
            <td>
              <?php
                $coach_ids = array();
                 foreach($trip_time as $tt){
                  if (!in_array($tt[3], $coach_ids)) {
                    array_push($coach_ids, $tt[3]);;
                  }
                }
              // dump($coach_ids);
              foreach($coach_ids as $coach){
                echo '<span class="badge badge-secondary">';
                echo strtoupper($this->trip_m->get_coach_bus($coach));
                echo '</span> &nbsp;';
              }

              ?>
            </td>
            <td><?php echo $this->trip_m->status($trip->status); ?></td>
            
            <td><?php echo bt_edit('admin/trip/edit/'.$trip->id); ?></td>
            <td><?php echo bt_delete('admin/trip/delete/'.$trip->id); ?></td>
          </tr>
        <?php endforeach; ?> <?php else: ?>
        <tr>
          <th>We Could Not Find any Trip !</th>
        </tr>
      <?php endif; ?>

        </tbody>
      </table>
    </div>
  </div>
</div>
