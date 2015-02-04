<?php 

  // Dynamically Grab the page width depending on template.

  if ( get_field('include_aside')) {
  
    $pageWidth = 'sizer-item desktop-7 tablet-4 mobile-3';

  } else {

    $pageWidth = 'sizer-item desktop-12 tablet-4 mobile-3';

  }

  if (is_front_page()) {
    $homepage = 'class="homepage"';
  }

?>

<?php while (have_posts()) : the_post(); ?>

<div class="page-content">
  <div class="row">

    <div class="<?php echo $pageWidth; ?>"><?php the_content(); ?></div>

    <?php if ( get_field('include_aside')) { ?>
    <aside class="aside desktop-4 tablet-2 mobile-3 right"><?php the_field('aside'); ?></aside>

    <?php if ( is_ancestor(250) OR is_front_page() ) { // If What We Fund Ancestor ?>
    <aside class="aside desktop-4 tablet-2 mobile-3 right">
      <div id="member-widget" <?php echo $homepage; ?>>
        <div class="wrapper">
          <h3>Become a Library Associate</h3>
          <p>
            Being a Library Associate gives you special access to public programs,
            opening parties, and puts you in the mix of L.A.'s vibrant literary and
            cuture scene.
          </p>
        </div>
        <a href="#">Join Now</a>
      </div>
    </aside>
    <?php } ?>

    <?php } ?>

  </div>
</div>

<?php endwhile; ?>
