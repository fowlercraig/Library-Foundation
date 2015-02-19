<?php $sponsors = get_field('sponsor_gallery'); 

if( $sponsors ):

  // Display custom Sponsors normally.

  echo '<div id="sponsors" class="sponsor-list row">';
  echo '<div class="item desktop-12 tablet-6 mobile-3 section-title header"><h3 class="event-section-title">Sponsors</h3></div>'; ?>

  <?php if ( get_field('add_sponsor_description')) : ?>
  <div class="desktop-12">
  <?php the_field('sponsor_description'); ?>
  </div>
  <?php endif; ?>

  <?php foreach( $sponsors as $sponsor ): $link = get_field('attachement_link', $sponsor['id']); ?>

    <div class="item sizer-item">
      <a href="<?php echo $link; ?>">
        <img src="<?php echo $sponsor['sizes']['large']; ?>" alt="<?php echo $sponsor['alt']; ?>" />
      </a>
    </div>

  <?php endforeach; 

  if ( get_field('add_sponsor_description')) : ?>
  <div class="desktop-12">
  <hr>
  </div>
  <?php endif;

  if( !get_field('sponsors_options') ) {

    $globalSponsors = get_field('aloud_sponsors', 'options'); if( $globalSponsors ):

    foreach( $globalSponsors as $globalSponsor ): $link = get_field('attachement_link', $globalSponsor['id']); ?>

      <div class="item sizer-item">
        <a href="<?php echo $link; ?>">
          <img src="<?php echo $globalSponsor['sizes']['large']; ?>" alt="<?php echo $globalSponsor['alt']; ?>" />
        </a>
      </div>

    <?php endforeach; endif;

  }

  echo '</div>';

else : // This is where we show Global Sponsors

  if( get_field('sponsors_options') ) {} else {

  echo '<div id="sponsors" class="sponsor-list row">';
  echo '<div class="item desktop-12 tablet-6 mobile-3 section-title header"><h3 class="event-section-title">Sponsors</h3></div>';

  $globalSponsors = get_field('aloud_sponsors', 'options'); 
  foreach ( $globalSponsors as $globalSponsor ): $link = get_field('attachement_link', $globalSponsor['id']); ?>

  <div class="item sizer-item">
    <a href="<?php echo $link; ?>">
      <img src="<?php echo $globalSponsor['sizes']['large']; ?>" alt="<?php echo $globalSponsor['alt']; ?>" />
    </a>
  </div>

  <?php endforeach; } echo '</div>';

endif; 

?>
