<div class="container">
  <div class="row">
    <div class="content-header col-12">
      <div class="row h-100">
        <div class="col-6 content-justify">
            <h2 class="content-title"><i class="far fa-bullhorn">  </i> orders List</h2>
        </div>
        <div class="col-6 content-justify">
            <?php echo anchor('admin/rent_a_car/edit_order', '<i class="far fa-bullhorn "></i> Add an order', 'class="btn btn-outline-success btn-md float-right"'); ?>
        </div>
      </div>
    </div>
  <!-- <h2>order List</h2> -->

    <div class="col-12 table-wrapper">
    <table class="table "  style="width:100%">
      <thead class="thead-inverse">
        <!-- <tr>
          <th colspan="4">
            <h2 class="content-title"><i class="far fa-bullhorn">  </i> orders List</h2>
          </th>
          <th  colspan="4">
            <?php echo anchor('admin/rent_a_car/edit_order', '<i class="far fa-bullhorn "></i> Add a order', 'class="btn btn-outline-success btn-md float-right"'); ?>
          </th>
        </tr> -->
        <tr>
          <th>#</th>
          <th>Order ID</th>
          <th>Customer</th>
          <th>Package</th>
          <th class="hidden-sm-down">Car</th>
          <th class="hidden-md-down">Rent</th>
          <th class="hidden-sm-down">Date</th>
          <th class="hidden-sm-down">Status</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
      <?php
        // dump($orders);
        $no = 1;
        if(count($orders)):foreach($orders as $order):  
          $car_info = unserialize($order->car_info);
          // dump($car_info);
        ?>
        <tr>
          <td scope="row"><?php echo $no++; ?></td>
          <td><?php echo anchor('admin/rent_a_car/edit_order/'.$order->id, $order->order_id); ?></td>
          <td class="hidden-sm-down"><?php echo $this->order_m->user_by_id($order->customer);  ?></td>
          <td class="hidden-sm-down"><?php echo strtoupper($order->package);  ?></td>
          <td class="hidden-md-down"><?php echo $this->order_m->car_by_id($car_info['car']); ?></td>
          <td class="hidden-sm-down"><?php echo $order->rent;  ?><small><b> BDT</b></small></td>
          <td class="hidden-sm-down"><?php echo $order->date;  ?></td>
          <td class="hidden-sm-down"> <?php echo ($order->status == '0')?'Pending':'Active';  ?>
          </td>

          <td><?php echo bt_edit('admin/rent_a_car/edit_order/'.$order->id); ?></td>
          <td><?php echo bt_delete('admin/rent_a_car/delete_order/'.$order->id); ?></td>
        </tr>
      <?php endforeach; ?> <?php else: ?>
      <tr>
        <th colspan="8">We Could Not Find any order !</th>
      </tr>
    <?php endif; ?>

      </tbody>
    </table>
    </div>
  </div>
</div>

