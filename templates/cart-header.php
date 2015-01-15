<?php 

  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'header-bg', true);
  $thumb_url = $thumb_url_array[0];

?>

<div class="cart-header">
  <div class="row">
    <div class="desktop-12">
      <h1 class="page-header-title"><?php the_title(); ?></h1>
    </div>
  </div>
</div>

