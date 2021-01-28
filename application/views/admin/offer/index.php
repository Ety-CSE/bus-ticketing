<div class="container">
      <div class="content-header col-12">
        <div class="row h-100">
          <div class="col-6 content-justify">
            <h2 class="content-title"><i class="far fa-shopping-cart">  </i> Offer List</h2>
          </div>
          <div class="col-6 content-justify">
          <?php echo anchor('admin/offer/edit', '<i class="far fa-bullhorn "></i> Add a offer', 'class="btn btn-outline-success float-right btn-md"'); ?>
          </div>
        </div>
      </div>

  <!-- <div class="row"> -->

    <div class="col-12 table-wrapper">
    <table class="table" id="table">
      <thead class="thead-inverse">
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
      //dump($offers);
        $no = 1;
        if(count($offers)):foreach($offers as $offer):  ?>
        <tr>
          <td scope="row"><?php echo $no++; ?></td>
          <td><?php echo anchor('admin/offer/edit/'.$offer->id, $offer->title); ?></td>
          <td class="hidden-md-down"><?php echo $this->offer_m->rentacar_by_id($offer->rentacar); ?></td>
          <td class="hidden-sm-down"><?php echo $this->offer_m->car_by_id($offer->car);  ?></td>
          <td class="hidden-sm-down"><?php echo $offer->date;  ?></td>
          <td class="hidden-sm-down"> <?php echo ($offer->status == '0')?'Pending':'Active';  ?>
          </td>

          <td><?php echo bt_edit('admin/offer/edit/'.$offer->id); ?></td>
          <td><?php echo bt_delete('admin/offer/delete/'.$offer->id); ?></td>
        </tr>
      <?php endforeach; ?> <?php else: ?>
      <tr>
        <th>We Could Not Find any offer !</th>
      </tr>
    <?php endif; ?>

      </tbody>
    </table>
    </div>
  </div>
</div>

