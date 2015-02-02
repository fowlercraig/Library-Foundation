<?php Themewrangler::setup_page();get_header(/***Template Name: Home Page */); ?>

<div id="home-slider">
  <div class="row">
    <div id="home-carousel" class="rsMinW desktop-12">
      <div class="slide"><img src="http://placehold.it/1200x500/eeeeee" class="rsImg"></div>
      <div class="slide"><img src="http://placehold.it/1200x500/blue" class="rsImg"></div>
      <div class="slide"><img src="http://placehold.it/1200x500/green" class="rsImg"></div>
      <div class="slide"><img src="http://placehold.it/1200x500/orange" class="rsImg"></div>
    </div>
  </div>
</div>

<?php get_template_part('templates/page', 'content' );?>

<div id="home-upcoming">
  <div class="row">
    <div class="desktop-10"><h3>Upcoming Events</h3></div>
    <div class="desktop-2"><a class="button" href="#">September Events</a></div>
    <div id="upcoming-events-carousel" class="desktop-12 contained">
      <?php get_template_part('templates/home/events-carousel', 'item' ); ?>
      <?php get_template_part('templates/home/events-carousel', 'item' ); ?>
      <?php get_template_part('templates/home/events-carousel', 'item' ); ?>
      <?php get_template_part('templates/home/events-carousel', 'item' ); ?>
      <?php get_template_part('templates/home/events-carousel', 'item' ); ?>
      <?php get_template_part('templates/home/events-carousel', 'item' ); ?>
      <?php get_template_part('templates/home/events-carousel', 'item' ); ?>
      <?php get_template_part('templates/home/events-carousel', 'item' ); ?>
      <?php get_template_part('templates/home/events-carousel', 'item' ); ?>
      <?php get_template_part('templates/home/events-carousel', 'item' ); ?>
      <?php get_template_part('templates/home/events-carousel', 'item' ); ?>
      <?php get_template_part('templates/home/events-carousel', 'item' ); ?>
    </div>
  </div>
</div>

<div id="home-featured">
  <div class="row">
    <div class="royalslider rsMinW">
      <div class="slide"><img src="http://placehold.it/1200x700" class="rsImg"></div>
      <div class="slide"><img src="http://placehold.it/1200x700" class="rsImg"></div>
      <div class="slide"><img src="http://placehold.it/1200x700" class="rsImg"></div>
    </div>
  </div>
</div>

<?php get_footer(); ?>