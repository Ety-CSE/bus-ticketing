<div class="container">
  <div class="row">
    <div class="content-header col-12">
      <div class="row h-100">
          <div class="col-6 content-justify">
            <h2 class="content-title"><i class="fa fa-car">  </i> Rent a Car List</h2>
          </div>
          <div class="col-6 content-justify">
            <?php echo anchor('admin/rentacar/edit', '<i class="fa fa-car"></i> Add a Rent a Car', 'class="btn btn-outline-success btn-md float-right"'); ?>
          </div>
      </div>
    </div>

    <div class="col-md-12 table-wrapper">        
      <table class="table" id="table">
        <thead class="thead-inverse">
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Phone</th>
            <th class="hidden-md-down">Owner</th>
            <th class="hidden-md-down">Zone</th>
            <th class="hidden-md-down">Join Date</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $no = 1;
          if(sizeof($rentacars)):foreach($rentacars as $rentacar):  ?>
          <tr>
            <td scope="row"><?php echo $no++; ?></td>          
            <td><?php echo anchor('admin/rentacar/edit/'.$rentacar->id, $rentacar->name); ?></td>
            <td class="hidden-md-down"><?php echo $rentacar->phone; ?></td>
            <td class="hidden-md-down"><?php echo $this->rentacar_m->user_by_id($rentacar->user_id); ?></td>
            <td class="hidden-md-down"><?php echo $this->rentacar_m->division_by_id($rentacar->division); ?></td>
            <td class="hidden-md-down"><?php echo $rentacar->date; ?></td>
            <td><?php echo bt_edit('admin/rentacar/edit/'.$rentacar->id); ?></td>
            <td><?php echo bt_delete('admin/rentacar/delete/'.$rentacar->id); ?></td>
          </tr>
        <?php endforeach; ?> <?php else: ?>
        <tr>
          <th>We Could Not Find any rentacar !</th>
        </tr>
      <?php endif; ?>

        </tbody>
      </table>
    </div>
  </div>
</div>
