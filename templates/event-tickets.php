<?php if( have_rows('related_ticket_groups') ): ?>

<div id="additional-tickets" class="tabbed">

<menu class="tabber-menu">
<a href="#tab-1" class="tabber-handle">Tickets</a>
<?php $counter = 2; while ( have_rows('related_ticket_groups') ) : the_row(); ?>
<a href="#tab-<?php echo $counter; ?>" class="tabber-handle"><?php the_sub_field('tab_name'); ?></a>
<?php $counter++; endwhile;?>
</menu>

<div class="tabber-tab" id="tab-1">
  <?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>
</div>

<?php $counter = 2; while ( have_rows('related_ticket_groups') ) : the_row(); ?>
<div class="tabber-tab" id="tab-<?php echo $counter; ?>">

  <?php

$post_object = get_sub_field('event');

if( $post_object ): 

  // override $post
  $post = $post_object;
  setup_postdata( $post ); 

  ?>
    <div>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <span>Post Object Custom Field: <?php the_field('field_name'); ?></span>
    </div>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>

</div>
<?php $counter++; endwhile;?>

</div>

<?php endif; ?>