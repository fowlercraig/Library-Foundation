$( document ).ready(function() {

  // Sizer

  $("#sponsors").sizer();

  $(window).on("snap", function() {
    //$(".page-content").sizer("resize");
  });

  // Image Slider

  $(".royalslider").royalSlider({
    keyboardNavEnabled: true,
    autoScaleSlider : true,
    autoScaleSliderWidth: 1200,
    autoScaleSliderHeight: 700,
    imageScaleMode: 'fill',
    slidesSpacing: 0,
    loop: true,
    transitionSpeed: 1200,
    transitionType: 'fade'
  }); 

  $("#calendar-header .slider").royalSlider({
    keyboardNavEnabled: true,
    imageScaleMode: 'fill',
    slidesSpacing: 0,
    loop: true,
    transitionSpeed: 1200,
    transitionType: 'fade'
  }); 

  $(".amount").text(function () {
    return $(this).text().replace("$0.00", "Free"); 
  });​​​​​

  // What We Fund

  $(function(){

    var $container = $('#whatwefund-grid').imagesLoaded( function() {

      $container.isotope({

        itemSelector:   '.item',
        layoutMode:     'packery',
        filter:         '.featured',
      });

    });

    var filterFns = {
      // show if number is greater than 50
      numberGreaterThan50: function() {
        var number = $(this).find('.number').text();
        return parseInt( number, 10 ) > 50;
      },
      // show if name ends with -ium
      ium: function() {
        var name = $(this).find('.name').text();
        return name.match( /ium$/ );
      }
    };

    $('#whatwefund-filters').on( 'click', 'button', function() {
      var filterValue = $(this).attr('data-filter');
      $('#whatwefund-filters').find('.active').removeClass('active');
      $(this).addClass('active');
      // use filter function if value matches
      filterValue = filterFns[ filterValue ] || filterValue;
      $container.isotope({ filter: filterValue });
      $('html,body').animate({
        scrollTop: $('#whatwefund-filters').offset().top
      });
    });

  }); // End What We Fund

  // Parallax BG

  $window = $(window);

  $('.page-header').each(function(){
    var $bgobj = $(this);
    $(window).scroll(function() {
      var yPos = ($window.scrollTop() / $bgobj.data('speed')); 
      var coords = '50% '+ yPos + 'px';
      $bgobj.css({ backgroundPosition: coords });
    });

  }); 

  // Cart Modal Window

  $('#event-bar .enabled, .popup').magnificPopup({
    type: 'inline',
    preloader: false,
    closeBtnInside: false,
    mainClass: 'mfp-fade',
  }); 

  $('.button.closed').magnificPopup({
    type: 'image',
    closeBtnInside: true,
    closeOnContentClick: true,
    mainClass: 'mfp-fade',
    image: {
      verticalFit: true
    }
  });

  // Sticky Menu

  var sticky = new Waypoint.Sticky({
    element: $('#head')[0],
    wrapper: '<div class="header-wrapper"/>',
  });

  var eventSticky = new Waypoint.Sticky({
    element: $('#event-bar')[0],
    wrapper: '<div class="event-bar-wrapper"/>',
    offset: 50,
  })

});