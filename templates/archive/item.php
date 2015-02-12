<?php
  
  $thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
$thumb_url = $thumb_url_array[0];

?>

<div class="item desktop-4 contained">
  <div class="meta">
    <h2 class="title"><?php the_title(); ?></h2>
    <div class="cats">

    </div>
  </div>
  <div class="thumbnail" style="background-image: url(<?php echo $thumb_url;?> );"></div>
  <div class="skeleton">
    <img src="http://placehold.it/700x450/blue" class="img-responsive" />
  </div>
</div>