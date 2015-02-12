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

</div>

<?php 

if ( is_tax() ) {

  $queried_object = get_queried_object(); 
  $taxonomy = $queried_object->taxonomy;
  $term_id = $queried_object->term_id; 
  $taxTerm = $taxonomy . '_' . $term_id;

} else {

  $taxTerm = '';

}

// check if the flexible content field has rows of data
if( have_rows('page_modules' , $taxTerm) ):

     // loop through the rows of data
    while ( have_rows('page_modules',$taxTerm) ) : the_row();

        // if( get_row_layout() == 'event_block' ):

        //   include('flex/events.php');

        if( get_row_layout() == 'page_references'):

          include('flex/post-objects.php');

        elseif( get_row_layout() == 'general_text_box' ):

          include('flex/general-textbox.php');

        elseif( get_row_layout() == 'video_wide' ):

          include('flex/general-video.php');

        elseif( get_row_layout() == 'custom_page_references' ):

          include('flex/post-objects-desc.php');

        elseif( get_row_layout() == 'image_gallery' ):

          include locate_template('templates/image-gallery.php');

        elseif( get_row_layout() == 'flickr_gallery' ):

          include locate_template('templates/page-flickrgallery.php');

        elseif( get_row_layout() == 'what_we_fund_grid' ):

          get_template_part('templates/whatwefund/whatwefund', 'grid');

        elseif( get_row_layout() == 'page_list' ):

          get_template_part('templates/page', 'list');

        elseif( get_row_layout() == 'calendar' ):

          include locate_template('templates/page-calendar.php');

        elseif( get_row_layout() == 'headshot_grid' ):

          include locate_template('templates/staff/staff-flex.php');

        elseif( get_row_layout() == 'download' ): 

          $file = get_sub_field('file');

        endif;

    endwhile;

else :

    // no layouts found

endif;

?>