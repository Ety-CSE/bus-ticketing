<div class="container">
  <div class="row">
       <div class="content-header col-12">
        <div class="row h-100">
          <div class="col-6 content-justify">
            <h2 class="content-title"><i class="far fa-map-marked-alt">  </i> Divisions List</h2>
          </div>
          <div class="col-6 content-justify">
            <?php echo anchor('admin/division/edit', '<i class="far fa-map-marked-alt"></i> Add a division', 'class="btn btn-outline-success float-right btn-md"'); ?>
          </div>
        </div>
        </div>

    <div class="col-12  table-wrapper">
      <table class="table" id="table" >
        <thead class="thead-inverse">
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>নাম</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $no = 1;
          if(sizeof($divisions)):foreach($divisions as $division):  ?>
          <tr>
            <td scope="row"><?php echo $no++; ?></td>
            <td><?php echo anchor('admin/division/edit/'.$division->id, $division->name); ?></td>
            <td><?php echo $division->bd_name; ?></td>
            <td><?php echo bt_edit('admin/division/edit/'.$division->id); ?></td>
            <td><?php echo bt_delete('admin/division/delete/'.$division->id); ?></td>
          </tr>
        <?php endforeach; ?> <?php else: ?>
        <tr>
          <th>We Could Not Find any division !</th>
        </tr>
      <?php endif; ?>

        </tbody>
      </table>
    </div>
  </div>
</div>

