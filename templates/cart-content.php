<?php while (have_posts()) : the_post(); ?>

<?php

  if ( is_page('checkout')) {

    $pageWidth = 'desktop-7';

  } else {

    $pageWidth = 'desktop-12';
  }

?>

<div class="cart-content">
  <div class="row">

    <div class="<?php echo $pageWidth; ?>"><?php the_content(); ?></div>

    <?php 

      if(is_order_received_page()) {

        //include locate_template( 'templates/membership/member-pitch.php' ); 
        get_template_part('templates/membership/member', 'pitch' );

      } 

    ?>

  </div>
</div>

<?php endwhile; ?>
