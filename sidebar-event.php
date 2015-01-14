<div id="sidebar-wrapper" class="desktop-4 right">

  <aside class="sidebar" id="event-sidebar">
    <?php if ( is_active_sidebar( 'event-widget-area' ) ) : ?>
    <ul class="xoxo">

      <li>Related Video</li>
      <li>Related Podcast</li>
      <li>View Slideshow <?php include locate_template('/templates/events/event-sidebar-gallery.php'); ?></li>
      <?php dynamic_sidebar( 'event-widget-area' ); ?>

    </ul>
    <?php endif; ?>
  </aside>

</div>