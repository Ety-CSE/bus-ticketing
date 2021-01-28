<div class="container">
  <div class="row">
    <div class="content-header col-12">
      <div class="row h-100">
        <div class="col-6 content-justify">
          <h2 class="content-title"><i class="fa fa-car">  </i> Cars List</h2>
        </div>
        <div class="col-6 content-justify">
        <?php echo anchor('admin/car/edit', '<i class="fa fa-car"></i> Add a Car', 'class="btn btn-outline-success float-right btn-md"'); ?>
        </div>
      </div>
    </div>

    <div class="col-12 table-wrapper">
      <table class="table" id="table">
        <thead class="thead-inverse">
          <tr>
            <th>#</th>
            <th class="">Icon</th>
            <th>Model</th>
            <th>Brand</th>
            <th>Seat</th>
            <th class="hidden-md-down">Category</th>
            <th class="hidden-sm-down">Passenger</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $no = 1;
          if(sizeof($cars)):foreach($cars as $car):  ?>
          <tr>
            <td scope="row"><?php echo $no++; ?></td>
            <td scope="row"><img src="<?php echo $icon = ($car->icon) ? site_url('upload/'.$car->icon) : site_url('img/car.svg') ; ?>" height="40px"   class="img ">
            </td>
            <td class="hidden-md-down"><?php echo $car->model; ?></td>
            <td><?php echo anchor('admin/car/edit/'.$car->id, $this->car_m->brand_by_id($car->brand)); ?></td>
            <td class="hidden-md-down"><?php echo $car->seat; ?></td>
            <td><?php echo anchor('admin/car/edit/'.$car->id, $this->car_m->category_by_id($car->category)); ?></td>
            <td class="hidden-sm-down">
              <?php
              echo $car->pass.' Person';
            ?>
              
            </td>
            <!-- <td class="hidden-sm-down">
              <?php 
                $this->car_m->type_by_id($car->s_type); 
              ?>
            </td> -->
            <td><?php echo bt_edit('admin/car/edit/'.$car->id); ?></td>
            <td><?php echo bt_delete('admin/car/delete/'.$car->id); ?></td>
          </tr>
        <?php endforeach; ?> <?php else: ?>
        <tr>
          <th>We Could Not Find any car !</th>
        </tr>
      <?php endif; ?>

        </tbody>
      </table>
    </div>
  </div>
</div>
