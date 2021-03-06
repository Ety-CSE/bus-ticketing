<div class="container" style="margin-top:0px">
  <div class="row">
    <div class="col-md-6 offset-md-2">
      <br>
      <?php 
          $t = unserialize($trip->trip_time); 
          $time = $t[$booking->trip_no];
          
          $coach = $this->coach_m->get_coach_by_id($this->uri->segment(4));
        ?>
      <p style="margin-bottom:0px"><b>Passanger: <?php echo $this->route_m->user_by_id($booking->user_id);?></b> <br>
      <b>Coach No:</b> <?php echo $this->route_m->get_coach_trip($booking->coach_id);?> | <b>Route:</b> <?php  echo $time[1].' - '.$time[2];?> | <b> Date:</b> <?php  echo $booking->journey_date;?></p>
    </div>
    <div class="col-md-2 cancel_warapper">
      <a href="<?php echo site_url('admin/booking');?>" id="Cancel_btton" class="btn btn-block btn-outline-success align-text-bottom" style="margin-top:25px">Back</a>
    </div>
    <div class="col-md-8 offset-md-2">
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 offset-md-2">

      <br>
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          viewBox="0 0 256.5 501" style="enable-background:new 0 0 256.5 501;" xml:space="preserve">
        <style type="text/css">
          .st0{fill:#7F7F7F;}
          .st1{fill:#4C4C4D;}
          .st2{fill:#F0EFEF;}
          .st3{fill:none;stroke:#7F7F7F;stroke-width:3;stroke-miterlimit:10;}
        </style>
        <path class="st0" d="M217.9,25.6c-0.2-0.5-0.5-1.1-0.8-1.5c-2-3.4-5.6-5.7-9.8-6h-1.7c-4,0.3-7.5,2.5-9.6,5.7
          c-0.3,0.5-0.6,1-0.8,1.5c-0.7,1.6-1.2,3.4-1.2,5.3c0,2.2,0.6,4.3,1.6,6.1c0.3,0.5,0.6,1,1,1.5c2.1,2.8,5.4,4.7,9.1,4.9h1.7
          c3.6-0.2,6.7-2,8.8-4.6l1-1.4c1.1-1.9,1.8-4.1,1.8-6.4C218.9,28.8,218.5,27.2,217.9,25.6z M195.5,30.6c0-1.6,0.3-3.1,0.9-4.4
          c0.2-0.5,0.5-1,0.8-1.5c1.8-2.8,4.8-4.6,8.3-4.9v11.1l-0.8,0.5l-7.8,4.6C196,34.3,195.5,32.5,195.5,30.6z M207.3,41.4
          c-0.3,0-0.6,0-0.9,0s-0.6,0-0.9,0c-3.1-0.2-5.9-1.8-7.7-4.1l7.7-4.5l0.9-0.5h0l0.9,0.5l7.5,4.7C213,39.7,210.3,41.2,207.3,41.4z
          M215.8,36.1l-7.7-4.8l-0.8-0.5V19.7c3.6,0.3,6.7,2.3,8.4,5.2c0.3,0.5,0.6,1,0.8,1.6c0.5,1.3,0.8,2.7,0.8,4.1
          C217.3,32.6,216.8,34.5,215.8,36.1z"/>
        <g>
          <g>
            <path class="st1" d="M57,125.4H30.1v-22.6H57V125.4z M35.3,120.2h16.4V108H35.3V120.2z"/>
          </g>
          <g>
            <polygon class="st2" id="A1" points="53.7,111 53.7,100.4 33.4,100.4 33.4,111 29.3,111 29.3,127.3 57.8,127.3 57.8,111 		"/>
          </g>
          <g>
            <path class="st1" d="M58.5,128H28.6v-17.3H34v11.5h19v-11.5h5.4V128z M30,126.6h27.2V112h-2.7v11.5H32.7V112H30V126.6z"/>
          </g>
          <g>
            <path class="st1" d="M54.4,123.5H32.7V99.7h21.7V123.5z M34,122.1h19v-21H34V122.1z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M100,125.4H73.1v-22.6H100V125.4z M78.3,120.2h16.4V108H78.3V120.2z"/>
          </g>
          <g>
            <polygon class="st2" id="A2"  points="96.7,111 96.7,100.4 76.4,100.4 76.4,111 72.3,111 72.3,127.3 100.8,127.3 100.8,111 		"/>
          </g>
          <g>
            <path class="st1" d="M101.5,128H71.6v-17.3H77v11.5h19v-11.5h5.4V128z M73,126.6h27.2V112h-2.7v11.5H75.7V112H73V126.6z"/>
          </g>
          <g>
            <path class="st1" d="M97.4,123.5H75.7V99.7h21.7V123.5z M77,122.1h19v-21H77V122.1z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M184,125.4h-26.9v-22.6H184V125.4z M162.3,120.2h16.4V108h-16.4V120.2z"/>
          </g>
          <g>
            <polygon class="st2" id="A3"  points="180.7,111 180.7,100.4 160.4,100.4 160.4,111 156.3,111 156.3,127.3 184.8,127.3 184.8,111 		"/>
          </g>
          <g>
            <path class="st1" d="M185.5,128h-29.9v-17.3h5.4v11.5h19v-11.5h5.4V128z M157,126.6h27.2V112h-2.7v11.5h-21.7V112H157V126.6z"/>
          </g>
          <g>
            <path class="st1" d="M181.4,123.5h-21.7V99.7h21.7V123.5z M161,122.1h19v-21h-19V122.1z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M227,125.4h-26.9v-22.6H227V125.4z M205.3,120.2h16.4V108h-16.4V120.2z"/>
          </g>
          <g>
            <polygon class="st2" id="A4"  points="223.7,111 223.7,100.4 203.4,100.4 203.4,111 199.3,111 199.3,127.3 227.8,127.3 227.8,111 		"/>
          </g>
          <g>
            <path class="st1" d="M228.5,128h-29.9v-17.3h5.4v11.5h19v-11.5h5.4V128z M200,126.6h27.2V112h-2.7v11.5h-21.7V112H200V126.6z"/>
          </g>
          <g>
            <path class="st1" d="M224.4,123.5h-21.7V99.7h21.7V123.5z M204,122.1h19v-21h-19V122.1z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M57,164.9H30.1v-22.6H57V164.9z M35.4,159.7h16.4v-12.2H35.4V159.7z"/>
          </g>
          <g>
            <polygon class="st2" id="B1"  points="53.7,150.5 53.7,139.9 33.4,139.9 33.4,150.5 29.3,150.5 29.3,166.8 57.8,166.8 57.8,150.5 		"/>
          </g>
          <g>
            <path class="st1" d="M58.5,167.5H28.6v-17.3h5.4v11.5h19v-11.5h5.4V167.5z M30,166.1h27.2v-14.6h-2.7V163H32.7v-11.5H30V166.1z"/>
          </g>
          <g>
            <path class="st1" d="M54.4,163H32.7v-23.8h21.7V163z M34.1,161.6h19v-21h-19V161.6z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M100,164.9H73.1v-22.6H100V164.9z M78.4,159.7h16.4v-12.2H78.4V159.7z"/>
          </g>
          <g>
            <polygon class="st2" id="B2"  points="96.7,150.5 96.7,139.9 76.4,139.9 76.4,150.5 72.3,150.5 72.3,166.8 100.8,166.8 100.8,150.5 		"/>
          </g>
          <g>
            <path class="st1" d="M101.5,167.5H71.6v-17.3h5.4v11.5h19v-11.5h5.4V167.5z M73,166.1h27.2v-14.6h-2.7V163H75.7v-11.5H73V166.1z"
              />
          </g>
          <g>
            <path class="st1" d="M97.4,163H75.7v-23.8h21.7V163z M77.1,161.6h19v-21h-19V161.6z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M184,164.9h-26.9v-22.6H184V164.9z M162.4,159.7h16.4v-12.2h-16.4V159.7z"/>
          </g>
          <g>
            <polygon class="st2" id="B3"  points="180.7,150.5 180.7,139.9 160.4,139.9 160.4,150.5 156.3,150.5 156.3,166.8 184.8,166.8 184.8,150.5 
                  "/>
          </g>
          <g>
            <path class="st1" d="M185.5,167.5h-29.9v-17.3h5.4v11.5h19v-11.5h5.4V167.5z M157,166.1h27.2v-14.6h-2.7V163h-21.7v-11.5H157
              V166.1z"/>
          </g>
          <g>
            <path class="st1" d="M181.4,163h-21.7v-23.8h21.7V163z M161.1,161.6h19v-21h-19V161.6z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M227,164.9h-26.9v-22.6H227V164.9z M205.4,159.7h16.4v-12.2h-16.4V159.7z"/>
          </g>
          <g>
            <polygon class="st2" id="B4"  points="223.7,150.5 223.7,139.9 203.4,139.9 203.4,150.5 199.3,150.5 199.3,166.8 227.8,166.8 227.8,150.5 
                  "/>
          </g>
          <g>
            <path class="st1" d="M228.5,167.5h-29.9v-17.3h5.4v11.5h19v-11.5h5.4V167.5z M200,166.1h27.2v-14.6h-2.7V163h-21.7v-11.5H200
              V166.1z"/>
          </g>
          <g>
            <path class="st1" d="M224.4,163h-21.7v-23.8h21.7V163z M204.1,161.6h19v-21h-19V161.6z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M57,204.4H30.1v-22.6H57V204.4z M35.4,199.2h16.4V187H35.4V199.2z"/>
          </g>
          <g>
            <polygon class="st2" id="C1"  points="53.8,190 53.8,179.4 33.4,179.4 33.4,190 29.3,190 29.3,206.3 57.8,206.3 57.8,190 		"/>
          </g>
          <g>
            <path class="st1" d="M58.5,207H28.6v-17.3h5.4v11.5h19v-11.5h5.4V207z M30,205.6h27.2V191h-2.7v11.5H32.7V191H30V205.6z"/>
          </g>
          <g>
            <path class="st1" d="M54.5,202.5H32.7v-23.8h21.7V202.5z M34.1,201.1h19v-21h-19V201.1z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M100,204.4H73.1v-22.6H100V204.4z M78.4,199.2h16.4V187H78.4V199.2z"/>
          </g>
          <g>
            <polygon class="st2" id="C2"  points="96.8,190 96.8,179.4 76.4,179.4 76.4,190 72.3,190 72.3,206.3 100.8,206.3 100.8,190 		"/>
          </g>
          <g>
            <path class="st1" d="M101.5,207H71.6v-17.3h5.4v11.5h19v-11.5h5.4V207z M73,205.6h27.2V191h-2.7v11.5H75.7V191H73V205.6z"/>
          </g>
          <g>
            <path class="st1" d="M97.5,202.5H75.7v-23.8h21.7V202.5z M77.1,201.1h19v-21h-19V201.1z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M184,204.4h-26.9v-22.6H184V204.4z M162.4,199.2h16.4V187h-16.4V199.2z"/>
          </g>
          <g>
            <polygon class="st2" id="C3"  points="180.8,190 180.8,179.4 160.4,179.4 160.4,190 156.3,190 156.3,206.3 184.8,206.3 184.8,190 		"/>
          </g>
          <g>
            <path class="st1" d="M185.5,207h-29.9v-17.3h5.4v11.5h19v-11.5h5.4V207z M157,205.6h27.2V191h-2.7v11.5h-21.7V191H157V205.6z"/>
          </g>
          <g>
            <path class="st1" d="M181.5,202.5h-21.7v-23.8h21.7V202.5z M161.1,201.1h19v-21h-19V201.1z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M227,204.4h-26.9v-22.6H227V204.4z M205.4,199.2h16.4V187h-16.4V199.2z"/>
          </g>
          <g>
            <polygon class="st2" id="C4"  points="223.8,190 223.8,179.4 203.4,179.4 203.4,190 199.3,190 199.3,206.3 227.8,206.3 227.8,190 		"/>
          </g>
          <g>
            <path class="st1" d="M228.5,207h-29.9v-17.3h5.4v11.5h19v-11.5h5.4V207z M200,205.6h27.2V191h-2.7v11.5h-21.7V191H200V205.6z"/>
          </g>
          <g>
            <path class="st1" d="M224.5,202.5h-21.7v-23.8h21.7V202.5z M204.1,201.1h19v-21h-19V201.1z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M57,243.9H30.2v-22.6H57V243.9z M35.4,238.7h16.4v-12.2H35.4V238.7z"/>
          </g>
          <g>
            <polygon class="st2"  id="D1" points="53.8,229.5 53.8,218.9 33.4,218.9 33.4,229.5 29.3,229.5 29.3,245.8 57.9,245.8 57.9,229.5 		"/>
          </g>
          <g>
            <path class="st1" d="M58.6,246.5H28.7v-17.3h5.4v11.5h19v-11.5h5.4V246.5z M30,245.1h27.2v-14.6h-2.7V242H32.7v-11.5H30V245.1z"/>
          </g>
          <g>
            <path class="st1" d="M54.5,242H32.7v-23.8h21.7V242z M34.1,240.6h19v-21h-19V240.6z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M100,243.9H73.2v-22.6H100V243.9z M78.4,238.7h16.4v-12.2H78.4V238.7z"/>
          </g>
          <g>
            <polygon class="st2" id="D2"  points="96.8,229.5 96.8,218.9 76.4,218.9 76.4,229.5 72.3,229.5 72.3,245.8 100.9,245.8 100.9,229.5 		"/>
          </g>
          <g>
            <path class="st1" d="M101.6,246.5H71.7v-17.3h5.4v11.5h19v-11.5h5.4V246.5z M73,245.1h27.2v-14.6h-2.7V242H75.7v-11.5H73V245.1z"
              />
          </g>
          <g>
            <path class="st1" d="M97.5,242H75.7v-23.8h21.7V242z M77.1,240.6h19v-21h-19V240.6z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M184,243.9h-26.9v-22.6H184V243.9z M162.4,238.7h16.4v-12.2h-16.4V238.7z"/>
          </g>
          <g>
            <polygon class="st2" id="D3"  points="180.8,229.5 180.8,218.9 160.4,218.9 160.4,229.5 156.3,229.5 156.3,245.8 184.9,245.8 184.9,229.5 
                  "/>
          </g>
          <g>
            <path class="st1" d="M185.6,246.5h-29.9v-17.3h5.4v11.5h19v-11.5h5.4V246.5z M157,245.1h27.2v-14.6h-2.7V242h-21.7v-11.5H157
              V245.1z"/>
          </g>
          <g>
            <path class="st1" d="M181.5,242h-21.7v-23.8h21.7V242z M161.1,240.6h19v-21h-19V240.6z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M227,243.9h-26.9v-22.6H227V243.9z M205.4,238.7h16.4v-12.2h-16.4V238.7z"/>
          </g>
          <g>
            <polygon class="st2" id="D4"  points="223.8,229.5 223.8,218.9 203.4,218.9 203.4,229.5 199.3,229.5 199.3,245.8 227.9,245.8 227.9,229.5 
                  "/>
          </g>
          <g>
            <path class="st1" d="M228.6,246.5h-29.9v-17.3h5.4v11.5h19v-11.5h5.4V246.5z M200,245.1h27.2v-14.6h-2.7V242h-21.7v-11.5H200
              V245.1z"/>
          </g>
          <g>
            <path class="st1" d="M224.5,242h-21.7v-23.8h21.7V242z M204.1,240.6h19v-21h-19V240.6z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M57.1,283.4H30.2v-22.6h26.9V283.4z M35.4,278.2h16.4V266H35.4V278.2z"/>
          </g>
          <g>
            <polygon class="st2" id="E1"  points="53.8,269 53.8,258.4 33.4,258.4 33.4,269 29.4,269 29.4,285.3 57.9,285.3 57.9,269 		"/>
          </g>
          <g>
            <path class="st1" d="M58.6,286H28.7v-17.3h5.4v11.5h19v-11.5h5.4V286z M30.1,284.6h27.2V270h-2.7v11.5H32.8V270h-2.7V284.6z"/>
          </g>
          <g>
            <path class="st1" d="M54.5,281.5H32.8v-23.8h21.7V281.5z M34.1,280.1h19v-21h-19V280.1z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M100.1,283.4H73.2v-22.6h26.9V283.4z M78.4,278.2h16.4V266H78.4V278.2z"/>
          </g>
          <g>
            <polygon class="st2" id="E2"  points="96.8,269 96.8,258.4 76.4,258.4 76.4,269 72.4,269 72.4,285.3 100.9,285.3 100.9,269 		"/>
          </g>
          <g>
            <path class="st1" d="M101.6,286H71.7v-17.3h5.4v11.5h19v-11.5h5.4V286z M73.1,284.6h27.2V270h-2.7v11.5H75.8V270h-2.7V284.6z"/>
          </g>
          <g>
            <path class="st1" d="M97.5,281.5H75.8v-23.8h21.7V281.5z M77.1,280.1h19v-21h-19V280.1z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M184.1,283.4h-26.9v-22.6h26.9V283.4z M162.4,278.2h16.4V266h-16.4V278.2z"/>
          </g>
          <g>
            <polygon class="st2" id="E3"  points="180.8,269 180.8,258.4 160.4,258.4 160.4,269 156.4,269 156.4,285.3 184.9,285.3 184.9,269 		"/>
          </g>
          <g>
            <path class="st1" d="M185.6,286h-29.9v-17.3h5.4v11.5h19v-11.5h5.4V286z M157.1,284.6h27.2V270h-2.7v11.5h-21.7V270h-2.7V284.6z"
              />
          </g>
          <g>
            <path class="st1" d="M181.5,281.5h-21.7v-23.8h21.7V281.5z M161.1,280.1h19v-21h-19V280.1z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M227.1,283.4h-26.9v-22.6h26.9V283.4z M205.4,278.2h16.4V266h-16.4V278.2z"/>
          </g>
          <g>
            <polygon class="st2" id="E4"  points="223.8,269 223.8,258.4 203.4,258.4 203.4,269 199.4,269 199.4,285.3 227.9,285.3 227.9,269 		"/>
          </g>
          <g>
            <path class="st1" d="M228.6,286h-29.9v-17.3h5.4v11.5h19v-11.5h5.4V286z M200.1,284.6h27.2V270h-2.7v11.5h-21.7V270h-2.7V284.6z"
              />
          </g>
          <g>
            <path class="st1" d="M224.5,281.5h-21.7v-23.8h21.7V281.5z M204.1,280.1h19v-21h-19V280.1z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M57.1,322.9H30.2v-22.6h26.9V322.9z M35.5,317.7h16.4v-12.2H35.5V317.7z"/>
          </g>
          <g>
            <polygon class="st2" id="F1"  points="53.8,308.5 53.8,297.9 33.5,297.9 33.5,308.5 29.4,308.5 29.4,324.8 57.9,324.8 57.9,308.5 		"/>
          </g>
          <g>
            <path class="st1" d="M58.6,325.5H28.7v-17.3h5.4v11.5h19v-11.5h5.4V325.5z M30.1,324.1h27.2v-14.6h-2.7V321H32.8v-11.5h-2.7V324.1
              z"/>
          </g>
          <g>
            <path class="st1" d="M54.5,321H32.8v-23.8h21.7V321z M34.1,319.6h19v-21h-19V319.6z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M100.1,322.9H73.2v-22.6h26.9V322.9z M78.5,317.7h16.4v-12.2H78.5V317.7z"/>
          </g>
          <g>
            <polygon class="st2" id="F2"  points="96.8,308.5 96.8,297.9 76.5,297.9 76.5,308.5 72.4,308.5 72.4,324.8 100.9,324.8 100.9,308.5 		"/>
          </g>
          <g>
            <path class="st1" d="M101.6,325.5H71.7v-17.3h5.4v11.5h19v-11.5h5.4V325.5z M73.1,324.1h27.2v-14.6h-2.7V321H75.8v-11.5h-2.7
              V324.1z"/>
          </g>
          <g>
            <path class="st1" d="M97.5,321H75.8v-23.8h21.7V321z M77.1,319.6h19v-21h-19V319.6z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M184.1,322.9h-26.9v-22.6h26.9V322.9z M162.5,317.7h16.4v-12.2h-16.4V317.7z"/>
          </g>
          <g>
            <polygon class="st2" id="F3"  points="180.8,308.5 180.8,297.9 160.5,297.9 160.5,308.5 156.4,308.5 156.4,324.8 184.9,324.8 184.9,308.5 
                  "/>
          </g>
          <g>
            <path class="st1" d="M185.6,325.5h-29.9v-17.3h5.4v11.5h19v-11.5h5.4V325.5z M157.1,324.1h27.2v-14.6h-2.7V321h-21.7v-11.5h-2.7
              V324.1z"/>
          </g>
          <g>
            <path class="st1" d="M181.5,321h-21.7v-23.8h21.7V321z M161.1,319.6h19v-21h-19V319.6z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M227.1,322.9h-26.9v-22.6h26.9V322.9z M205.5,317.7h16.4v-12.2h-16.4V317.7z"/>
          </g>
          <g>
            <polygon class="st2" id="F4"  points="223.8,308.5 223.8,297.9 203.5,297.9 203.5,308.5 199.4,308.5 199.4,324.8 227.9,324.8 227.9,308.5 
                  "/>
          </g>
          <g>
            <path class="st1" d="M228.6,325.5h-29.9v-17.3h5.4v11.5h19v-11.5h5.4V325.5z M200.1,324.1h27.2v-14.6h-2.7V321h-21.7v-11.5h-2.7
              V324.1z"/>
          </g>
          <g>
            <path class="st1" d="M224.5,321h-21.7v-23.8h21.7V321z M204.1,319.6h19v-21h-19V319.6z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M57.1,362.4H30.2v-22.6h26.9V362.4z M35.5,357.2h16.4V345H35.5V357.2z"/>
          </g>
          <g>
            <polygon class="st2" id="G1"  points="53.9,348 53.9,337.4 33.5,337.4 33.5,348 29.4,348 29.4,364.3 57.9,364.3 57.9,348 		"/>
          </g>
          <g>
            <path class="st1" d="M58.6,365H28.7v-17.3h5.4v11.5h19v-11.5h5.4V365z M30.1,363.6h27.2V349h-2.7v11.5H32.8V349h-2.7V363.6z"/>
          </g>
          <g>
            <path class="st1" d="M54.5,360.5H32.8v-23.8h21.7V360.5z M34.2,359.1h19v-21h-19V359.1z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M100.1,362.4H73.2v-22.6h26.9V362.4z M78.5,357.2h16.4V345H78.5V357.2z"/>
          </g>
          <g>
            <polygon class="st2"  id="G2" points="96.9,348 96.9,337.4 76.5,337.4 76.5,348 72.4,348 72.4,364.3 100.9,364.3 100.9,348 		"/>
          </g>
          <g>
            <path class="st1" d="M101.6,365H71.7v-17.3h5.4v11.5h19v-11.5h5.4V365z M73.1,363.6h27.2V349h-2.7v11.5H75.8V349h-2.7V363.6z"/>
          </g>
          <g>
            <path class="st1" d="M97.5,360.5H75.8v-23.8h21.7V360.5z M77.2,359.1h19v-21h-19V359.1z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M184.1,362.4h-26.9v-22.6h26.9V362.4z M162.5,357.2h16.4V345h-16.4V357.2z"/>
          </g>
          <g>
            <polygon class="st2" id="G3"  points="180.9,348 180.9,337.4 160.5,337.4 160.5,348 156.4,348 156.4,364.3 184.9,364.3 184.9,348 		"/>
          </g>
          <g>
            <path class="st1" d="M185.6,365h-29.9v-17.3h5.4v11.5h19v-11.5h5.4V365z M157.1,363.6h27.2V349h-2.7v11.5h-21.7V349h-2.7V363.6z"
              />
          </g>
          <g>
            <path class="st1" d="M181.5,360.5h-21.7v-23.8h21.7V360.5z M161.2,359.1h19v-21h-19V359.1z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M227.1,362.4h-26.9v-22.6h26.9V362.4z M205.5,357.2h16.4V345h-16.4V357.2z"/>
          </g>
          <g>
            <polygon class="st2"  id="G4" points="223.9,348 223.9,337.4 203.5,337.4 203.5,348 199.4,348 199.4,364.3 227.9,364.3 227.9,348 		"/>
          </g>
          <g>
            <path class="st1" d="M228.6,365h-29.9v-17.3h5.4v11.5h19v-11.5h5.4V365z M200.1,363.6h27.2V349h-2.7v11.5h-21.7V349h-2.7V363.6z"
              />
          </g>
          <g>
            <path class="st1" d="M224.5,360.5h-21.7v-23.8h21.7V360.5z M204.2,359.1h19v-21h-19V359.1z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M57.1,401.9H30.3v-22.6h26.9V401.9z M35.5,396.7h16.4v-12.2H35.5V396.7z"/>
          </g>
          <g>
            <polygon class="st2" id="H1"  points="53.9,387.5 53.9,376.9 33.5,376.9 33.5,387.5 29.4,387.5 29.4,403.8 58,403.8 58,387.5 		"/>
          </g>
          <g>
            <path class="st1" d="M58.6,404.5H28.8v-17.3h5.4v11.5h19v-11.5h5.4V404.5z M30.1,403.1h27.2v-14.6h-2.7V400H32.8v-11.5h-2.7V403.1
              z"/>
          </g>
          <g>
            <path class="st1" d="M54.6,400H32.8v-23.8h21.7V400z M34.2,398.6h19v-21h-19V398.6z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M100.1,401.9H73.3v-22.6h26.9V401.9z M78.5,396.7h16.4v-12.2H78.5V396.7z"/>
          </g>
          <g>
            <polygon class="st2" id="H2"  points="96.9,387.5 96.9,376.9 76.5,376.9 76.5,387.5 72.4,387.5 72.4,403.8 101,403.8 101,387.5 		"/>
          </g>
          <g>
            <path class="st1" d="M101.6,404.5H71.8v-17.3h5.4v11.5h19v-11.5h5.4V404.5z M73.1,403.1h27.2v-14.6h-2.7V400H75.8v-11.5h-2.7
              V403.1z"/>
          </g>
          <g>
            <path class="st1" d="M97.6,400H75.8v-23.8h21.7V400z M77.2,398.6h19v-21h-19V398.6z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M184.1,401.9h-26.9v-22.6h26.9V401.9z M162.5,396.7h16.4v-12.2h-16.4V396.7z"/>
          </g>
          <g>
            <polygon class="st2" id="H3"  points="180.9,387.5 180.9,376.9 160.5,376.9 160.5,387.5 156.4,387.5 156.4,403.8 185,403.8 185,387.5 		"/>
          </g>
          <g>
            <path class="st1" d="M185.6,404.5h-29.9v-17.3h5.4v11.5h19v-11.5h5.4V404.5z M157.1,403.1h27.2v-14.6h-2.7V400h-21.7v-11.5h-2.7
              V403.1z"/>
          </g>
          <g>
            <path class="st1" d="M181.6,400h-21.7v-23.8h21.7V400z M161.2,398.6h19v-21h-19V398.6z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M227.1,401.9h-26.9v-22.6h26.9V401.9z M205.5,396.7h16.4v-12.2h-16.4V396.7z"/>
          </g>
          <g>
            <polygon class="st2" id="H4"  points="223.9,387.5 223.9,376.9 203.5,376.9 203.5,387.5 199.4,387.5 199.4,403.8 228,403.8 228,387.5 		"/>
          </g>
          <g>
            <path class="st1" d="M228.6,404.5h-29.9v-17.3h5.4v11.5h19v-11.5h5.4V404.5z M200.1,403.1h27.2v-14.6h-2.7V400h-21.7v-11.5h-2.7
              V403.1z"/>
          </g>
          <g>
            <path class="st1" d="M224.6,400h-21.7v-23.8h21.7V400z M204.2,398.6h19v-21h-19V398.6z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M57.2,441.4H30.3v-22.6h26.9V441.4z M35.5,436.2h16.4V424H35.5V436.2z"/>
          </g>
          <g>
            <polygon class="st2" id="I1"  points="53.9,427 53.9,416.4 33.5,416.4 33.5,427 29.5,427 29.5,443.3 58,443.3 58,427 		"/>
          </g>
          <g>
            <path class="st1" d="M58.7,444H28.8v-17.3h5.4v11.5h19v-11.5h5.4V444z M30.1,442.6h27.2V428h-2.7v11.5H32.8V428h-2.7V442.6z"/>
          </g>
          <g>
            <path class="st1" d="M54.6,439.5H32.8v-23.8h21.7V439.5z M34.2,438.1h19v-21h-19V438.1z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M100.2,441.4H73.3v-22.6h26.9V441.4z M78.5,436.2h16.4V424H78.5V436.2z"/>
          </g>
          <g>
            <polygon class="st2" id="I2"  points="96.9,427 96.9,416.4 76.5,416.4 76.5,427 72.5,427 72.5,443.3 101,443.3 101,427 		"/>
          </g>
          <g>
            <path class="st1" d="M101.7,444H71.8v-17.3h5.4v11.5h19v-11.5h5.4V444z M73.1,442.6h27.2V428h-2.7v11.5H75.8V428h-2.7V442.6z"/>
          </g>
          <g>
            <path class="st1" d="M97.6,439.5H75.8v-23.8h21.7V439.5z M77.2,438.1h19v-21h-19V438.1z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M184.2,441.4h-26.9v-22.6h26.9V441.4z M162.5,436.2h16.4V424h-16.4V436.2z"/>
          </g>
          <g>
            <polygon class="st2" id="I3"  points="180.9,427 180.9,416.4 160.5,416.4 160.5,427 156.5,427 156.5,443.3 185,443.3 185,427 		"/>
          </g>
          <g>
            <path class="st1" d="M185.7,444h-29.9v-17.3h5.4v11.5h19v-11.5h5.4V444z M157.1,442.6h27.2V428h-2.7v11.5h-21.7V428h-2.7V442.6z"
              />
          </g>
          <g>
            <path class="st1" d="M181.6,439.5h-21.7v-23.8h21.7V439.5z M161.2,438.1h19v-21h-19V438.1z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M227.2,441.4h-26.9v-22.6h26.9V441.4z M205.5,436.2h16.4V424h-16.4V436.2z"/>
          </g>
          <g>
            <polygon class="st2" id="I4"  points="223.9,427 223.9,416.4 203.5,416.4 203.5,427 199.5,427 199.5,443.3 228,443.3 228,427 		"/>
          </g>
          <g>
            <path class="st1" d="M228.7,444h-29.9v-17.3h5.4v11.5h19v-11.5h5.4V444z M200.1,442.6h27.2V428h-2.7v11.5h-21.7V428h-2.7V442.6z"
              />
          </g>
          <g>
            <path class="st1" d="M224.6,439.5h-21.7v-23.8h21.7V439.5z M204.2,438.1h19v-21h-19V438.1z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M57.2,480.9H30.3v-22.6h26.9V480.9z M35.6,475.7h16.4v-12.2H35.6V475.7z"/>
          </g>
          <g>
            <polygon class="st2" id="J1"  points="53.9,466.5 53.9,455.9 33.6,455.9 33.6,466.5 29.5,466.5 29.5,482.8 58,482.8 58,466.5 		"/>
          </g>
          <g>
            <path class="st1" d="M58.7,483.5H28.8v-17.3h5.4v11.5h19v-11.5h5.4V483.5z M30.2,482.1h27.2v-14.6h-2.7V479H32.9v-11.5h-2.7V482.1
              z"/>
          </g>
          <g>
            <path class="st1" d="M54.6,479H32.9v-23.8h21.7V479z M34.2,477.6h19v-21h-19V477.6z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M100.2,480.9H73.3v-22.6h26.9V480.9z M78.6,475.7h16.4v-12.2H78.6V475.7z"/>
          </g>
          <g>
            <polygon class="st2" id="J2"  points="96.9,466.5 96.9,455.9 76.6,455.9 76.6,466.5 72.5,466.5 72.5,482.8 101,482.8 101,466.5 		"/>
          </g>
          <g>
            <path class="st1" d="M101.7,483.5H71.8v-17.3h5.4v11.5h19v-11.5h5.4V483.5z M73.2,482.1h27.2v-14.6h-2.7V479H75.9v-11.5h-2.7
              V482.1z"/>
          </g>
          <g>
            <path class="st1" d="M97.6,479H75.9v-23.8h21.7V479z M77.2,477.6h19v-21h-19V477.6z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M184.2,480.9h-26.9v-22.6h26.9V480.9z M162.6,475.7h16.4v-12.2h-16.4V475.7z"/>
          </g>
          <g>
            <polygon class="st2" id="J3"  points="180.9,466.5 180.9,455.9 160.6,455.9 160.6,466.5 156.5,466.5 156.5,482.8 185,482.8 185,466.5 		"/>
          </g>
          <g>
            <path class="st1" d="M185.7,483.5h-29.9v-17.3h5.4v11.5h19v-11.5h5.4V483.5z M157.2,482.1h27.2v-14.6h-2.7V479h-21.7v-11.5h-2.7
              V482.1z"/>
          </g>
          <g>
            <path class="st1" d="M181.6,479h-21.7v-23.8h21.7V479z M161.2,477.6h19v-21h-19V477.6z"/>
          </g>
        </g>
        <g>
          <g>
            <path class="st1" d="M227.2,480.9h-26.9v-22.6h26.9V480.9z M205.6,475.7h16.4v-12.2h-16.4V475.7z"/>
          </g>
          <g>
            <polygon class="st2" id="J4"  points="223.9,466.5 223.9,455.9 203.6,455.9 203.6,466.5 199.5,466.5 199.5,482.8 228,482.8 228,466.5 		"/>
          </g>
          <g>
            <path class="st1" d="M228.7,483.5h-29.9v-17.3h5.4v11.5h19v-11.5h5.4V483.5z M200.2,482.1h27.2v-14.6h-2.7V479h-21.7v-11.5h-2.7
              V482.1z"/>
          </g>
          <g>
            <path class="st1" d="M224.6,479h-21.7v-23.8h21.7V479z M204.2,477.6h19v-21h-19V477.6z"/>
          </g>
        </g>
        <rect x="1.5" y="1.5" class="st3" width="253.5" height="498"/>
        </svg>

    </div>
    <div class="col-md-5">
      <br>
      <div class="row">
       
        <div class="col-12">
        <!-- <hr> -->
        <?php echo form_open();?>
        <table class="table">
          <thead>
            <tr>
              <th>Seats</th>
              <th>Fare</th>
              <th>Class</th>
            </tr>
          </thead>
          <tbody id="seats">
            <!-- Seats info will goes here -->
          </tbody>
        </table>
        <div class="alert alert-info" role="alert">
          <p><b>Total: <span id="total">0</span></b> BDT</p>
        </div>
        
        <p><b>Boarding Point:</b> <?php echo $time[1];?> (<?php echo date('h:i a', strtotime($time[0]));?>)</p>
        <p><b>Destination:</b> <?php echo $time[2];?></p>
        <hr>
        <b>Payment Info:</b><br>
        <p>Payment Via: <b><?php echo unserialize($booking->payment)[1];?></b> <br>
        <?php echo unserialize($booking->payment)[1];?> Number: <b><?php echo unserialize($booking->payment)[2];?></b> <br>
        Transaction ID: <b><?php echo unserialize($booking->payment)[3];?></b></p>
        <p class="<?php echo $ststus = ($booking->status != 0?'text-danger': 'text-success');?>"> <?php echo $this->booking_m->booking_status($booking->status);?></p>
        
        <br><?php //dump( $this->session->date); ?>
        <div class="alert alert-success" role="alert">
          <p class="text-center"><i class="fas fa-exclamation-triangle"></i> <b><small>Due to traffic condition, the trip may get canceled.</small></b></p>
        </div>
        <?php echo form_close();?>

        </div>
      </div>
    </div>
  </div>
</div>


<?php 
      // dump(unserialize($trip->trip_time)[$booking->trip_no]);
      // dump($trip);
      // dump($booking);
      // dump(unserialize($booking->payment));
      ?>


<?php $seats =  explode(',',$booking->seat_no);?>
<script>
  $(document).ready(function(){

    
    (function () {
      var booked_seat = [<?php echo '"'.implode('","', $seats).'"' ?>];//'';  // I will invoke myself
      $('.st2').addClass('others');
      for(var x=0; x < booked_seat.length; x++){
        $('#'+booked_seat[x]).removeClass('others');
        $('#'+booked_seat[x]).addClass('select');
      }
      console.log(booked_seat);

      var booking = '';
      var total_fare = '<?php echo unserialize($booking->payment)[0];?>';
      var type = '<?php echo $this->trip_m->category($this->trip_m->get_coach_category_by_id($booking->coach_id));?>';
      var i;
      for (i = 0; i < booked_seat.length; ++i) {
        booking += '<tr class="'+booked_seat[i]+'">';
        booking += '<td>'+booked_seat[i]+'</td>';
        booking += '<td class="fare">'+total_fare/booked_seat.length+' BDT</td>';
        booking += '<td>'+type+'</td>';
        booking += '</tr>';
      }
      $('#total').html(total_fare);
      $('#seats').html(booking);
      
    })();


  
    


  });

</script>
<?php //endforeach; ?>