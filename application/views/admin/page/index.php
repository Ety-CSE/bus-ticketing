<div class="container">
  <div class="row h-100">
       <div class="content-header col-12 my-auto">
        <div class="row h-100">
            <div class="col-6 content-justify">
              <h2 class="content-title"><i class="fa fa-pager">  </i> Page List</h2>
            </div>
            <div class="col-6 content-justify">
            <?php echo anchor('admin/page/edit', '<i class="fa fa-plus"> </i> Add a page', 'class="btn btn-outline-success float-right btn-md"'); ?>
            </div>
          </div>
      </div>
  <!-- <h2>page List</h2> -->
      <div class="col-12 table-wrapper">        
        <table class="table" id="table">
          <thead class="thead-inverse">
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Slug</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $no = 1;
            if(sizeof($pages)):foreach($pages as $page):  ?>
            <tr>
              <td scope="row"><?php echo $no++; ?></td>          
              <td><?php echo anchor('admin/page/edit/'.$page->id, $page->title); ?></td>
              <td class="hidden-md-down"><?php echo $page->slug; ?></td>
              <td><?php echo bt_edit('admin/page/edit/'.$page->id); ?> &nbsp; &nbsp;<?php echo bt_view('page/'.$page->slug); ?></td>
              <td><?php echo bt_delete('admin/page/delete/'.$page->id); ?></td>
            </tr>
          <?php endforeach; ?> <?php else: ?>
          <tr>
            <th>We Could Not Find any page !</th>
          </tr>
        <?php endif; ?>

          </tbody>
        </table>
      </div>
  </div>
</div>
