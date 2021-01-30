<div class="container" style="margin-top:80px">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <br>
      <?php  //dump($coach); ?>
      <h4><b>Route:</b> <?php echo $this->coach_m->get_route_trip($coach->route);//echo $coach?></h4>
      <p><b> Date:</b> <?php if($this->session->search): $date = unserialize($this->session->search); echo $date[2]; else: date("Y/m/d"); endif;?></p>
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
            $trip = $this->coach_m->trip_by_route($coach->route);
            $trips = unserialize($trip->trip_time);
        if($trips):
            foreach($trips as $k => $t):
              if($coach->id  == $t[3]):
        ?>
        <tr>            
            <td><?php echo $this->route_m->get_bus_by_coach($t[3]); ?></td>
            <td><?php echo $t[1];?></td>
            <td><?php echo $t[2];?></td>
            <td><?php  echo date('h:i a', strtotime($t[0])); ?></td>
            <td><?php echo $this->route_m->status($t[4]);?></td>
            <td><?php echo anchor('booking/seat/'.$trip->id.'/'.$t[3].'/'.$k, 'View Seats','class="btn btn-outline-success"');?></td>
        </tr>    
        <?php
          endif;
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
