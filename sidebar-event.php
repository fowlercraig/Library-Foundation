<div id="sidebar-wrapper" class="desktop-4 right">

  <?php include locate_template('/templates/events/event-sidebar-donate.php'); ?>
  <?php include locate_template('/templates/events/event-sidebar-articles.php'); ?>
  <?php include locate_template('/templates/events/event-sidebar-gallery.php'); ?>

  <aside class="sidebar" id="event-sidebar">
    <hr>
    <?php if ( is_active_sidebar( 'event-widget-area' ) ) : ?>
    <ul class="xoxo">

      <?php dynamic_sidebar( 'event-widget-area' ); ?>

    </ul>
    <?php endif; ?>
  </aside>

</div>