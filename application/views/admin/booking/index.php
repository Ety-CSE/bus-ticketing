<div class="container" style="margin-top:80px">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <br>
      <h4>Available Bus List in <?php echo $route;?> Route</h4>
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
            <td><?php echo $this->route_m->get_fare_by_route($c->route);?> BDT</td>
            <td><?php echo anchor('booking/'.$c->route, 'View Trips','class="btn btn-outline-success"');?></td>
          </tr>
          <?php endforeach;
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
    <?php //dump($coach);?>
  </div>
</div>
