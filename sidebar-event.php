<div id="sidebar-wrapper" class="desktop-4 right">

  <aside class="sidebar" id="event-sidebar">
    <?php if ( is_active_sidebar( 'event-widget-area' ) ) : ?>
    <ul class="xoxo">

      <?php include locate_template('/templates/events/event-sidebar-gallery.php'); ?>
      <?php dynamic_sidebar( 'event-widget-area' ); ?>

    </ul>
    <?php endif; ?>
  </aside>

</div>