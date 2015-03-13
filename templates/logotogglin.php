<script>

  $(function(){

    var swiper = new Swiper('.swiper-container', {
      // pagination: '.swiper-pagination',
      // nextButton: '.swiper-button-next',
      // prevButton: '.swiper-button-prev',
      effect: 'cube',
      grabCursor: false,
      allowSwipeToNext : false,
      allowSwipeToPrev : false,
      simulateTouch: false,
      cube: {
          shadow: false,
          slideShadows: true,
          shadowOffset: 20,
          shadowScale: 0.94
      }
    });

    function hoverEffect(){
      $( "#logo" ).mouseenter(function() {
      //n += 1;
      swiper.slideTo(0);
      }).mouseleave(function() {
      swiper.slideTo(1);
      });
    }

    var homeClasses    = '.page-home';
    var aloudClasses   = '.events-category-aloud';
    var ylClasses      = '.page-young-literati';
    var memberClasses  = '.page-membership, .page-become-a-member';
    var councilClasses = '.page-the-council, .page-council-board';
    var lsClasses      = '';

    if ($('body').is(aloudClasses)) {

      //alert('ALOUD');
      $('#swiper').addClass('aloud-logo');

      setTimeout(function(){
        swiper.slideTo(1);
      },500);

      hoverEffect();

    }

    if ($('body').is(ylClasses)) {

      //alert('YL');
      $('#swiper').addClass('yl-logo');
      
      setTimeout(function(){
        swiper.slideTo(1);
      },500);

      hoverEffect();

    }

    if ($('body').is(memberClasses)) {

      //alert('ALOUD');
      $('#swiper').addClass('member-logo');
      
      setTimeout(function(){
        swiper.slideTo(1);
      },500);

      hoverEffect();

    }

    if ($('body').is(lsClasses)) {

      //alert('Library Store!');
      $('#swiper').addClass('ls-logo');
      
      setTimeout(function(){
        swiper.slideTo(1);
      },500);

      hoverEffect();

    } 

    if ($('body').is(councilClasses)) {

      //alert('Library Store!');
      $('#swiper').addClass('council-logo');
      
      setTimeout(function(){
        swiper.slideTo(1);
      },500);

      hoverEffect();

    }    

  });

</script>