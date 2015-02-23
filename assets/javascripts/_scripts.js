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

  $(".sidebar select").selecter({
    //label: "All Categories",
    cover: true,
    customClass: "blog-select"
  });

  // $(".widget_categories select").selecter({
  //   label: "All Categories",
  //   cover: true,
  //   customClass: "blog-select"
  // });

  $("#donation-module select").selecter({
    //label: "Archive",
    cover: true,
    customClass: "blog-select"
  });

  $("#home-upcoming select").selecter({
    label: "Jump to Month",
    cover: true,
    links: true,
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

  $("#home-carousel").royalSlider({
    keyboardNavEnabled: true,
    // autoScaleSlider : true,
    // autoScaleSliderWidth: 1200,
    // autoScaleSliderHeight: 600,
    imageScaleMode: 'fill',
    slidesSpacing: 0,
    fadeinLoadedSlide: false,
    addActiveClass: true,
    loop: true,
    slidesSpacing: 5,
    visibleNearby: {
      enabled: false,
      centerArea: 0.8,
      center: true,
      breakpoint: 650,
      breakpointCenterArea: 0.64,
      navigateByCenterClick: true
    }
  }); 

  $("#home-featured .slider").royalSlider({
    keyboardNavEnabled: true,
    imageScaleMode: 'fill',
    slidesSpacing: 0,
    fadeinLoadedSlide: false,
    addActiveClass: true,
    loop: true,
  }); 

  $('#upcoming-events-carousel').slick({
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 2,
    accessibility: false,
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

    // var $grid_container = $('.sortable-grid').imagesLoaded( function() {

    //   $grid_container.isotope({

    //     itemSelector:   '.item',
    //     layoutMode:     'packery',
        
    //   });

    // });

  function archiveStuffs(){

  $('.popup-video').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });



  }

  archiveStuffs()

  //   filterTags();
  // function filterTags(){
  //   isotopeInit();

  //   var $checkboxes = $('#whatwefund-filters button')

  //   $checkboxes.on( 'click', 'button', function() {
  //     var arr = [];
  //     $checkboxes.filter(':checked').each(function(){
  //       var $dataToFilter = $(this).attr('data-filter');
  //       arr.push( $dataToFilter );
  //     });
  //     arr = arr.join(', ');
  //     $container.isotope({ filter: arr });


  //   });
  // };



    isotopeInit();

    function isotopeInit(){
      var $grid_container = $('.sortable-grid').imagesLoaded( function() {
        $grid_container.isotope({
          itemSelector: '.item',
          layoutMode: 'packery',
          animationEngine: "best-available",
        });
      });
    };

    $('.sortable-grid').infinitescroll({
    loading: {
      finished: undefined,
      finishedMsg: "<em>No more posts to load.</em>",
      img: "http://www.infinite-scroll.com/loading.gif",
      msg: null,
      msgText: "<em>Loading the next set of posts...</em>",
      //selector: '.infinite-loader',
      speed: 'fast',
      start: undefined
      },
    binder: $(window),
    //pixelsFromNavToBottom: Math.round($(window).height() * 0.9),
    //bufferPx: Math.round($(window).height() * 0.9),
    nextSelector: ".archive-nav a",
    navSelector: ".archive-nav",
    contentSelector: ".sortable-grid",
    itemSelector: ".item",
    //maxPage: {{pagination.pages}},
    appendCallback: true,
    //animate: true,
    bufferPx: 500,
      },
    // Callbacks for initializing scripts to added post excerpts
    function(newElements){
      var $newElems = $( newElements );
      archiveStuffs()
      // checkForFeatured();
      // makeFontResponsive();
      // addReadMoreLinks();
      // fitVidInit();
      $newElems.imagesLoaded(function(){
        $('.sortable-grid').isotope( 'appended', $newElems );
      });

    }
  );

$('.grid-filters').on( 'click', 'button', function() {
      var filterValue = $(this).attr('data-filter');
      $('.grid-filters').find('.active').removeClass('active');
      $(this).addClass('active');
      // use filter function if value matches
      filterValue = filterFns[ filterValue ] || filterValue;
      $('.sortable-grid').isotope({ filter: filterValue });
      $('html,body').animate({
        scrollTop: $('#archive-grid').offset().top - 49
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

  $('.page-header, .simple-header').each(function(){
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

  $('.member-popup').magnificPopup({
    type: 'ajax',
    callbacks : {
      parseAjax: function(mfpResponse) {
        mfpResponse.data = $(mfpResponse.data).find('#content .summary');
      },
    },
    //alignTop: center,
    overflowY: 'scroll' // as we know that popup content is tall we set scroll overflow by default to avoid jump
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

  if ( $('#event-bar, #archive-bar').length ) {
    var eventSticky = new Waypoint.Sticky({
      element: $('#event-bar, #archive-bar')[0],
      wrapper: '<div class="event-bar-wrapper"/>',
      offset: 50,
    });
  }

  if ( $('#member-widget').length ) {

    var memberSticky = new Waypoint.Sticky({
      element: $('#member-widget:not(.page-home #member-widget)')[0],
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

  // Archive Page

  $('.popup-video').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  $('#main-nav a.search').click(function(event){
    event.preventDefault();
    $('#search-footer').fadeIn(300);
  });

  $('#search-footer .close').click(function(event){
    event.preventDefault();
    $('#search-footer').fadeOut(300);
  });


});