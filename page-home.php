<?php Themewrangler::setup_page();get_header(/***Template Name: Home Page */); ?>

<div id="home-slider">
    <div id="home-carousel" class="rsMinW">

    <?php if( have_rows('featured_slider', 'options') ): while ( have_rows('featured_slider', 'options') ) : the_row(); ?>

    <?php
      $post_object = get_sub_field('slide_post');
      $post = $post_object;
      setup_postdata( $post ); 
    ?>

    <div class="slide">
      <div class="meta">
        <div class="row">
          <div class="desktop-12">
            <h2 class="title"><?php the_sub_field('slide_title'); ?></h2>
              <div class="slide_meta">
                <div class="row">
                  <div class="desktop-8">
                    <span class="post-title"><?php the_title(); ?></span>
                  </div>
                <div class="desktop-4 text-right">
                  <a href="<?php the_permalink(); ?>">View Page</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php 

        if ( has_post_thumbnail() ) {

          the_post_thumbnail('header-bg', array('class' => 'rsImg'));

        } else {

          echo '<img src="http://placehold.it/1200x500/C9B6F2" class="rsImg">';

        }

      ?>

    </div>

    <?php wp_reset_postdata();?>

    <?php endwhile; endif; ?>
  </div>
</div>

<?php get_template_part('templates/page', 'content' );?>

<div id="home-upcoming">
  <div class="row">
    <header class="desktop-10">
      <h3>Upcoming Events</h3>
      <p>
        From Member events to ALOUD programs, Library Store On Wheels stops and much much more, stay up on the Library Foundation’s activities.
      </p>
    </header>
    <div class="desktop-2 text-right">
      <select name="selecter_basic" id="selecter_basic" class="selecter_basic">
        <option value="/calendar">January</option>
        <option value="/calendar">February</option>
        <option value="/calendar">March</option>
        <option value="/calendar">April</option>
        <option value="/calendar">May</option>
        <option value="/calendar">June</option>
        <option value="/calendar">July</option>
        <option value="/calendar">August</option>
        <option value="/calendar">September</option>
        <option value="/calendar">October</option>
        <option value="/calendar">November</option>
        <option value="/calendar">December</option>
      </select>
    </div>
    <div id="upcoming-events-carousel" class="desktop-12 contained">

      <?php 
        $temp = $wp_query; 
        $wp_query = null; 
        $wp_query = new WP_Query(); 
        $wp_query->query('showposts=6&post_type=tribe_events'.'&paged='.$paged); 

        while ($wp_query->have_posts()) : $wp_query->the_post(); 
      ?>

      <?php get_template_part('templates/home/events-carousel', 'item' ); ?>

      <?php endwhile; ?>

      <?php 
        $wp_query = null; 
        $wp_query = $temp;  // Reset
      ?>
    
    </div>
  </div>
</div>

<div id="home-featured">
  <div class="slider rsMinW">
    <?php 

      if( have_rows('featured_slider_bottom', 'options') ): 
      while ( have_rows('featured_slider_bottom', 'options') ) : the_row(); 

      $post_object = get_sub_field('slide_post');
      $post = $post_object;
      setup_postdata( $post ); 

      get_template_part('templates/home/slider', 'bottom' );

      wp_reset_postdata();
      endwhile; endif;

    ?>
  </div>
</div>

<?php get_footer(); ?>