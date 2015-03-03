<script>

  $(function(){

    var homeClasses   = '.page-home';
    var aloudClasses  = '.events-category-aloud';
    var ylClasses     = '.page-young-literati';
    var memberClasses = '.page-membership';
    var lsClasses     = '';

    if ($('body').is(aloudClasses)) {

      //alert('ALOUD');
      $('#logo').addClass('aloud-logo');

    }

    if ($('body').is(ylClasses)) {

      //alert('YL');
      $('#logo').addClass('yl-logo');

    }

    if ($('body').is(memberClasses)) {

      //alert('ALOUD');
      $('#logo').addClass('member-logo');

    }

    if ($('body').is(lsClasses)) {

      //alert('Library Store!');
      $('#logo').addClass('ls-logo');

    }

  });

</script>