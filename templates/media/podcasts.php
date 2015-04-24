<?php

  $args = array(
    'showposts'   => 8,
    'post_type'   => 'archive',
    'tax_query'  => array(
      array(
        'taxonomy' => 'post_format',
        'field'    => 'slug',
        'terms'    => array( 'post-format-audio' ),
      )
    )
  );

  $temp = $wp_query;
  $wp_query = null;
  $wp_query = new WP_Query();
  $wp_query->query($args);
?>

<div class="content row">

<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<div <?php post_class('item podcast sizer-item desktop-6 tablet-6 mobile-3'); ?>>
  <a href="#" class="ss-icon ss-gizmo ss-play play-icon"></a>
  <div class="meta podcast">
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