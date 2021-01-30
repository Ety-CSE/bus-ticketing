<div class="container" style="margin-top:80px">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <br>
      <h4>Route: <?php echo $route;?> Route</h4>
      <p><b>Available Trips</b></p>
      <p><b>Date:</b> <?php if($this->session->search): $date = unserialize($this->session->search); echo $date[2];else: date("Y/m/d"); endif;?></p>
      <hr>
      <table class="table">
        <thead>
          <tr>
            <th>Bus Name</th>
            <th>Couch No</th>
            <th>Bus Type</th>
            <th>Class</th>
            <th>Fare</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          if($coach): 
            foreach($coach as $c):
            ?>
          <tr>
            <td><?php echo $this->route_m->bus_by_id($c->bus_id);?></td>
            <td><?php echo $c->no;?></td>
            <td><?php echo $this->route_m->type($c->type);?></td>
            <td><?php echo $this->route_m->category($c->category);?></td>
            <td><?php echo $c->fare;?> BDT</td>
            <td><?php echo anchor('booking/'.$c->id, 'View Trips','class="btn btn-outline-success"');?></td>
          </tr>
          <?php endforeach;
          else: ?>
              <tr>
                <td colspan="6"><b>Ops No Trip found in this route!</b></td>
              </tr>
          <?php
          endif;
          ?>
        </tbody>
      </table>
     
    </div>
    <?php //dump($coach);?>
  </div>
</div>
