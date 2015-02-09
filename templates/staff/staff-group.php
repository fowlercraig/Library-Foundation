<div id="staffgroup_<?php echo $staffcounter; ?>" class="staff-group">
  <div class="row">

    <header class="desktop-12">
      <h3 class="title"><?php the_sub_field('group_title'); ?></h3>
    </header>

    <?php if( have_rows('staff_members') ): while ( have_rows('staff_members') ) : the_row(); ?>

    <?php 
      $image = get_sub_field('staff_photo');

      if( !empty($image) ): 
      $url = $image['url'];
      $title = $image['title'];
      $alt = $image['alt'];
      $caption = $image['caption'];

      $size = 'large';
      $thumb = $image['sizes'][ $size ];
      $width = $image['sizes'][ $size . '-width' ];
      $height = $image['sizes'][ $size . '-height' ];
      endif;
    ?>

    <div class="staff-member desktop-3 tablet-3 mobile-3">
      <div class="thumb">
        <img class="img-responsive" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
      </div>
      <?php the_sub_field('staff_info'); ?>
    </div>
    <?php endwhile; else : endif;?>

  </div>
</div>
