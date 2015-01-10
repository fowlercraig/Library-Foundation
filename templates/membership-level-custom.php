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

<div data-speed="1.25" class="simple membership-level<?php echo $mClass;  ?>" style="background-image:url(<?php echo $bg;  ?>);">
  <div class="row">

    <header class="desktop-4 tablet-6 mobile-3">
      <h2 class="member-level-title"><?php the_sub_field('title'); ?></h2>
      <span class="sub-title"><?php the_sub_field('sub_title'); ?></span>
      <br><br>
      <a href="<?php the_permalink(); ?>" class="button">Join/Renew Now</a>
    </header>

    <div class="desktop-8"><?php the_sub_field('description'); ?></div>

  </div>
</div>
