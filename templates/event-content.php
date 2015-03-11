<?php while (have_posts()) : the_post(); ?>

<div class="event-content">
  <div class="row">
    <div class="desktop-7">
      <?php // include locate_template('templates/event-tickets.php'); ?>
      <?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
      <div class="content"><?php the_content(); ?></div>
      <?php include locate_template('templates/event-bios.php'); ?>
      <?php include locate_template('templates/events/event-bios-simple.php'); ?>
    </div>
    <?php get_sidebar('event'); ?>
  </div>
</div>

<?php endwhile; ?>
