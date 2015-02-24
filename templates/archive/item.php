<?php
  
  $thumb_id         = get_post_thumbnail_id();
  $thumb_url_array  = wp_get_attachment_image_src($thumb_id, 'large', true);
  $video            = get_field('archive:_video'); //Embed Code
  $video_url        = get_field('archive:_video', FALSE, FALSE); //URL
  $video_thumb_url  = get_video_thumbnail_uri($video_url); //get THumbnail via our functions in functions.php
  $audio_url        = get_field('archive_podcast');
  $postcreatedate   = get_the_date('Y');
  $category         = strip_tags(get_the_category_list('',', ',''));
  $itemsize         = 'desktop-4';
  $skeletonsize     = '700x450';
  $speakers         = get_field('speakers');
  $guests           = $speakers;
  $action           = '';
  $metainfo         = strip_tags(get_the_tag_list('',', ',''));
  // Random Colors
  $input            = array("pink","blue","green","yellow");
  $rand_keys        = array_rand($input, 2);


  // Conditionals

  if ( has_post_format( 'video' )) {

    $format         = 'video';
    $thumb_url      = $video_thumb_url;
    $action         = '<a href="'. $video_url .'" class="play popup-video"><i class="ss-icon ss-gizmo">play</i></a>';
    $itemsize       = 'desktop-8';
    $skeletonsize   = '1400x900';

  } elseif ( has_post_format( 'gallery' )) {

    $format         = 'photo';
    $images         = get_field('archive_gallery'); 
    $image_1        = $images[0]; 
    $thumb_url      = $image_1[url];


  } elseif ( has_post_format( 'quote' )) {

    $format         = 'ellipsischat';
    $thumb_url      = $thumb_url_array[0];
    $itemsize       = 'desktop-12';
    $skeletonsize   = '1400x500';

  } elseif ( has_post_format( 'audio' )) {

    $format         = 'audio';
    $thumb_url      = $thumb_url_array[0];
    $action         = '<a href="'. $audio_url .'" class="play" target="blank"><i class="ss-icon ss-gizmo">play</i></a>';

  } else {

    $format         = 'user';
    $guests         = get_the_title();
    $thumb_url      = $thumb_url_array[0];
    $metainfo       = '';
    $postcreatedate = '';
    $category       = '';
    $itemsize       = 'desktop-4';
    $skeletonsize   = '700x899';

  }

?>

<div class="item <?php echo $input[$rand_keys[1]] . "\n"; echo ' '; echo $itemsize; echo ' '; echo $format; echo ' '; echo $category; ?> contained">

  <?php if( get_post_type() == 'people' ): ?>
  <div class="description">
    <?php echo excerpt(150); ?>
  </div>
  <?php endif; ?>

  <span class="icon"><i class="ss-icon ss-glyphish"><?php echo $format; ?></i></span>

  <?php if ( has_post_format( 'quote' )): ?>
  <div class="quote-text">
    <div class="row">
      <div class="desktop-8 tablet-5 mobile-3 centered">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <div class="meta">
    <span class="cat"><?php echo $category; echo ' / '; echo $postcreatedate; ?></span>
    <h2 class="title"><?php echo $guests; ?></h2>
    <span class="cat"><?php echo $metainfo; ?></span>
  </div>
  
  <?php echo $action; ?>

  <?php if ( has_post_format( 'quote' )) { } else { ?>
  <div class="thumbnail" style="background-image: url(<?php echo $thumb_url;?> );"></div>
  <div class="skeleton"><img src="http://placehold.it/<?php echo $skeletonsize; ?>" class="img-responsive" /></div>
  <?php } ?>
</div>
