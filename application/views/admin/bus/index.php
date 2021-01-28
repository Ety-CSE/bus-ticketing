<div class="container">
  <div class="row">
    <div class="content-header col-12">
      <div class="row h-100">
        <div class="col-6 content-justify">
          <h2 class="content-title"><i class="far fa-bus">  </i> Bus List</h2>
        </div>
        <div class="col-6 content-justify">
          <?php echo anchor('admin/bus/edit', '<i class="far fa-bus "></i> Add a bus', 'class="btn btn-outline-success float-right btn-md"'); ?>
        </div>
      </div>
    </div>

    <div class="col-12 table-wrapper">
      <table class="table" id=" table">
        <thead class="thead-inverse">
          <tr>
            <th>#</th>
            <th class="">photo</th>
            <th>Name</th>
            <th class="hidden-md-down">Details</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $no = 1;
          if(sizeof($buss)):foreach($buss as $bus):  ?>
          <tr>
            <td scope="row"><?php echo $no++; ?></td>
            <td scope="row">
              <img src="<?php echo ($bus->photo)? site_url('upload/'.$bus->photo): site_url('img/bus.png');?>" height="40px">
            </td>
            <td><?php echo anchor('admin/bus/edit/'.$bus->id, $bus->name); ?></td>
            <td class="hidden-md-down"><?php echo $bus->des; ?></td>
            <td class="hidden-md-down"><?php echo $this->bus_m->status($bus->status); ?></td>
            
            <td><?php echo bt_edit('admin/bus/edit/'.$bus->id); ?></td>
            <td><?php echo bt_delete('admin/bus/delete/'.$bus->id); ?></td>
          </tr>
        <?php endforeach; ?> <?php else: ?>
        <tr>
          <th>We Could Not Find any bus !</th>
        </tr>
      <?php endif; ?>

        </tbody>
      </table>
    </div>
  </div>
</div>
