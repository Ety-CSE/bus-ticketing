<div class="container">
  <div class="row">
      <div class="content-header col-12">
        <div class="row h-100">
          <div class="col-6 content-justify">
            <h2 class="content-title"><i class="far fa-cubes">  </i> Categories List</h2>
          </div>
          <div class="col-6 content-justify">
          <?php echo anchor('admin/category/edit', '<i class="far fa-cubes"></i> Add a category', 'class="btn btn-outline-success float-right btn-md"'); ?>
          </div>
        </div>
      </div>
  <!-- <h2>category List</h2> -->
      <div class="col-12 table-wrapper">        
        <table class="table" id="table" >
          <thead class="thead-inverse">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th class="hidden-md-down">Details</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $no = 1;
            if(sizeof($categorys)):foreach($categorys as $category):  ?>
            <tr>
              <td scope="row"><?php echo $no++; ?></td>          
              <td><?php echo anchor('admin/category/edit/'.$category->id, $category->title); ?></td>
              <td class="hidden-md-down"><?php echo $category->details; ?></td>
              <td><?php echo bt_edit('admin/category/edit/'.$category->id); ?></td>
              <td><?php echo bt_delete('admin/category/delete/'.$category->id); ?></td>
            </tr>
          <?php endforeach; ?> <?php else: ?>
          <tr>
            <th>We Could Not Find any category !</th>
          </tr>
        <?php endif; ?>

          </tbody>
        </table>
      </div>
  </div>
</div>
