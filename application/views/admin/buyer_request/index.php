<div class="container">
  <div class="row">
       <div class="content-header col-12">
        <div class="row h-100">
            <div class="col-6 content-justify">
              <h2 class="content-title"><i class="far fa-user-check">  </i> Buyer Requests List</h2>
            </div>
            <div class="col-6 content-justify">
              <?php echo anchor('admin/buyer_request/edit', '<i class="far fa-user-check "></i> Add a Buyer Request', 'class="btn btn-outline-success btn-md float-right"'); ?>
            </div>
          </div>
      </div>
      <div class="col-12 table-wrapper" >
        <table class="table" id="table">
          <thead class="thead-inverse">
            <tr>
              <th>#</th>
              <th class="hidden-sm-down">Request ID</th>
              <th class="hidden-md-down">Customer</th>
              <th class="hidden-md-down">Car</th>
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
            if(sizeof($buyer_requests)):foreach($buyer_requests as $buyer_request):  ?>
            <tr>
              <td scope="row"><?php echo $no++; ?></td>
              <td><?php echo anchor('admin/buyer_request/edit/'.$buyer_request->id, $buyer_request->request_id); ?></td>
              <td class="hidden-md-down"><?php echo $this->buyer_request_m->user_by_id($buyer_request->customer); ?></td>
              <td class="hidden-sm-down"><?php echo $this->buyer_request_m->car_by_id($buyer_request->car);  ?></td>
              <td class="hidden-sm-down"><?php  echo ucwords($buyer_request->type); ?></td>
              <td class="hidden-md-down"> <?php echo $buyer_request->date;//substr($buyer_request->date, 0, 10); ?>
              <td class="hidden-sm-down"> <?php echo $this->buyer_request_m->n_status($buyer_request->status);  ?>
              </td>

              <td><?php echo bt_edit('admin/buyer_request/edit/'.$buyer_request->id); ?></td>
              <td><?php echo bt_delete('admin/buyer_request/delete/'.$buyer_request->id); ?></td>
            </tr>
          <?php endforeach; ?> <?php else: ?>
          <tr>
            <th>We Could Not Find any buyer_request !</th>
          </tr>
        <?php endif; ?>

          </tbody>
        </table>
      </div>
    
  </div>
</div>
