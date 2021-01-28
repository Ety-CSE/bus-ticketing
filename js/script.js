  jQuery(document).ready(function($) {
    
    // map
    var div = $('.div');
    var map = $('.st0');
    var areaList = $('.areaList');
    // Barisal
    $('#Barisal').click(function(){
      div.html('Barisal');
      var url = 'rentacar/district_by_div/15';
      $.get( url, function( data ) {
        var dist = '';
        dist += '<ul class="nav row">';
        var dis = jQuery.parseJSON(data);
        for (i = 0; i < dis.length; i++) {
          dist += '<li class="nav-item col-md-3 col-4"><a class="nav-link active" href="rentacar/location/'+dis[i]['id']+'">'+dis[i]['bd_name']+' <small> '+dis[i]['name']+'</small></a></li>';
        } 
        dist += '</ul>';
        areaList.html(dist);
      });   
      map.css("fill", "#7c7c7c");
      $(this).css("fill", "#2ecc71");
    });

    // Chittagong
    $('#Chittagong').click(function(){
      div.html('Chittagong');
      var url = 'rentacar/district_by_div/7';
      $.get( url, function( data ) {
        var dist = '';
        dist += '<ul class="nav row">';
        var dis = jQuery.parseJSON(data);
        for (i = 0; i < dis.length; i++) {
          dist += '<li class="nav-item col-md-3 col-4"><a class="nav-link active" href="rentacar/location/'+dis[i]['id']+'">'+dis[i]['bd_name']+' <small> '+dis[i]['name']+'</small></a></li>';
        } 
        dist += '</ul>';
        areaList.html(dist);
      }); 
      map.css("fill", "#7c7c7c");
      $(this).css("fill", "#2ecc71");
    });

    // Dhaka
    $('#Dhaka').click(function(){
      div.html('Dhaka');
      var url = 'rentacar/district_by_div/3';
      $.get( url, function( data ) {
        var dist = '';
        dist += '<ul class="nav row">';
        var dis = jQuery.parseJSON(data);
        for (i = 0; i < dis.length; i++) {
          dist += '<li class="nav-item col-md-3 col-4"><a class="nav-link active" href="rentacar/location/'+dis[i]['id']+'">'+dis[i]['bd_name']+' <small> '+dis[i]['name']+'</small></a></li>';
        } 
        dist += '</ul>';
        areaList.html(dist);
      }); 
      map.css("fill", "#7c7c7c");
      $(this).css("fill", "#2ecc71");
    });

    // Khulna
    $('#Khulna').click(function(){
      div.html('Khulna');
      var url = 'rentacar/district_by_div/6';
      $.get( url, function( data ) {
        var dist = '';
        dist += '<ul class="nav row">';
        var dis = jQuery.parseJSON(data);
        for (i = 0; i < dis.length; i++) {
          dist += '<li class="nav-item col-md-3 col-4"><a class="nav-link active" href="rentacar/location/'+dis[i]['id']+'">'+dis[i]['bd_name']+' <small> '+dis[i]['name']+'</small></a></li>';
        } 
        dist += '</ul>';
        areaList.html(dist);
      }); 
      map.css("fill", "#7c7c7c");
      $(this).css("fill", "#2ecc71");
    });

    // Mymensingh
    $('#Mymensingh').click(function(){
      div.html('Mymensingh');
      var url = 'rentacar/district_by_div/10';
      $.get( url, function( data ) {
        var dist = '';
        dist += '<ul class="nav row">';
        var dis = jQuery.parseJSON(data);
        for (i = 0; i < dis.length; i++) {
          dist += '<li class="nav-item col-md-3 col-4"><a class="nav-link active" href="rentacar/location/'+dis[i]['id']+'">'+dis[i]['bd_name']+' <small> '+dis[i]['name']+'</small></a></li>';
        } 
        dist += '</ul>';
        areaList.html(dist);
      }); 
      map.css("fill", "#7c7c7c");
      $(this).css("fill", "#2ecc71");
    });

    // Rajshahi
    $('#Rajshahi').click(function(){
      div.html('Rajshahi');
      var url = 'rentacar/district_by_div/5';
      $.get( url, function( data ) {
        var dist = '';
        dist += '<ul class="nav row">';
        var dis = jQuery.parseJSON(data);
        for (i = 0; i < dis.length; i++) {
          dist += '<li class="nav-item col-md-3 col-4"><a class="nav-link active" href="rentacar/location/'+dis[i]['id']+'">'+dis[i]['bd_name']+' <small> '+dis[i]['name']+'</small></a></li>';
        } 
        dist += '</ul>';
        areaList.html(dist);
      }); 
      map.css("fill", "#7c7c7c");
      $(this).css("fill", "#2ecc71");
    });

    // Rangpur
    $('#Rangpur').click(function(){
      div.html('Rangpur');
      var url = 'rentacar/district_by_div/9';
      $.get( url, function( data ) {
        var dist = '';
        dist += '<ul class="nav row">';
        var dis = jQuery.parseJSON(data);
        for (i = 0; i < dis.length; i++) {
          dist += '<li class="nav-item col-md-3 col-4"><a class="nav-link active" href="#">'+dis[i]['bd_name']+' <small> '+dis[i]['name']+'</small></a></li>';
        } 
        dist += '</ul>';
        areaList.html(dist);
      }); 
      map.css("fill", "#7c7c7c");
      $(this).css("fill", "#2ecc71");
    });

    // Sylhet
    $('#Sylhet').click(function(){
      div.html('Sylhet');
      var url = 'rentacar/district_by_div/8';
      $.get( url, function( data ) {
        var dist = '';
        dist += '<ul class="nav row">';
        var dis = jQuery.parseJSON(data);
        for (i = 0; i < dis.length; i++) {
          dist += '<li class="nav-item col-md-3 col-4"><a class="nav-link active" href="#">'+dis[i]['bd_name']+' <small> '+dis[i]['name']+'</small></a></li>';
        } 
        dist += '</ul>';
        areaList.html(dist);
      }); 
      map.css("fill", "#7c7c7c");
      $(this).css("fill", "#2ecc71");
    });
    
     
    }); //end ready






