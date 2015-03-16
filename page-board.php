<?php Themewrangler::setup_page();get_header(); ?>

<?php get_template_part('templates/page', 'header-simple'); ?>

<?php

  if( have_rows('page_modules') ):

     echo '<div id="board" class="row">';

    while ( have_rows('page_modules') ) : the_row();

      if( get_row_layout() == 'general_text_box'):

        echo '<div class="board desktop-6 tablet-3 mobile-3">';
        the_sub_field('general_text_box'); 
        echo '</div>';

      endif;

    endwhile;

     echo '</div>';

  endif;

?>

<?php get_footer(); ?>