<?php if( have_rows('frequently_asked_questions') ):

  echo '<ul id="faq" class="faq-list row">';
  echo '<li class="item desktop-12 tablet-6 mobile-3 section-title header">Frequently Asked Questions</li>';

  while ( have_rows('frequently_asked_questions') ) : the_row();

    include locate_template('templates/events/event-faq-item.php' );

  endwhile;

  echo '</ul>';

else :

  echo '<ul id="faq" class="faq-list row">';
  echo '<li class="item desktop-12 tablet-6 mobile-3 section-title header">Frequently Asked Questions</li>';

  while ( have_rows('aloud_faq','options') ) : the_row();

    include locate_template('templates/events/event-faq-item.php' );

  endwhile;

  echo '</ul>';

endif; ?>




<?php if( have_rows('aloud_reservation_policies') ):

  echo '<div id="reservation-policy" class="faq-list row">';
  echo '<header class="item desktop-12 tablet-6 mobile-3 section-title header">Reservation Policies</header>';

  while ( have_rows('aloud_reservation_policies') ) : the_row();

    include locate_template('templates/events/event-faq-item.php' );

  endwhile;

  echo '</div>';

else :

  echo '<div id="reservation-policy" class="faq-list row">';
  echo '<header class="item desktop-12 tablet-6 mobile-3 section-title header">Reservation Policies</header>';

  $counter = 1; while ( have_rows('aloud_reservation_policies','options') ) : the_row();

    include locate_template('templates/events/event-faq-item.php' );

  $counter++; endwhile;

  echo '</div>';

endif; ?>


<div id="cancel-reservation" class="mfp-hide white-popup-block modal-window">
  <?php echo do_shortcode('[gravityform id=1 title=true description=true ajax=true ]'); ?>
</div>