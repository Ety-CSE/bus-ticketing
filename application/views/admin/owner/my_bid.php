<div class="container">
  <div class="row">
    <div class="content-header col-12">
      <div class="row h-100">
        <div class="col-6 content-justify">
            <!-- <h2 class="content-title"><i class="far fa-bullhorn">  </i> Offers List</h2> -->
            <h2 class="content-title"><i class="far fa-fw fa-check-circle">  </i> My Bids</h2>
        </div>
        <div class="col-6 content-justify">
        </div>
      </div>
    </div>
  <!-- <h2>bid List</h2> -->
    <div class="col-12 table-wrapper">   
        <table class="table">
        <thead class="thead-inverse">
            <tr>
            <th>#</th>
            <th class="hidden-sm-down">Request ID</th>
            <th class="hidden-md-down">Rent</th>
            <th class="hidden-md-down">Offer</th>
            <th class="hidden-sm-down">Type</th>
            <th class="hidden-md-down">Date</th>
            <th class="hidden-sm-down">status</th>
            <th class="text-center">View</th>
            <!-- <th class="text-center">Delete</th> -->
            </tr>
        </thead>
        <tbody>
        <?php
            $no = 1;
            if(sizeof($bids)):foreach($bids as $bid): 
            $r_id = $this->bid_m->br_by_request_id($bid->request_id); 
            ?>
            <tr>                
            <td scope="row"><?php echo $no++;?></td>
            <td><?php echo anchor('admin/rent_a_car/bid/'.$r_id->id, $bid->request_id); ?></td>
            <td class="hidden-md-down"><?php echo $this->bid_m->user_by_id($bid->rent); ?> BDT</td>
            <td class="hidden-sm-down"><?php echo $this->bid_m->offer_by_id($bid->offer_id);  ?></td>
            <td class="hidden-sm-down"><?php  echo ucwords($bid->package); ?></td>
            <td class="hidden-md-down"> <?php echo $bid->date;//substr($bid->date, 0, 10); ?>
            <td class="hidden-sm-down"> <?php echo $this->bid_m->br_status($bid->status);  ?> 
            </td>

            <td class="text-center"><?php echo bt_view('admin/rent_a_car/bid/'.$r_id->id); ?></td>
            <!-- <td class="text-center"><?php echo bt_delete('admin/bid/delete/'.$bid->id); ?></td> -->
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
