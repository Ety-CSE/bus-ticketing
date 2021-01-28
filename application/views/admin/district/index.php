<div class="container">
  <div class="row">
       <div class="content-header col-12">
        <div class="row h-100">
          <div class="col-6 content-justify">
            <h2 class="content-title"><i class="fa fa-map-marker-alt">  </i> District List</h2>
          </div>
          <div class="col-6 content-justify">
          <?php echo anchor('admin/division/district_edit', '<i class="fa fa-map-marker-alt"></i> Add a district', 'class="btn btn-outline-success float-right btn-md"'); ?>
          </div>
        </div>
        </div>

    <div class="col-12 table-wrapper">
      <table class="table" id="table" >
        <thead class="thead-inverse">
          <tr>
            <th>#</th>
            <th class="">District</th>
            <th class="">জেলা</th>
            <th>Division</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $no = 1;
          if(sizeof($district)):foreach($district as $district):  ?>
          <tr>
            <td scope="row"><?php echo $no++; ?></td>
            <td><?php echo anchor('admin/division/district_edit/'.$district->id, $district->name); ?></td>
            <td><?php echo $district->bd_name; ?></td>
            <td><?php echo $this->district_m->division_by_id($district->division); ?></td>

            <td><?php echo bt_edit('admin/division/district_edit/'.$district->id); ?></td>
            <td><?php echo bt_delete('admin/division/district_delete/'.$district->id); ?></td>
          </tr>
        <?php endforeach; ?> <?php else: ?>
        <tr>
          <th>We Could Not Find any district !</th>
        </tr>
      <?php endif; ?>

        </tbody>
      </table>
    </div>
    
  </div>
</div>
