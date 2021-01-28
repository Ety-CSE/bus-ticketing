<div class="container">
  <div class="row">
       <div class="content-header col-12">
        <div class="row h-100">
          <div class="col-6 content-justify">
            <h2 class="content-title"><i class="far fa-bell">  </i> Notifications List</h2>
          </div>
          <div class="col-6 content-justify">
          <?php echo anchor('admin/notification/edit', '<i class="la la-plus "></i> Add a notification', 'class="btn btn-outline-success float-right btn-md"'); ?>
          </div>
        </div>
      </div>
      <div class="col-12 table-wrapper">
        <table class="table" id="table">
          <thead class="thead-inverse">
            <tr>
              <th>#</th>
              <th class="hidden-sm-down">title</th>
              <th class="hidden-md-down">Customer</th>
              <th class="hidden-sm-down">Type</th>
              <th class="hidden-md-down">Date</th>
              <th class="hidden-sm-down">status</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $no = 1;
            if(sizeof($notifications)):foreach($notifications as $notification):  ?>
            <tr>
              <td scope="row"><?php echo $no++; ?></td>
              <td><?php echo anchor('admin/notification/edit/'.$notification->id, $notification->sub); ?></td>
              <td class="hidden-md-down"><?php echo $this->notification_m->user_by_id($notification->user_id); ?></td>
              <td class="hidden-sm-down"><?php  echo $this->notification_m->n_type($notification->type); ?></td>
              <!-- <td class="hidden-sm-down"><?php echo $notification->n_des;  ?></td> -->
              <td class="hidden-md-down"> <?php echo substr($notification->date, 0, 10); ?>
              <td class="hidden-sm-down"> <?php echo $this->notification_m->n_status($notification->status);  ?>
              </td>

              <td><?php echo bt_edit('admin/notification/edit/'.$notification->id); ?></td>
              <td><?php echo bt_delete('admin/notification/delete/'.$notification->id); ?></td>
            </tr>
          <?php endforeach; ?> <?php else: ?>
          <tr>
            <th>We Could Not Find any Notification !</th>
          </tr>
        <?php endif; ?>

          </tbody>
        </table>
      </div>
    
  </div>
</div>
