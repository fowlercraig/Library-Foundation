<?php     
  $args = array(
    'post_type' => 'tribe_events',
  );

  $temp = $wp_query; 
  $wp_query = null; 
  $wp_query = new WP_Query(); 
  $wp_query->query($args); 
?>

<div id="calendar-header">
  <div class="slider rsMinW" style="height:540px">
    <?php while ($wp_query->have_posts()) : $wp_query->the_post();  ?>

    <?php
      $event_date = tribe_get_start_date($pageID, false, "l, M j, Y | g:ia");
      $venue_details = array();
      $terms = wp_get_post_terms(get_the_ID(), 'tribe_events_cat');
      $count = count($terms);
      if ( $count > 0 ){
        foreach ( $terms as $term ) {
          $cats = '<a href="'. get_term_link($term->slug, 'tribe_events_cat') .'" class="cat_' . $term->slug . '">' . $term->name . '</a>';
        }
      }
    ?>

    <div class="slide calendar">
      <div class="meta overlay bottom">
        <div class="row">
          <div class="desktop-1"><a href="#" class="button prev"><i class="ss-icon ss-gizmo">navigateleft</i></a></div>
          <div class="desktop-10">
            <div class="desc">
              <span class="event-header-cats"><?php echo $cats; ?></span>
              <span class="event-header-date"><?php echo $event_date; ?></span>
              <span class="event-header-title"><?php the_title(); ?></span>
            </div>
          </div>
          <div class="desktop-1"><a href="#" class="button next"><i class="ss-icon ss-gizmo">navigateright</i></a></div>
        </div>
      </div>
      <img src="http://i.imgur.com/BJbGx4K.jpg" class="rsImg" />
    </div>

    <?php endwhile; ?>
    <?php $wp_query = null; $wp_query = $temp; ?>
  </div>
</div>