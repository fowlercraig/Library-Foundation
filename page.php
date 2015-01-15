<?php 

  if ( is_page( 'cart' ) || is_page( 'checkout' ) ) {    

    include locate_template('page-cart.php' );

  } elseif ( is_page( 10 ) ) { 

    $bannerimg = 'admissions.jpg';

  } else { 

    include locate_template('page-default.php' );

  }

?>