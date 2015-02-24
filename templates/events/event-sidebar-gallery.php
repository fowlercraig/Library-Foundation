<div id="related-media" class="sidebar">
<?php if( have_rows('event_media_objects') ): while ( have_rows('event_media_objects') ) : the_row(); ?>
<?php $post_objects = get_sub_field('event_media'); if( $post_objects ): ?>
<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
<?php setup_postdata($post); ?>

<?php if ( has_post_format( 'gallery' )): $images = get_field('archive_gallery'); ?>
<div class="item event-gallery">
<h3 class="title"><?php the_title(); ?></h3>
<?php $counter = 1; foreach( $images as $image ): ?>
<figure itemscope itemtype="http://schema.org/ImageObject" class="figure figure_<?php echo $counter; ?>">
<a href="<?php echo $image['url']; ?>" itemprop="contentUrl" data-size="<?php echo $image['width']; ?>x<?php echo $image['height']; ?>">
<img src="<?php echo $image['sizes']['large']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" itemprop="thumbnail"/>
</a>
<figcaption itemprop="caption description"><?php echo $image['caption']; ?></figcaption>
</figure>

<?php $counter++; // add one per row ?>  
<?php endforeach; ?>
</div>
<?php endif; ?>


<?php if ( has_post_format( 'video' )):  ?>
<?php

  $video            = get_field('archive:_video'); //Embed Code
  $video_url        = get_field('archive:_video', FALSE, FALSE); //URL
  $video_thumb_url  = get_video_thumbnail_uri($video_url); //get THumbnail via our functions in functions.php
  $thumb_url        = $video_thumb_url;
  $action           = '<a href="'. $video_url .'" class="play popup-video"><i class="ss-icon ss-gizmo">play</i></a>';

?>
<div class="item video-gallery widget">
<h3 class="title"><?php the_title(); ?></h3>
<?php echo $action; ?>
<div class="thumbnail" style="background-image: url(<?php echo $thumb_url;?> );"></div>
<div class="skeleton"><img src="http://placehold.it/1400x900" class="img-responsive" /></div>
</div>
<?php endif; ?>

<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
<?php endif; wp_reset_postdata();?>
<?php endwhile; endif;?>
</div>