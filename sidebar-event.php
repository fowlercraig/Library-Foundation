<div id="sidebar-wrapper" class="desktop-4 right">

  <?php include locate_template('/templates/events/event-sidebar-donate.php'); ?>
  <?php include locate_template('/templates/events/event-sidebar-articles.php'); ?>
  <?php include locate_template('/templates/events/event-sidebar-gallery.php'); ?>

  
  <aside class="sidebar" id="event-sidebar">
    <ul class="xoxo">

      <?php include locate_template('/templates/events/event-sidebar-book.php'); ?>
      <?php if (!get_field('short_sidebar')): ?>
      <?php dynamic_sidebar( 'general-widget-area' ); ?>
      <?php endif; ?>
    </ul>
  </aside>


</div>