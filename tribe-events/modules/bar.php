<?php
/**
 * Events Navigation Bar Module Template
 * Renders our events navigation bar used across our views
 *
 * $filters and $views variables are loaded in and coming from
 * the show funcion in: lib/tribe-events-bar.class.php
 *
 * @package TribeEventsCalendar
 *
 */
?>

<?php

$filters = tribe_events_get_filters();
$views   = tribe_events_get_views();

global $wp;
$current_url = esc_url( add_query_arg( $wp->query_string, '', home_url( $wp->request ) ) );

?>

<?php if ( is_tax() ){ ?>

<div id="event-nav-bar">
	<div class="row">
		<?php wp_nav_menu( array( 'menu_class'=>'sf-menu','walker' => new MV_Cleaner_Walker_Nav_Menu() ) ); ?>
	</div>
</div>

<?php } else { ?>

<div id="event-nav-bar">
	<div class="row">
		<?php wp_nav_menu( array( 'menu_class'=>'sf-menu','walker' => new MV_Cleaner_Walker_Nav_Menu() ) ); ?>
	</div>
</div>

<?php } ?>


<?php do_action( 'tribe_events_bar_before_template' ) ?>

<div id="event-bar" class="event-page">
	<div class="row">
	  <form id="tribe-bar-form" class="tribe-clearfix" name="tribe-bar-form" method="post" action="<?php echo esc_attr( $current_url ); ?>">
	    <?php  //Views ?>
	    <?php if ( count( $views ) > 1 ) { ?>
	      <div id="tribe-bar-views">
	        <div class="tribe-bar-views-inner tribe-clearfix">
	          <h3 class="tribe-events-visuallyhidden"><?php _e( 'Event Views Navigation', 'tribe-events-calendar' ) ?></h3>
	          <label><?php _e( 'View As', 'tribe-events-calendar' ); ?></label>
	          <select class="tribe-bar-views-select tribe-no-param" name="tribe-bar-view">
	            <?php foreach ( $views as $view ) : ?>
	              <option <?php echo tribe_is_view( $view['displaying'] ) ? 'selected' : 'tribe-inactive' ?> value="<?php echo $view['url'] ?>" data-view="<?php echo $view['displaying'] ?>">
	                <?php echo $view['anchor'] ?>
	              </option>
	            <?php endforeach; ?>
	          </select>
	        </div>
	      </div>
	    <?php } // if ( count( $views ) > 1 ) ?>
	    <?php if ( ! empty( $filters ) ) { ?>
	      <div class="tribe-bar-filters desktop-4 tablet-6 mobile-3 right">
	        <div class="tribe-bar-filters-inner tribe-clearfix row">
	          <?php foreach ( $filters as $filter ) : ?>
	            <div class="desktop-4 <?php echo esc_attr( $filter['name'] ) ?>-filter">
	              <!--<label class="label-<?php echo esc_attr( $filter['name'] ) ?>" for="<?php echo esc_attr( $filter['name'] ) ?>"><?php echo $filter['caption'] ?></label>-->
	              <?php echo $filter['html'] ?>
	            </div>
	          <?php endforeach; ?>
	          <div class="desktop-4 tribe-bar-submit text-right">
	            <input class="tribe-events-button tribe-no-param button" type="submit" name="submit-bar" value="<?php _e( 'Find Events', 'tribe-events-calendar' ) ?>" />
	          </div>
	        </div>
	      </div>
	    <?php } // if ( !empty( $filters ) ) ?>
	  </form>
	</div>
</div>

<?php do_action( 'tribe_events_bar_after_template' ) ?>
