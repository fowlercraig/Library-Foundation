<?php

  $eventCat = get_sub_field('event_category_slug');

  $args = array(
    'post_type' => 'tribe_events',
    'posts_per_page'=> -1,
    'tax_query' => array(
      array(
        'taxonomy' => 'tribe_events_cat',
        'field'    => 'slug',
        'terms'    => $eventCat,
      ),
      array(
        'taxonomy' => 'tribe_events_cat',
        'field'    => 'slug',
        'terms'    => array('hidden'),
        'operator' => 'NOT IN'
      ),
    ),

    'eventDisplay' => 'upcoming',
  );

  $temp = $wp_query; 
  $wp_query = null; 
  $wp_query = new WP_Query(); 
  $wp_query->query($args); 

  $old_args = array(
    'post_type' => 'tribe_events',
    'posts_per_page'=> -1,
    'tax_query' => array(
      array(
        'taxonomy' => 'tribe_events_cat',
        'field'    => 'slug',
        'terms'    => $eventCat,
      ),
    ),
    'eventDisplay' => 'past',
  );

  $old_temp = $old_wp_query; 
  $old_wp_query = null; 
  $old_wp_query = new WP_Query(); 
  $old_wp_query->query($old_args); 

  $ul_args = array(
    'post_type' => 'tribe_events',
    'posts_per_page'=> -1,
    'tax_query' => array(
      array(
        'taxonomy' => 'tribe_events_cat',
        'field'    => 'slug',
        'terms'    => $eventCat,
      ),
      array(
        'taxonomy' => 'tribe_events_cat',
        'field'    => 'slug',
        'terms'    => array('hidden'),
        //'operator' => 'NOT IN'
      ),
    ),
  );

  $ul_temp = $ul_wp_query; 
  $ul_wp_query = null; 
  $ul_wp_query = new WP_Query(); 
  $ul_wp_query->query($ul_args); 

?>

<div id="calendar-module">
  <div class="tabbed">
    <menu class="tabber-menu">
      <div class="row">
        <div class="desktop-12">
          <a href="#tab-1" class="button tabber-handle">Current Calendar</a>
          <a href="#tab-2" class="button tabber-handle">Past Events</a>
          <a href="#tab-3" class="button tabber-handle">Member Events</a>
          <a href="#" class="button ext">View Full Event Calendar</a>
        </div>
      </div>
    </menu>
    <div class="tabber-tab tribe-events-list" id="tab-1">

      <?php $counter = 1; while ($wp_query->have_posts()) : $wp_query->the_post();?>

      <?php 
        $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'header-bg', true);
        $thumb_url = $thumb_url_array[0];
        $event_bg  = $thumb_url;
      ?>

      <div id="post-<?php the_ID() ?>" class="<?php tribe_events_event_classes() ?>">
        <div class="row">
          <?php tribe_get_template_part( 'list/single', 'event' ) ?>
        </div>
        <div class="bg" style="background-image:url(<?php echo $event_bg; ?>);"></div>
      </div>
      <?php $counter++; endwhile; ?>
      <?php $wp_query = null; $wp_query = $temp; wp_reset_postdata(); ?>

    </div>
    <div class="tabber-tab tribe-events-list" id="tab-2">

      <?php $counter = 1; while ($old_wp_query->have_posts()) : $old_wp_query->the_post();?>

      <?php 
        $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'header-bg', true);
        $thumb_url = $thumb_url_array[0];
        $event_bg  = $thumb_url;
      ?>
      
      <div id="post-<?php the_ID() ?>" class="<?php tribe_events_event_classes() ?>">
        <div class="row">
          <?php tribe_get_template_part( 'list/single', 'event' ) ?>
        </div>
        <div class="bg" style="background-image:url(<?php echo $event_bg; ?>);"></div>
      </div>
      <?php $counter++; endwhile; ?>
      <?php $old_wp_query = null; $old_wp_query = $old_temp; wp_reset_postdata(); ?>

    </div>

    <div class="tabber-tab tribe-events-list" id="tab-3">

     
          <div id="first">
             <div class="row">
        <div class="desktop-4 tablet-4 mobile-3 centered">
            <form action="" method="post">
              <input type="password" id="loginpassword" placeholder="Password" />
              <input type="button" id="login" value="Unlock" />
            </form>
            </div>
      </div>
          </div>

          <div id="second" style="display:none">
            <?php $counter = 1; while ($ul_wp_query->have_posts()) : $ul_wp_query->the_post();?>

            <?php 
              $thumb_id = get_post_thumbnail_id();
              $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'header-bg', true);
              $thumb_url = $thumb_url_array[0];
              $event_bg  = $thumb_url;
            ?>
            
            <div id="post-<?php the_ID() ?>" class="<?php tribe_events_event_classes() ?>">
              <div class="row">
                <?php tribe_get_template_part( 'list/single', 'event' ) ?>
              </div>
              <div class="bg" style="background-image:url(<?php echo $event_bg; ?>);"></div>
            </div>
            <?php $counter++; endwhile; ?>
            <?php $ul_wp_query = null; $ul_wp_query = $ul_temp; wp_reset_postdata(); ?>
          </div>
        

    </div>

  </div>
</div>


<script>
$(document).ready(function(){
  // on click Sign In Button checks that username =='admin' and password == 'password'
  $("#login").click(function(){
  if( $("#loginpassword").val()=='password') {
          $("#first").hide();
          $("#second").show();
      }
  else {
      alert("Please try again");
  }

  // $("#logout").click(function() {
  // $("form")[0].reset();
  // $("#first").show();
  // $("#second").hide();
});

});
</script>