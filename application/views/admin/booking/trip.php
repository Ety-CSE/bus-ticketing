<div class="container" style="margin-top:80px">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <br>
      <h4><b>Route:</b> <?php echo $this->coach_m->get_route_trip($coach);?></h4>
      <p><b> Date:</b> <?php $date = unserialize($this->session->date); echo $date[0];?></p>
      <hr>
      <table class="table">
        <thead>
          <tr>
            <th>Bus</th>
            <th>To</th>
            <th>From</th>
            <th>Departure Time</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
      <?php 
            $trips = unserialize($trip->trip_time);
        if($trips):
            foreach($trips as $t):
        ?>
        <tr>            
            <td><?php echo $this->route_m->get_bus_by_coach($t[3]); ?></td>
            <td><?php echo $t[1];?></td>
            <td><?php echo $t[2];?></td>
            <td><?php  echo date('h:i a', strtotime($t[0])); ?></td>
            <td><?php echo $this->route_m->status($t[4]);?></td>
            <td><?php echo anchor('booking/seat/'.$trip->id, 'View Seats','class="btn btn-outline-success"');?></td>
        </tr>    
        <?php
        endforeach;
        else: ?>
            <tr>
            <td colspan="4"><b>Ops No Trip found in this route!</b></td>
            </tr>
        <?php
        endif;
        ?>
    </tbody>
    </table>
    </div>
  </div>
</div>
