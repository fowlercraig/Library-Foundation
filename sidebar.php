<div id="sidebar-wrapper" class="desktop-4 right">

  <aside class="sidebar" id="event-sidebar">
    <?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
    <ul class="xoxo">

      <?php dynamic_sidebar( 'primary-widget-area' ); ?>

    </ul>
    <?php endif; ?>
  </aside>

</div>