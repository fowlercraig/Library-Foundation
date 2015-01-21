<?php
/**
* List View Single Event
* This file contains one event in the list view
*
* Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/single-event.php
*
* @package TribeEventsCalendar
*
*/

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<?php

	$venue_details = array();

	if ( $venue_name = tribe_get_meta( 'tribe_event_venue_name' ) ) {
		$venue_details[] = $venue_name;
	}

	if ( $venue_address = tribe_get_meta( 'tribe_event_venue_address' ) ) {
		$venue_details[] = $venue_address;
	}
	$has_venue_address = ( $venue_address ) ? ' location' : '';

	$organizer = tribe_get_organizer();

?>

<div class="desktop-12 tablet-6 mobile-3">
	<?php 
		$terms = wp_get_post_terms(get_the_ID(), 'tribe_events_cat');
		$count = count($terms);
		if ( $count > 0 ){
			foreach ( $terms as $term ) {
				echo '<a href="'. get_term_link($term->slug, 'tribe_events_cat') .'" class="cat_' . $term->slug . '">' . $term->name . '</a>';
			}
		}
	?> 
	<?php echo tribe_events_event_schedule_details() ?>
</div>

<div class="desktop-6 tablet-6 mobile-3">
	<h3 class="title"><a href="<?php echo tribe_get_event_link() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h3>
	<span class="date upper"><?php the_field('event_subtitle'); ?></span>
</div>

<div class="desktop-6 tablet-6 mobile-3 text-right">
	<a href="<?php echo tribe_get_event_link() ?>" class="button">RSVP Now</a>
</div>

<?php do_action( 'tribe_events_after_the_content' ) ?>
