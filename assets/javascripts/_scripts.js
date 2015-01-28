$( document ).ready(function() {

  // Superfish

  $('.toolbar .sf-menu').superfish({
    delay: 0,
    autoArrows: false,
    speed: 'fast',
    animation : { height:'show' },
    disableHI: true
  });

  // Tabber

  $(".tabbed").tabber();

  // Sizer

  $("#sponsors, #page-list.quadrant").sizer();

  // Accordion

  $('#faq-accordion').accordion();

  // Selecter

  $(".widget_categories select").selecter({
    label: "All Categories",
    cover: true,
    customClass: "blog-select"
  });

  $(".widget_archive select").selecter({
    label: "Archive",
    cover: true,
    customClass: "blog-select"
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
    transitionType: 'fade',
    arrowsNav: false,
    controlNavigation: 'none',
  }); 

  $("#past-events-slider.slider").royalSlider({
    keyboardNavEnabled: true,
    imageScaleMode: 'fill',
    slidesSpacing: 0,
    autoScaleSlider : true,
    autoScaleSliderWidth: 1200,
    autoScaleSliderHeight: 500,
    loop: true,
    transitionSpeed: 1200,
    transitionType: 'fade',
    arrowsNav: false,
    controlNavigation: 'none',
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
        scrollTop: $('#whatwefund-filters').offset().top - 49
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

  if ( $('#head').length ) {
    var sticky = new Waypoint.Sticky({
      element: $('#head')[0],
      wrapper: '<div class="header-wrapper"/>',
    });
  }

  if ( $('#event-bar').length ) {
    var eventSticky = new Waypoint.Sticky({
      element: $('#event-bar')[0],
      wrapper: '<div class="event-bar-wrapper"/>',
      offset: 50,
    });
  }

  if ( $('#member-widget').length ) {

    var memberSticky = new Waypoint.Sticky({
      element: $('#member-widget')[0],
      wrapper: '<div class="member-wrapper"/>',
      offset: 75,
    });

    var mw = $('.member-wrapper').width();
    var mh = $('.member-wrapper').height();

    $('#member-widget').css({
      width: mw
    });

    // Accounting for Footer Modules

    var $things = $('#footer-modules');

    $things.waypoint(function(direction) {
    if (direction === 'down') {
      $('#member-widget').addClass('boom');
    }
    }, {
    offset: mh+75
    });

    $things.waypoint(function(direction) {
    if (direction === 'up') {
      $('#member-widget').removeClass('boom');
    }
    }, {
    offset: mh+75
    });

    // Accounting for What We Fund

    var $wwf_filter = $('#whatwefund-filters');

    $wwf_filter.waypoint(function(direction) {
      if (direction === 'down') {
        $('#member-widget').addClass('boom');
      }
    }, {
    offset: mh+125
    });

    $wwf_filter.waypoint(function(direction) {
    if (direction === 'up') {
      $('#member-widget').removeClass('boom');
    }
    }, {
    offset: mh+125
    });

  }

});