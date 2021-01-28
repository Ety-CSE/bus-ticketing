<div class="container">
  <div class="row">
    <div class="content-header col-12">
      <div class="row h-100">
        <div class="col-6 content-justify">
          <h2 class="content-title"><i class="far fa-check-circle">  </i> Bid's List</h2>
        </div>
        <div class="col-6 content-justify">
        <?php echo anchor('admin/bid/edit', '<i class="far fa-check-circle "></i> Add a Bid', 'class="btn btn-outline-success float-right btn-md"'); ?>
        </div>
      </div>
      
    </div>
    
    <div class="col-12 table-wrapper">
      <table class="table" id="table">
        <thead class="thead-inverse">
          <tr>
            <th>#</th>
            <th class="hidden-sm-down">Request ID</th>
            <th class="hidden-md-down">Rent a Car</th>
            <th class="hidden-md-down">Offer</th>
            <th class="hidden-sm-down">Package</th>
            <th class="hidden-md-down">Date</th>
            <th class="hidden-sm-down">status</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $no = 1;
          if(sizeof($bids)):foreach($bids as $bid):  ?>
          <tr>
            <td scope="row"><?php echo $no++; ?></td>
            <td><?php echo anchor('admin/bid/edit/'.$bid->id, $bid->request_id); ?></td>
            <td class="hidden-md-down"><?php echo $this->bid_m->rentacar_by_id($bid->rentacar); ?></td>
            <td class="hidden-sm-down"><?php echo $this->bid_m->offer_by_id($bid->offer_id);  ?></td>
            <td class="hidden-sm-down"><?php  echo $bid->package; ?></td>
            <td class="hidden-md-down"> <?php echo $bid->date; ?>
            <td class="hidden-sm-down"> <?php echo $this->bid_m->n_status($bid->status);  ?>
            </td>

            <td><?php echo bt_edit('admin/bid/edit/'.$bid->id); ?></td>
            <td><?php echo bt_delete('admin/bid/delete/'.$bid->id); ?></td>
          </tr>
        <?php endforeach; ?> <?php else: ?>
        <tr>
          <th>We Could Not Find any bid !</th>
        </tr>
      <?php endif; ?>

        </tbody>
      </table>
    </div>
  </div>
</div>
