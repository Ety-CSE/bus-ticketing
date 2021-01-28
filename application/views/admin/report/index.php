<div class="container">
  <div class="row">
    <div class="content-header col-12">
        <div class="row h-100">
          <div class="col-6 content-justify">
            <h2 class="content-title"><i class="far fa-exclamation-triangle">  </i> Reports List</h2>
          </div>
          <div class="col-6 content-justify">
          <?php echo anchor('admin/report/edit', '<i class="fa fa-exclamation-triangle"></i> Add a Report', 'class="btn btn-outline-success float-right btn-md"'); ?>
          </div>
        </div>
    </div>
    <div class="col-12 table-wrapper">
      <table class="table" id="table">
        <thead class="thead-inverse">
          <tr>
            <th>#</th>
            <th>Customer</th>
            <th class="hidden-sm-down">Rent a car</th>
            <th class="hidden-sm-down">report Description</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $no = 1;
          if(sizeof($reports)):foreach($reports as $report):  ?>
          <tr>
            <td scope="row"><?php echo $no++; ?></td>
            <td><?php echo $this->report_m->user_by_id($report->customer); ?></td>
            <td class="hidden-sm-down"><?php  echo $this->report_m->rentacar_by_id($report->rentacar); ?> </td>
            <td class="hidden-sm-down"><?php echo $report->report;  ?></td>
            </td>

            <td><?php echo bt_edit('admin/report/edit/'.$report->id); ?></td>
            <td><?php echo bt_delete('admin/report/delete/'.$report->id); ?></td>
          </tr>
        <?php endforeach; ?> <?php else: ?>
        <tr>
          <th>We Could Not Find any report !</th>
        </tr>
      <?php endif; ?>

        </tbody>
      </table>
    </div>
    
  </div>
</div>
