<?php

if( have_rows('references') ):

    while ( have_rows('references') ) : the_row();

        get_template_part('templates/membership', 'level-custom' );

    endwhile;

endif;

?>