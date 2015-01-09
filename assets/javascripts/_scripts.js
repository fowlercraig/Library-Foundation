$( document ).ready(function() {

  // What We Fund

  $(function(){

    var $container = $('#whatwefund-grid').imagesLoaded( function() {

      $container.isotope({

        itemSelector:   '.item',
        layoutMode:     'fitRows',
        filter:         '.featured',
        animationEngine:'css',
        transitionDuration: 0,
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
      // use filter function if value matches
      filterValue = filterFns[ filterValue ] || filterValue;
      $container.isotope({ filter: filterValue });
    });

  }); // End What We Fund

});