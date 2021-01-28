    <!-- search wraper -->
    <div class="container" id="search-area" style="margin-top:100px">
      <div class="row ">
        <div class="col-md-6">
        <?php echo form_open('search'); ?>
            <div class="form-group">
              <label for="from"><b>From</b></label>
              <?php
                    echo form_dropdown('where_from', $this->user_m->to_district_dw(),$coach->where_from,'class="form-control lineAwsome"  id="where_from"' );
                ?>
            </div>
            <div class="form-group">
              <label for="to"><b>To</b></label>
              <?php
                    echo form_dropdown('where_to', $this->user_m->from_district_dw(),$coach->where_to,'class="form-control lineAwsome"  id="where_to"' );
                ?>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="date_of_journy"><b>Date of Journey</b></label>
                <input type="date" name="d_of_journy" class="form-control" id="date_of_journy" placeholder="Pick a date">
              </div>
              <div class="form-group col-md-6">
                <label for="date_of_return"><b>Date of Return</b> (Optional)</label>
                <input type="date" name="d_of_return" class="form-control" id="date_of_return"  placeholder="Pick a date">
              </div>
            </div>
            <br>
            <button type="submit" class="btn btn-success btn-block"><i class="fa fa-search"></i> Submit</button>
            <?php echo form_close(); ?>
        </div>
        <div class="col-md-6">
          <br class="d-block d-sm-none">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo site_url('img/slider.png');?>" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo site_url('img/slider.png');?>" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo site_url('img/slider.png');?>" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <div class="row hero">
        <div class="col-md-12" class="">
          <hr>
          <img src="<?php echo site_url('img/Banne.png');?>" class="img-fluid" alt="">
          <hr>
          <h3 class="text-center">Buy bus tickets in 3 easy steps</h3>
          <hr>
        </div>
        <div class="col-md-4">
          <div class="row steps">
            <div class="col-4">
              <p class="text-center icon"><i class="fa fa-search fa-2x fa-fw"></i></p>
            </div>
            <div class="col-8">
              <h4>Search</h4>
              <p><small>Choose your origin, destination, journey dates and search for buses</small></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 border-left border-rightx">
          <div class="row steps">
            <div class="col-4">
              <p class="text-center icon"><i class="fa fa-bus fa-2x fa-fw"></i></p>
            </div>
            <div class="col-8">
              <h4>Select</h4>
              <p><small>Select your desired trip and choose your seats</small></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row steps">
            <div class="col-4">
              <p class="text-center icon"><i class="far fa-money-bill-alt fa-2x fa-fw"></i></p>
            </div>
            <div class="col-8">
              <h4>Pay</h4>
              <p><small>Pay for the tickets via Debit / Credit Cards, bKash or cash</small></p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <br>
          <div class="card text-white bg-secondary mb-3" style="max-width: 100%;">
            <div class="card-body">
              <p class="card-text text-center"><i class="fa fa-lock fa-fw"></i> Safe and Secure online payments</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
        <br>
          <div class="card text-white bg-secondary mb-3" style="max-width: 100%;">
            <div class="card-body">
              <p class="card-text text-center"><i class="fa fa-home fa-fw"></i>  Cash on Delivery available</p>
            </div>
          </div>
        </div>
      </div>
    </div>
