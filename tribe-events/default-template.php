<?php
/**
* Default Events Template
* This file is the basic wrapper template for all the views if 'Default Events Template'
* is selected in Events -> Settings -> Template -> Events Template.
*
* Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
*
* @package TribeEventsCalendar
*
*/

if ( ! defined( 'ABSPATH' ) ) {
die( '-1' );
}

Themewrangler::setup_page(); get_header(); ?>

<div class="row">
<div class="desktop-12">

<div id="tribe-events-pg-template">
<?php tribe_events_before_html(); ?>
<?php tribe_get_view(); ?>
<?php tribe_events_after_html(); ?>

</div>

</div>
</div>

<?php get_footer(); ?>