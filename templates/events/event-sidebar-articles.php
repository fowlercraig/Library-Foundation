<?php

if( have_rows('additional_content') ):

    while ( have_rows('additional_content') ) : the_row();

        the_sub_field('thumbnail');
        the_sub_field('description');

    endwhile;

endif;

?>