<div class="container">
  <div class="row">
    <div class="content-header col-12">
        <div class="row h-100">
            <div class="col-6 content-justify">
                <h2 class="content-title"><i class="far fa-user-check">  </i> Buyer Requests List</h2>
                <!-- <h2 class="content-title"><i class="far fa-bullhorn">  </i> Offers List</h2> -->
            </div>
            <div class="col-6 content-justify">
                <?php echo anchor('admin/customer/request_a_car', '<i class="far fa-user-check"></i> Request for a Car', 'class="btn btn-outline-success btn-sm float-right"'); ?>
            </div>
        </div>
    </div>
      
    <div class="col-12 table-wrapper">
        <table class="table">
        <thead class="thead-inverse">
            <tr>
            <th>#</th>
            <th class="hidden-sm-down">Request ID</th>
            <th class="hidden-md-down">Journy Date</th>
            <th class="hidden-md-down">Car</th>
            <th class="hidden-sm-down">Type</th>
            <th class="hidden-md-down">Date</th>
            <th class="hidden-sm-down">status</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $no = 1;
            if(sizeof($buyer_requests)):foreach($buyer_requests as $buyer_request): 
                $pickup_info = unserialize($buyer_request->pickup_info);
                // dump($buyer_request);
            ?>
            <tr>
            <td scope="row"><?php echo $no++; ?></td>
            <td><?php echo anchor('admin/customer/request_a_car/'.$buyer_request->id, $buyer_request->request_id); ?></td>
            <td class="hidden-md-down"><?php echo substr($pickup_info['p_date'],0,10); ?></td>
            <td class="hidden-sm-down"><?php echo $this->buyer_request_m->car_by_id($buyer_request->car);  ?></td>
            <td class="hidden-sm-down"><?php  echo ucwords($buyer_request->type); ?></td>
            <td class="hidden-md-down"> <?php echo $buyer_request->date;//substr($buyer_request->date, 0, 10); ?>
            <td class="hidden-sm-down"> <?php echo $this->buyer_request_m->br_status($buyer_request->status);  ?>
            </td>
            
            <td><?php echo bt_edit('admin/customer/request_a_car/'.$buyer_request->id); ?> &nbsp; <?php echo bt_view('admin/customer/buyer_request_response/'.$buyer_request->id); ?> &nbsp; <?php echo bt_delete('admin/customer/delete_request/'.$buyer_request->id); ?></td>
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
