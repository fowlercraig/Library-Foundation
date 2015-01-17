<?php $sponsors = get_field('sponsor_gallery'); if( $sponsors ):

  // Display custom Sponsors normally.

  echo '<div id="sponsors" class="sponsor-list row">';
  echo '<header class="item desktop-12 tablet-6 mobile-3 section-title header">Sponsors</header>';

  foreach( $sponsors as $sponsor ): ?>

    <div class="item sizer-item"><img src="<?php echo $sponsor['sizes']['large']; ?>" alt="<?php echo $sponsor['alt']; ?>" /></div>

  <?php endforeach; 

  if( !get_field('sponsors_options') ) {

    $globalSponsors = get_field('aloud_sponsors', 'options'); if( $globalSponsors ):

    foreach( $globalSponsors as $globalSponsor ): ?>

      <div class="item sizer-item"><img src="<?php echo $globalSponsor['sizes']['large']; ?>" alt="<?php echo $globalSponsor['alt']; ?>" /></div>

    <?php endforeach; endif;

  }

  echo '</div>';

else : 

  echo '<div id="sponsors" class="sponsor-list row">';
  echo '<header class="item desktop-12 tablet-6 mobile-3 section-title header">Sponsors</header>';

  foreach( $sponsors as $sponsor ): ?>

  <div class="item sizer-item"><img src="<?php echo $sponsor['sizes']['large']; ?>" alt="<?php echo $sponsor['alt']; ?>" /></div>

  <?php endforeach; 

endif; ?>
