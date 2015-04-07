<?php Themewrangler::setup_page();get_header(); ?>

<?php get_template_part('templates/page', 'header-simple'); ?>

<div class="tribe-events-list">
<?php

  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $upcoming = new WP_Query();
  $upcoming->query( array(
    'post_type'      => 'tribe_events',
    'eventDisplay'   => 'upcoming',
    'posts_per_page' => 10,
    'tax_query' => array(
      array(
        'taxonomy' => 'tribe_events_cat',
        'field'    => 'slug',
        'terms'    => 'hidden',
      ),
    ),
    'paged'          => $paged)
  );

  if ($upcoming->have_posts()) : while ($upcoming->have_posts()) : $upcoming->the_post(); ?>

  <div id="post-<?php the_ID() ?>" class="<?php tribe_events_event_classes() ?>">
    <div class="row">
      <?php tribe_get_template_part( 'list/single', 'event' ) ?>
    </div>
    <div class="<?php echo $bg; ?>" style="background-image:url(<?php echo $event_bg; ?>);"></div>
  </div>

  <?php endwhile;  endif;  wp_reset_query();

?>
</div>
<?php get_footer(); ?>