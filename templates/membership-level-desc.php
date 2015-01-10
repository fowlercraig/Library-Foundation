<?php
  if( get_sub_field('background_image') ) {
    $image  = get_sub_field('background_image');
    $url    = $image['url'];
    $size   = 'header-bg';
    $bg     = $image['sizes'][ $size ];
    $mClass = ' has-bg';
  } else {
    $bg     = '';
    $mClass = ' no-bg';
  }
?>

<div data-speed="1.25" class="complex membership-level<?php echo $mClass;  ?>" style="background-image:url(<?php echo $bg;  ?>);">
  <div class="row">
    <div class="desktop-6">
      <h2 class="member-level-title"><?php the_sub_field('title'); ?></h2>
      <?php the_sub_field('left_content'); ?>
    </div>
    <div class="desktop-6"><?php the_sub_field('right_content'); ?></div>
  </div>
</div>
