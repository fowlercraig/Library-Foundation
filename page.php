<?php 

  if ( is_page( 'cart' ) || is_page( 'checkout' ) ) {    

    include locate_template('page-cart.php' );

  } elseif ( is_page( 'aloud' ) ) { 

    include locate_template('page-aloud.php' );

  } elseif ( is_page( 'blog' ) ) { 

    include locate_template('page-blog.php' );

  } elseif ( is_page( 'archive' ) ) { 

    include locate_template('page-archive.php' );

  } elseif ( is_page( 'membership' ) ) { 

    include locate_template('page-membership.php' );

  } elseif ( is_page( 'young-literati' ) ) { 

    include locate_template('page-membership.php' );

  } elseif ( is_page( 'thanks' ) ) { 

    include locate_template('page-confirmation.php' );

  } else { 

    include locate_template('page-default.php' );

  }

?>