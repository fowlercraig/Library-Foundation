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

<div class="membership-level<?php echo $mClass;  ?>" style="background-image:url(<?php echo $bg;  ?>);">
  <div class="row">
    <header class="desktop-12"><h2 class="member-level-title"><?php the_sub_field('title'); ?></h2></header>
    <div class="desktop-6"><?php the_sub_field('left_content'); ?></div>
    <div class="desktop-6"><?php the_sub_field('right_content'); ?></div>
  </div>
</div>
