<div class="container">
  <div class="row">
  <div class="content-header col-12">
        <div class="row h-100">
            <div class="col-6 content-justify">
            <h2 class="content-title"><i class="fa fa-question">  </i> FAQ's List</h2>
            </div>
            <div class="col-6 content-justify">
                <?php echo anchor('admin/faq/edit', '<i class="fa fa-question"></i> Add a faq', 'class="btn btn-outline-success btn-md float-right"'); ?>
            </div>
        </div>
    </div>
    

    <div class="col-12  table-wrapper">
      <table class="table" id="table">
        <thead class="thead-inverse">
          <tr>
            <th>#</th>
            <th class="hidden-sm-down">Question</th>
            <th class="hidden-sm-down">Answer</th>
            <th>Order</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $no = 1;
          if(sizeof($faqs)):foreach($faqs as $faq):  ?>
          <tr>
            <td scope="row"><?php echo $no++; ?></td>
            <td class="hidden-sm-down"><?php  echo anchor('admin/faq/edit/'.$faq->id,$faq->question); ?></td>
            <td class="hidden-sm-down"><?php echo $faq->answer;  ?></td>
            <td><?php echo $faq->list_order; ?></td>
            </td>

            <td><?php echo bt_edit('admin/faq/edit/'.$faq->id); ?></td>
            <td><?php echo bt_delete('admin/faq/delete/'.$faq->id); ?></td>
          </tr>
        <?php endforeach; ?> <?php else: ?>
        <tr>
          <th>We Could Not Find any faq !</th>
        </tr>
      <?php endif; ?>

        </tbody>
      </table>
    </div>
  </div>
</div>
