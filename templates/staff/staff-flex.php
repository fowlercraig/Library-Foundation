<?php

  if( have_rows('staff') ):

    while ( have_rows('staff') ) : the_row();

      if( get_row_layout() == 'staff_group'):

        include('staff-group.php');

      endif;

    endwhile;

  endif;

?>