

<div class="container">
  <div class="row">
    <div class="content-header col-12">
      <h2 class="content-title"><i class="kt-menu__link-icon flaticon-internet"></i> Footer Setting</h2>
    </div>
    <div class="col-lg-3 col-1"></div>
    <div class="col-lg-6 col-10">

    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open(); ?>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label  text-right">Contact Person</label>
            <div class="col-sm-10">
              <?php
                  echo form_input('person', set_value('text', $setting->person), 'class="form-control" placeholder="Contact Person" id="person"');
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label text-right">Logo</label>
            <div class="col-sm-10">
              <input type="file" name="logo" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label  text-right">Favicon</label>
            <div class="col-sm-10">
              <input type="file" name="favicon" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label  text-right">Organization</label>
            <div class="col-sm-10">
              <?php
                  echo form_input('phone', set_value('phone', $setting->phone), 'class="form-control" placeholder="Phone" id="Phone"');
              ?>
            </div>
          </div>
          <hr>
          <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
              <?php echo empty($setting->id) ? form_submit('submit', 'Save', 'class="btn btn-warning pull-right"') : form_submit('submit', 'Update', 'class="btn btn-warning pull-right"');?>
            </div>
          </div>
       <?php form_close(); ?>
    </div>
  </div>
</div>





<div class="wrapper" style="width: 400px">
  <div class="container-fluid">
    <div class="row">
      <div class="col-7">
        <div class="customSelectBox">
        <select id="select-id" class="my_select_box">
          <option value="" selected="">Select a Tour type</option>
            <option value="https://www.egolisafaris.com/kruger-national-park/">Kruger National Park</option>
            <option value="https://www.egolisafaris.com/african-safaris/">African Safaris</option>
          <option value="https://www.egolisafaris.com/johannesburg/"> Johannesburg </option>
          <option value="https://www.egolisafaris.com/cape-town/">Cape Town</option>
          <option value="https://www.egolisafaris.com/durban/">Durban</option>
          <option value="https://www.egolisafaris.com/view-all-tours/">View All Tours</option>
        </select>
        </div>
      </div>
      <div class="col-5">
        <div id="btn-go" class="tp-parallax-wrap"><center class="btn-go">Let's Go</center> </div>
    </div>
  </div>
</div>


[gdlr_core_space height="22px"]
[gdlr_core_title title="WhatsApp Us" caption="" title-font-size= "17px" title-color="#0ea2f7" title-font-uppercase="disable" padding-bottom="5px"]
[gdlr_core_icon icon="fa fa-whatsapp" size="17px" color="#ffffff" margin-left="" margin-right="8px" ] <span style="font-size: 18px; color: #fff;"><img src="https://th.seaeagletour.com/wp-content/uploads/2019/08/LINE_APP.png" width="25px" alt="">  <a href="https://api.whatsapp.com/send?text=Hello&phone=+66-84-154-5455">+66-84-154-5455</a></span>


[gdlr_core_space height="22px"]
[gdlr_core_title title="เพิ่มเพื่อน Line ID" caption="" title-font-size= "17px" title-color="#0ea2f7" title-font-uppercase="disable" padding-bottom="5px"]
<img src="https://th.seaeagletour.com/wp-content/uploads/2019/08/LINE_APP.png" width="25px" alt=""> <a href="https://line.me/ti/p/MoKNoErK9k"> <span style="font-size: 18px; color: #fff;"> seaeagletour</a></span>


[gdlr_core_space height="22px"]
[gdlr_core_title title="Join Us On LINE" caption="" title-font-size= "17px" title-color="#0ea2f7" title-font-uppercase="disable" padding-bottom="5px"]
[gdlr_core_icon icon="fa fa-line" size="17px" color="#ffffff" margin-left="" margin-right="8px" ] <span style="font-size: 18px; color: #fff;"><img src="https://th.seaeagletour.com/wp-content/uploads/2019/08/LINE_APP.png" width="25px" alt=""> <a href="https://line.me/ti/p/MoKNoErK9k"> @seaeagletour</a></span>

<div class="line-it-button" data-lang="en" data-type="friend" data-lineid="@seaeagletour " style="display: none;"></div>
 <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>


translate


HOME = บ้าน
TOUR = ทัวร์
SPEEDBOAT FOR RENT = เรือสปีดให้เช่า
TRANSPORT = ขนส่ง
BLOG & TIPS = บล็อกและเคล็ดลับ
VACATION RENTALS = ค่าเช่าวันหยุด
ABOUT = เกี่ยวกับ



<p class=logo-wrapper>
  <center class="logo-center" id="logo-center" style="width:350px; margin: 0px auto; padding:10px 10px">
    <img style="width:100%" class="svglogomobile" alt="marx-entertainment-logo-40-years" src="/wp-content/uploads/2019/08/MARX-logo-40-yrs.svg" />
  </center>
</p>


@media only screen and (max-width: 600px)  {
  #logo-center{
    max-width: 300px;
  }
}
