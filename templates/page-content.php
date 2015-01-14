<?php 

  // Dynamically Grab the page width depending on template.

  if ( get_field('include_aside')) {
  
    $pageWidth = 'sizer-item desktop-8 tablet-4 mobile-3';

  } else {

    $pageWidth = 'sizer-item desktop-12 tablet-4 mobile-3';

  }

?>

<?php while (have_posts()) : the_post(); ?>

<div class="page-content">
  <div class="row">

    <div class="<?php echo $pageWidth; ?>"><?php the_content(); ?></div>

    <?php if ( get_field('include_aside')) { ?>
    <aside class="aside desktop-4 tablet-2 mobile-3 right"><?php the_field('aside'); ?></aside>
    <?php } ?>

  </div>
</div>

<?php endwhile; ?>
