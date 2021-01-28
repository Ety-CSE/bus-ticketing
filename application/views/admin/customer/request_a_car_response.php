<div class="container">
  <div class="row">
    <div class="content-header col-12">
        <div class="row h-100">
            <div class="col-6 content-justify">
                <h2 class="content-title"><i class="far fa-user-check">  </i> Response for Buyer Request: <?php echo $buyer_requests->request_id;?></h2>
            </div>
            <div class="col-6 content-justify">
            </div>
        </div>
    </div>
    <div class="content-header col-12">
        <?php $pickup = unserialize($buyer_requests->pickup_info); //dump($pickup) ?>
        <h5>Request id: <?php echo $buyer_requests->request_id;?></h5>
        <p>Journy Date: <?php echo substr($pickup['p_date'], 0, 10);?> | Car Request Type:   <?php echo strtoupper($buyer_requests->type);?></p>
        <p> Pickup Address: <?php echo substr($pickup['pickup_add'], 0, 10);?>  | Destination: <?php echo $buyer_requests->destination;;?> </p>
        <p>Details: <?php echo $buyer_requests->details;;?> </p>
    </div>  
    <div class="col-12 table-wrapper">
        <table class="table">
        <thead class="thead-inverse">
            <tr>
            <th>#</th>
            <th class="hidden-sm-down">Rent a Car</th>
            <th class="hidden-md-down">Offer</th>
            <th class="hidden-md-down">Package</th>
            <th class="hidden-sm-down">Rent</th>
            <th class="hidden-md-down">Date</th>
            <th class="hidden-sm-down">status</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $no = 1;
            // dump($buyer_requests);
            if(sizeof($responses)):foreach($responses as $response): 
                $pickup_info = unserialize($response->pickup_info);
            ?>
            <tr>
            <td scope="row"><?php echo $no++; ?></td>
            <td><?php echo anchor('admin/customer/request_a_car/'.$response->id, $this->buyer_request_m->rentacar_by_id($response->rentacar)); ?></td>
            <td class="hidden-md-down"><?php echo $this->buyer_request_m->offer_by_id($response->offer_id); ?></td>
            <td class="hidden-sm-down"><?php  echo ucwords($response->package); ?></td>
            <td class="hidden-sm-down"><?php  echo ucwords($response->rent); ?> <small>BDT</small></td>
            <td class="hidden-md-down"> <?php echo $response->date; ?>
            <td class="hidden-sm-down"> <?php echo $this->buyer_request_m->br_status($response->status);  ?>
            </td>

            <td><?php echo bt_edit('admin/customer/request_a_car/'.$response->id); ?> &nbsp; <?php echo bt_view('admin/customer/delete_request/'.$response->id); ?> &nbsp; <?php echo bt_delete('admin/customer/delete_request/'.$response->id); ?></td>
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
