<?php

  $args = array(
    'showposts'   => 8,
    'post_type'   => 'archive',
    'tax_query'  => array(
      array(
        'taxonomy' => 'post_format',
        'field'    => 'slug',
        'terms'    => array( 'post-format-video' ),
      )
    )
  );

  $temp = $wp_query;
  $wp_query = null;
  $wp_query = new WP_Query();
  $wp_query->query($args);
?>

<div id="sized" class="content row">

<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<div <?php post_class('item video sizer-item desktop-3 tablet-3 mobile-3'); ?>>
  <div class="thumb">
    <div class="info">
      <a href="#" class="category">Aloud</a>
    </div>
    <?php
      if ( has_post_thumbnail() ) {
        the_post_thumbnail( 'footer-module-image', array( 'class' => 'img-responsive' ) );
      } else {
        echo '<img class="img-responsive" src="http://placehold.it/600x335">';
      }
    ?>
  </div>
  <div class="meta video">
    <h3 class="title"><a href=""><?php the_title(); ?></a></h3>
    <span class="time"><?php the_time('F jS, Y') ?></span>
  </div>
</div>

<?php endwhile; ?>

</div>

<?php
  $wp_query = null;
  $wp_query = $temp;  // Reset
?>