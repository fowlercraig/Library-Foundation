<?php if ( (get_post_type() == 'tribe_events' && tribe_is_upcoming()) || tribe_is_month() || tribe_is_by_date() ): ?>
  <?php if (!is_tax( 'tribe_events_cat' )): ?>
  <?php if( have_rows('spotlight_carousel', 'option') ): ?>

  <div id="home-featured">
    <div class="row">
      <header class="desktop-10 centered">
        <hr>
        <a href="#spotlight-events">
          <i class="ss-icon ss-gizmo home-arrow left ">down</i>
          <h3 id="spotlight-events"><a href="/calendar">Spotlight<span></a></h3>
        </a>
      </header>
      <div class="desktop-12">
        <div class="slider rsMinW">
          <?php

          while ( have_rows('spotlight_carousel', 'option') ) : the_row();

          // $thingie = get_sub_field('slide_post');
          // $post = $thingie;
          // setup_postdata( $post );

          $post_object = get_sub_field('slide_post');

          if( $post_object ):

            $post = $post_object;
          setup_postdata($post);

          get_template_part('templates/home/slider', 'bottom' );

          wp_reset_postdata();
          endif;
          endwhile;

          ?>
        </div>
      </div>
    </div>
  </div>

  <hr>

<?php endif; ?>
<?php endif; ?>
<?php endif; ?>

<?php if ( (get_post_type() == 'tribe_events' && tribe_is_upcoming()) || tribe_is_month() || tribe_is_by_date() ): ?>
  <?php include locate_template('templates/calendar-mediagraphic.php'); ?>
<?php endif; ?>

<?php include locate_template('/templates/logotogglin.php' );?>

</div>
</div></section><!--Content-->

<?php get_template_part('templates/footer', 'modules' ); ?>

<footer id="foot" class="gridlock">
  <div class="row">
    <div class="desktop-3 tablet-3 mobile-3"><a class="logo" href="/">The Library Foundation<br>of Los Angeles</a></div>
    <div class="desktop-3 tablet-3 mobile-3"><?php the_field('address', 'option'); ?></div>
    <div class="desktop-3 tablet-3 mobile-3"><?php the_field('phone_&_email', 'option'); ?></div>
    <div class="desktop-3 tablet-3 mobile-3"><?php the_field('social_links', 'option'); ?></div>
    <hr style="height:1px; background:#ddd;" class="desktop-12 tablet-6 mobile-3">
    <div class="desktop-12">
      © 2015 Library Foundation of Los Angeles |
      <a href="<?php echo get_permalink(4738); ?>">Contact Us</a>
    </div>
  </div>
</footer><!--Footer-->

</div><!-- Wrapper -->

<nav class="shifter-navigation">
  <div class="main-nav"><?php echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' ); ?></div>
</nav>

<?php the_widget( 'WP_Widget_Text', 'text', 3 ); ?>

<?php wp_footer(); ?>
<?php include locate_template('/lib/photoswipe.php' );?>
<?php include locate_template('/templates/search-footer.php' );?>


</body>
</html>