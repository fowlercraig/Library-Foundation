<div class="tabbed">
  <menu class="tabber-menu">
    <a href="#tab-1" class="tabber-handle">Tier 1</a>
    <a href="#tab-2" class="tabber-handle">Tier 2</a>
  </menu>
  <div class="tabber-tab" id="tab-1"></div>
  <div class="tabber-tab" id="tab-2"></div>
</div>

<script>

  $(document).ready(function(){
    // Create the tab wrapper
    $('.tribe-events-tickets .ticket').hide();
    
  <?php 
    
    // First Tab
    while ( have_rows('related_ticket_groups') ) : the_row();
    $post_object = get_sub_field('tickets');
    if( $post_object ): 
    $post = $post_object;
    setup_postdata( $post ); 

    $title = get_the_title($post);
    $title = preg_replace('/\s*/', '', $title);
    // convert the string to all lowercase
    $title = strtolower($title);

  ?>
  $(".ticket_<?php echo $title; ?>").prependTo("#tab-1").show(); 
  <?php wp_reset_postdata(); endif; ?>
    
  <?php endwhile; ?>

  <?php 
    
    // Second Tab
    while ( have_rows('related_ticket_2') ) : the_row();
    $post_object = get_sub_field('tickets');
    if( $post_object ): 
    $post = $post_object;
    setup_postdata( $post ); 

    $title = get_the_title($post);
    $title = preg_replace('/\s*/', '', $title);
    // convert the string to all lowercase
    $title = strtolower($title);

  ?>
  $(".ticket_<?php echo $title; ?>").prependTo("#tab-2").show(); 
  <?php wp_reset_postdata(); endif; ?>
    
  <?php endwhile; ?>


});

</script>

