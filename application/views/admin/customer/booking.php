<div class="container" style="margin-top:20px">
  <div class="row">
    <div class="col-md-10 offset-md-1">
      <h4><b>My Booking Ticket</b></h4>
      <hr>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Trip</th>
            <th scope="col">Data</th>
            <th scope="col">Coach</th>
            <th scope="col">Time</th>
            <th scope="col">Seats</th>
            <th scope="col">Fare</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php if($booking): 
            foreach($booking as $b):
          ?>
          <tr>
            <td><?php echo $this->booking_m->get_route_by_trip($b->trip_id, $b->trip_no);?></td>
            <td><?php echo $b->journey_date;?></td>
            <?php $p = unserialize($b->payment); //dump();?>
            <td><?php echo $this->booking_m->get_bus_by_coach($b->coach_id);?></td>
            <td><?php echo $this->booking_m->get_time_by_trip($b->trip_id, $b->trip_no);?></td>
            <td><?php echo $b->seat_no;?></td>
            <td><?php echo $p[0];?> BDT</td>
            <td><?php echo bt_view('admin/customer/ticket/'.$b->id); ?></td>
            
          </tr>
        <?php endforeach; else: ?>
          <tr colspan="5">
            <th>You Never booked any ticket yet!</td>
          </tr>
        <?php endif; ?>
        </tbody>
      </table>
      <?php 
      // dump($booking);
      //foreach($trip as $r): 
?>
      
    </div>
  </div>
  
</div>



<?php $seats =  explode(',',$booking->seat_no);?>

<?php //endforeach; ?>