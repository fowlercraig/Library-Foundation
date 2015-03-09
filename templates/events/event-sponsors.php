<div id="sponsor-hat"></div>

<div id="sponsors" class="sponsor-list row">

  <div class="item desktop-12 tablet-6 mobile-3 section-title header">
    <h3 class="event-section-title">Sponsors</h3>
  </div>

  <?php if ( get_field('add_sponsor_description')) : ?>
  <div class="desktop-12">
  <?php the_field('sponsor_description'); ?>
  </div>
  <?php endif; ?>

  <?php $sponsors = get_field('sponsor_gallery'); if( $sponsors ): ?>

  <?php foreach( $sponsors as $sponsor ): $link = get_field('attachement_link', $sponsor['id']); ?>
  <div class="item desktop-3 tablet-2 mobile-1 sizer-item contained">
    <a href="<?php echo $link; ?>">
      <img class="img-responsive" src="<?php echo $sponsor['sizes']['large']; ?>" alt="<?php echo $sponsor['alt']; ?>" />
    </a>
  </div>
  <?php endforeach; endif; ?>

  <?php if( !get_field('sponsors_options') ): 
    $globalSponsors = get_field('aloud_sponsors', 'options'); if( $globalSponsors ):
    foreach( $globalSponsors as $globalSponsor ): $link = get_field('attachement_link', $globalSponsor['id']); ?>

  <div class="item desktop-3 tablet-2 mobile-1 sizer-item contained">
    <a href="<?php echo $link; ?>">
      <img class="img-responsive" src="<?php echo $globalSponsor['sizes']['large']; ?>" alt="<?php echo $globalSponsor['alt']; ?>" />
    </a>
  </div>

  <?php endforeach; endif; else: ?>

  


  <?php  endif; ?>

</div>
