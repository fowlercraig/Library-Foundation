<div id="member-tabs" class="tabbed">

  <menu class="row">
    <div class="desktop-12">
      <menu class="tabber-menu">
        <a href="#tab_2" class="tabber-handle">
          <h3 class="member-level-title">Library Associates</h3>
          Become a Library Associate today, lorem ipsum.
        </a>
        <a href="#tab_4" class="tabber-handle">
          <h3 class="member-level-title">Leadership Circle</h3>
          Become a Library Leader. Lorem Ipsum.
        </a>
      </menu>
    </div>
  </menu>

  <div class="row">
  <div class="desktop-12 padded">

  <?php if( have_rows('page_modules') ): $counter = 1; while ( have_rows('page_modules') ) : the_row(); ?>
  <?php if( get_row_layout() == 'page_references_description' ): ?>
  <div id="tab_<?php echo $counter; ?>" class="tabber-tab">
  <?php while( have_rows('references') ) : the_row(); ?>

  <?php

    if ( get_sub_field ('remove_overlay') ) { $nOverlay = ' overlayless'; }
    $post_object = get_sub_field('page');
    if( $post_object ): $post = $post_object; setup_postdata( $post );

  ?>

  <div class="simple membership-level<?php echo $mClass; echo $nOverlay; ?>">
    <div class="row">
      <header class="desktop-4 tablet-6 mobile-3">
        <h2 class="member-level-title"><?php the_sub_field('title'); ?></h2>
        <span class="sub-title"><?php the_sub_field('sub_title'); ?></span>
        <br><br>
        <a href="#<?php echo $post->post_name;?>" class="popup button">Join/Renew Now</a>
      </header>
      <div class="desktop-8"><?php the_sub_field('description'); ?></div>
    </div>
  </div>

  <div id="<?php echo $post->post_name;?>" class="mfp-hide white-popup-block modal-window member">
    <?php woocommerce_get_template_part( 'content', 'single-product' ); ?>
  </div>

  <?php wp_reset_postdata(); endif; ?>

  <?php endwhile; ?>
  </div>
  <?php endif; ?>
  <?php $counter++; endwhile; endif; ?>

  </div>
  </div>

</div>`