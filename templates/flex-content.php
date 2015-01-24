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

        elseif( get_row_layout() == 'member_title' ):

          include('flex/member-title.php');

        elseif( get_row_layout() == 'custom_page_references' ):

          include('flex/post-objects-desc.php');

        elseif( get_row_layout() == 'page_references_description' ):

          include('flex/post-objects-custom.php');

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

        elseif( get_row_layout() == 'download' ): 

        	$file = get_sub_field('file');

        endif;

    endwhile;

else :

    // no layouts found

endif;

?>