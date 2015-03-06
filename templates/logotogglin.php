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

    var homeClasses   = '.page-home';
    var aloudClasses  = '.events-category-aloud';
    var ylClasses     = '.page-young-literati';
    var memberClasses = '.page-membership';
    var lsClasses     = '';

    if ($('body').is(aloudClasses)) {

      //alert('ALOUD');
      $('#program-logo').addClass('aloud-logo');

      setTimeout(function(){
        swiper.slideTo(1);
      },500);

      hoverEffect();

    }

    if ($('body').is(ylClasses)) {

      //alert('YL');
      $('#program-logo').addClass('yl-logo');
      
      setTimeout(function(){
        swiper.slideTo(1);
      },500);

      hoverEffect();

    }

    if ($('body').is(memberClasses)) {

      //alert('ALOUD');
      $('#program-logo').addClass('member-logo');
      
      setTimeout(function(){
        swiper.slideTo(1);
      },500);

      hoverEffect();

    }

    if ($('body').is(lsClasses)) {

      //alert('Library Store!');
      $('#program-logo').addClass('ls-logo');
      
      setTimeout(function(){
        swiper.slideTo(1);
      },500);

      hoverEffect();

    }    

  });

</script>