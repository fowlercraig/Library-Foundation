<?php if( is_tax( 'tribe_events_cat', 'aloud' )): ?>

<div id="sponsors" class="page-section">
  <div class="row">
    <div class="desktop-12">
      <h3 class="event-section-title">Thanks to our generous sponsors</h3>
      <?php $globalSponsors = get_field('aloud_sponsors', 'options'); if( $globalSponsors ): ?>
      <?php foreach( $globalSponsors as $globalSponsor ): $link = get_field('attachement_link', $globalSponsor['id']); ?>

      <div class="item sizer-item">
      <a href="<?php echo $link; ?>">
      <img src="<?php echo $globalSponsor['sizes']['large']; ?>" alt="<?php echo $globalSponsor['alt']; ?>" />
      </a>
      </div>

      <?php endforeach; endif; ?>
    </div>
  </div>
</div>

<?php endif; ?>

