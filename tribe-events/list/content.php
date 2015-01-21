<?php
/**
 * List View Content Template
 * The content template for the list view. This template is also used for
 * the response that is returned on list view ajax requests.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/content.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<div id="tribe-events-content" class="tribe-events-list">

	<!-- List Title -->
	<?php do_action( 'tribe_events_before_the_title' ); ?>
	<div class="header">
		<div class="row">
			<div class="desktop-8">
				<span class="tribe-events-page-title"><?php echo tribe_get_events_title() ?></span>
			</div>
		</div>
	</div>
	<?php do_action( 'tribe_events_after_the_title' ); ?>

	<?php echo 'Term Description: ' . term_description('15','tribe_events_cat'); ?>

	<!-- Notices -->
	<?php tribe_events_the_notices() ?>


	<!-- Events Loop -->
	<?php if ( have_posts() ) : ?>
		<?php do_action( 'tribe_events_before_loop' ); ?>
		<?php tribe_get_template_part( 'list/loop' ) ?>
		<?php do_action( 'tribe_events_after_loop' ); ?>
	<?php endif; ?>

	<!-- List Footer -->
	<?php do_action( 'tribe_events_before_footer' ); ?>
	<div id="tribe-events-footer">

		<!-- Footer Navigation -->
		<?php do_action( 'tribe_events_before_footer_nav' ); ?>
		<?php tribe_get_template_part( 'list/nav', 'footer' ); ?>
		<?php do_action( 'tribe_events_after_footer_nav' ); ?>

	</div>
	<!-- #tribe-events-footer -->
	<?php //do_action( 'tribe_events_after_footer' ) ?>

</div><!-- #tribe-events-content -->
