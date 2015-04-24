<?php
  $temp = $wp_query;
  $wp_query = null;
  $wp_query = new WP_Query();
  $wp_query->query('showposts=10&post_type=archive'.'&paged='.$paged);
  $format = ''
?>

<div id="upcoming-events-carousel" class="newest">

<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<div <?php post_class('item'); ?>>
  <div class="thumb">
    <div class="info">
      <a href="#" class="category">Aloud</a>
      <span class="format">Video</span>
    </div>
    <?php
      if ( has_post_thumbnail() ) {
        the_post_thumbnail( 'footer-module-image', array( 'class' => 'img-responsive' ) );
      } else {
        echo '<img class="img-responsive" src="http://placehold.it/600x335">';
      }
    ?>
  </div>
  <div class="meta newest">
    <div class="wrapper">
      <h3 class="title"><a href=""><?php the_title(); ?></a></h3>
      <span class="time"><?php the_time('F jS, Y') ?></span>
    </div>
  </div>
</div>

<?php endwhile; ?>

</div>

<?php
  $wp_query = null;
  $wp_query = $temp;  // Reset
?>