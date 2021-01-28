<div class="container">
  <div class="row">
    <div class="content-header col-12">
        <div class="row h-100">
          <div class="col-6 content-justify">
            <h2 class="content-title"><i class="far fa-star">  </i> Reviews List</h2>
          </div>
          <div class="col-6 content-justify">
          <?php echo anchor('admin/review/edit', '<i class="far fa-star"></i> Add a Review', 'class="btn btn-outline-success float-right btn-md"'); ?>
          </div>
        </div>
    </div>
    <div class="col-12 table-wrapper">
      <table class="table" id="table">
        <thead class="thead-inverse">
          <tr>
            <th>#</th>
            <th>Order ID</th>
            <th>Customer</th>
            <th class="hidden-sm-down">Review</th>
            <th class="hidden-sm-down">Review Description</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $no = 1;
          if(sizeof($reviews)):foreach($reviews as $review):  ?>
          <tr>
            <td scope="row"><?php echo $no++; ?></td>
            <td><?php echo $this->review_m->order_by_id($review->order_id); ?></td>
            <td><?php echo $this->review_m->user_by_id($review->customer); ?></td>
            <td class="hidden-sm-down"><?php  echo $review->star; ?> Star</td>
            <td class="hidden-sm-down"><?php echo $review->review;  ?></td>
            </td>

            <td><?php echo bt_edit('admin/review/edit/'.$review->id); ?></td>
            <td><?php echo bt_delete('admin/review/delete/'.$review->id); ?></td>
          </tr>
        <?php endforeach; ?> <?php else: ?>
        <tr>
          <th>We Could Not Find any review !</th>
        </tr>
      <?php endif; ?>

        </tbody>
      </table>
    </div>
    
  </div>
</div>
