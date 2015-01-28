<?php 

  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'header-bg', true);

  if($featured){
    $thumb_url = $thumb_url_array[0];
  } else {
    $thumb_url = '';
  }

?>

<div class="page-header <?php echo $min; ?>" data-speed="1.25" style="background-image:url(<?php echo $thumb_url; ?>);">
  <div class="row">
    <div class="desktop-12">
      <h1 class="page-header-title"><?php the_title(); ?></h1>
      <h3 class="page-header-subtitle"><?php the_time('l, M jS, Y'); ?></h3>
    </div>
  </div>
</div>

