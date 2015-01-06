<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$event_id = get_the_ID();

?>

<div class="row tribe-events-single vevent hentry " id="tribe-events-content">

	<header class="desktop-8">
		<?php the_title( '<h1 class="title">', '</h1>' ); ?>
		<?php echo tribe_events_event_schedule_details( $event_id, '<h4>', '</h4>' ); ?>
		<?php if ( tribe_get_cost() ) : ?>
			<span class="tribe-events-divider">|</span>
			<span class="tribe-events-cost"><?php echo tribe_get_cost( null, true ) ?></span>
		<?php endif; ?>
	</header>

	<hr>

	<div class="desktop-8">
	<?php while ( have_posts() ) :  the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php echo tribe_event_featured_image( $event_id, 'full', false ); ?>
			<?php the_content(); ?>
			<?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>
		</div>
	<?php endwhile; ?>

	</div>

	<div class="desktop-4">
	<?php // Not sure what to do with this yet ?>
		<!--
		<h3 class="tribe-events-visuallyhidden"><?php _e( 'Event Navigation', 'tribe-events-calendar' ) ?></h3>
		<ul class="tribe-events-sub-nav">
			<li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '<span>&laquo;</span> %title%' ) ?></li>
			<li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title% <span>&raquo;</span>' ) ?></li>
		</ul>
		-->
	</div>

</div>