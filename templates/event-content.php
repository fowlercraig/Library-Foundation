<?php while (have_posts()) : the_post(); ?>

<div class="event-content">
  <div class="row">
    <div class="desktop-7">
      <?php the_content(); ?>
      <?php include locate_template('templates/event-bios.php'); ?>
    </div>
    <?php get_sidebar('event'); ?>
  </div>
</div>

<?php endwhile; ?>


<?php 

  // include locate_template('templates/event-header.php');
  // include locate_template('templates/event-bar.php');
  // include locate_template('templates/event-content.php');
  // include locate_template('templates/flex-content.php');

?>