<?php 

  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'header-bg', true);
  $thumb_url = $thumb_url_array[0];

?>

<div class="page-header" style="background-image:url(<?php echo $thumb_url; ?>);">
  <div class="row">
    <div class="desktop-12">
      <ul class="parent-links">
        <li><a href="#">Parent Link</a></li>
        <li><a href="#">Parent Link</a></li>
      </ul>
      <h1><?php the_title(); ?></h1>
    </div>
  </div>
</div>
