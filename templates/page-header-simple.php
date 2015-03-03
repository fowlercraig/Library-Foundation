<?php
  $input     = array("1","2","3","4","5","6","7");
  $rand_keys = array_rand($input, 2);
  $bgImg     = $input[$rand_keys[1]];
?>

<div class="simple-header" data-speed="1.25" style="background-image:url(<?php echo '/assets/img/bg/'; echo $bgImg; echo '.jpg' ?>);">
  <div class="row">
    <div class="desktop-12 tablet-6 mobile-3">
      <h1 class="page-header-title"><?php the_title(); ?></h1>
    </div>
  </div>
</div>

