<?php 

  if ( is_page( 'cart' ) || is_page( 'checkout' ) ) {    

    include locate_template('page-cart.php' );

  } elseif ( is_page( 'aloud' ) ) { 

    include locate_template('page-aloud.php' );

  } else { 

    include locate_template('page-default.php' );

  }

?>