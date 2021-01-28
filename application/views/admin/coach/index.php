<div class="container">
  <div class="row">
    <div class="content-header col-12">
      <div class="row h-100">
        <div class="col-6 content-justify">
          <h2 class="content-title"><i class="far fa-coach">  </i> coach List</h2>
        </div>
        <div class="col-6 content-justify">
          <?php echo anchor('admin/coach/edit', '<i class="far fa-coach "></i> Add a coach', 'class="btn btn-outline-success float-right btn-md"'); ?>
        </div>
      </div>
    </div>

    <div class="col-12 table-wrapper">
      <table class="table" id=" table">
        <thead class="thead-inverse">
          <tr>
            <th>#</th>
            <th class="">Coach No</th>
            <th>Bus</th>
            <th>Route</th>
            <th class="hidden-md-down">Category</th>
            <th class="hidden-md-down">Type</th>
            <th class="hidden-md-down">Fare</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $no = 1;
          if(sizeof($coachs)):foreach($coachs as $coach):  ?>
          <tr>
            <td scope="row"><?php echo $no++; ?></td>
            <td scope="row"><?php echo $coach->no; ?></td>
            <td><?php echo $this->coach_m->bus_by_id($coach->bus_id); ?></td>
            <td><?php echo $this->coach_m->route_by_id($coach->route); ?></td>
            <td class="hidden-md-down"><?php echo $this->coach_m->category($coach->category); ?></td>
            <td class="hidden-md-down"><?php echo $this->coach_m->type($coach->type); ?></td>
            <td class="hidden-md-down"><?php echo $coach->fare; ?> BDT</td>
            <td><?php echo $this->coach_m->status($coach->status); ?></td>
            
            <td><?php echo bt_edit('admin/coach/edit/'.$coach->id); ?></td>
            <td><?php echo bt_delete('admin/coach/delete/'.$coach->id); ?></td>
          </tr>
        <?php endforeach; ?> <?php else: ?>
        <tr>
          <th>We Could Not Find any coach !</th>
        </tr>
      <?php endif; ?>

        </tbody>
      </table>
    </div>
  </div>
</div>
