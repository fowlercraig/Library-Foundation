<?php
  $temp = $wp_query;
  $wp_query = null;
  $wp_query = new WP_Query();
  $wp_query->query('showposts=10&post_type=archive'.'&paged='.$paged);
  $format = '';
?>

<div id="upcoming-events-carousel" class="newest row">

<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

  <?php
    $video            = get_field('archive:_video'); //Embed Code
    $video_url        = get_field('archive:_video', FALSE, FALSE); //URL
    $video_thumb_url  = get_video_thumbnail_uri($video_url); //get THumbnail via our functions in functions.php
?>

<div <?php post_class('item newest'); ?>>
  <div class="thumb">
    <div class="info">
      <a href="#" class="category">Aloud</a>
      <span class="format">Video</span>
    </div>
    <?php
      if(has_post_format('video')){

        if ( has_post_thumbnail() ) {
          the_post_thumbnail( 'footer-module-image', array( 'class' => 'img-responsive' ) );
        } else {
          echo '<img class="img-responsive" src=' . $video_thumb_url . '>';
        }

      } elseif (has_post_format('audio')){

        if ( has_post_thumbnail() ) {
          the_post_thumbnail( 'footer-module-image', array( 'class' => 'img-responsive' ) );
        } else {
          echo '<img class="img-responsive" src=' . $video_thumb_url . '>';
        }

      } else {

        if ( has_post_thumbnail() ) {
          the_post_thumbnail( 'footer-module-image', array( 'class' => 'img-responsive' ) );
        } else {
          echo '<img class="img-responsive" src="http://placehold.it/600x335">';
        }

      } ?>
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