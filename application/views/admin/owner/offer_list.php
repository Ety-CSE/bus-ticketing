<div class="container">
  <div class="row">
    <div class="content-header col-12">
      <div class="row h-100">
        <div class="col-6 content-justify">
            <h2 class="content-title"><i class="far fa-bullhorn">  </i> Offers List</h2>
        </div>
        <div class="col-6 content-justify">
            <?php echo anchor('admin/rent_a_car/edit_offer', '<i class="far fa-bullhorn "></i> Add an offer', 'class="btn btn-outline-success btn-md float-right"'); ?>
        </div>
      </div>
    </div>
  <!-- <h2>offer List</h2> -->

    <div class="col-12 table-wrapper">
    <table class="table "  style="width:100%">
      <thead class="thead-inverse">
        <!-- <tr>
          <th colspan="4">
            <h2 class="content-title"><i class="far fa-bullhorn">  </i> Offers List</h2>
          </th>
          <th  colspan="4">
            <?php echo anchor('admin/rent_a_car/edit_offer', '<i class="far fa-bullhorn "></i> Add a offer', 'class="btn btn-outline-success btn-md float-right"'); ?>
          </th>
        </tr> -->
        <tr>
          <th>#</th>
          <th>Title</th>
          <th class="hidden-md-down">Rent a car</th>
          <th class="hidden-sm-down">Car</th>
          <th class="hidden-sm-down">Date</th>
          <th class="hidden-sm-down">Status</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
      <?php
    //   dump($offers);
        $no = 1;
        if(count($offers)):foreach($offers as $offer):  ?>
        <tr>
          <td scope="row"><?php echo $no++; ?></td>
          <td><?php echo anchor('admin/rent_a_car/edit_offer/'.$offer->id, $offer->title); ?></td>
          <td class="hidden-md-down"><?php echo $this->offer_m->rentacar_by_id($offer->rentacar); ?></td>
          <td class="hidden-sm-down"><?php echo $this->offer_m->car_by_id($offer->car);  ?></td>
          <td class="hidden-sm-down"><?php echo $offer->date;  ?></td>
          <td class="hidden-sm-down"> <?php echo ($offer->status == '0')?'Pending':'Active';  ?>
          </td>

          <td><?php echo bt_edit('admin/rent_a_car/edit_offer/'.$offer->id); ?></td>
          <td><?php echo bt_delete('admin/rent_a_car/delete/'.$offer->id); ?></td>
        </tr>
      <?php endforeach; ?> <?php else: ?>
      <tr>
        <th colspan="8">We Could Not Find any offer !</th>
      </tr>
    <?php endif; ?>

      </tbody>
    </table>
    </div>
  </div>
</div>

