<div class="container">
  <div class="row">
    <div class="content-header col-12">
      <div class="row h-100">
        <div class="col-6 content-justify">
          <h2 class="content-title"><i class="far fa-shopping-cart  la-2x">  </i> Orders List</h2>
        </div>
        <div class="col-6 content-justify">
          <?php echo anchor('admin/order/edit', '<i class="fa fa-cart-plus "></i> Add a Order', 'class="btn btn-outline-success btn-md float-right"'); ?>
        </div>
      </div>
      
    </div>
  <!-- <h2>order List</h2> -->

    <div class="col-12 table-wrapper">
      <table class="table" id="table">
        <thead class="thead-inverse">
          <tr>
            <th>#</th>
            <th>Order ID</th>
            <th class="hidden-md-down">Car</th>
            <th class="hidden-sm-down">Package</th>
            <th class="hidden-sm-down">Customer</th>
            <th class="hidden-md-down">Rent a Car</th>
            <th class="hidden-sm-down">status</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $no = 1;
          if(sizeof($orders)):foreach($orders as $order):  ?>
          <tr>
            <td scope="row"><?php echo $no++; ?></td>
            <td><?php echo anchor('admin/order/edit/'.$order->id, $order->order_id); ?></td>
            <td class="hidden-md-down">
              <?php
                $car = unserialize($order->car_info); 
                echo $this->order_m->car_by_id($car['car']);
                ?>
            </td>
            <td class="hidden-sm-down"><?php echo $order->package;  ?></td>
            <td class="hidden-md-down"><?php echo  $this->order_m->user_by_id($order->customer); ?></td>
            <td class="hidden-md-down"><?php echo  $this->order_m->rentacar_by_id($order->rentacar); ?></td>
            <td class="hidden-sm-down"> <?php echo $this->order_m->order_status($order->status);  ?>
            </td>

            <td><?php echo bt_edit('admin/order/edit/'.$order->id); ?></td>
            <td><?php echo bt_delete('admin/order/delete/'.$order->id); ?></td>
          </tr>
        <?php endforeach; else: ?>
        <tr>
          <th>We Could Not Find any order !</th>
        </tr>
      <?php endif; ?>

        </tbody>
      </table>
    </div>
  </div>
</div>