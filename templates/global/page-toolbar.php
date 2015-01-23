<?php 

  if ( is_page( 'blog' ) || is_category() || is_single() ) {    

    $menuLocation = 594;

  } elseif ( tribe_is_past() || tribe_is_upcoming() && !is_tax() ) { 

    $menuLocation = 41;
    $menuId = 'id="toolbar"';

  } elseif ( is_tax( 'tribe_events_cat' ) ) { 

    $menuLocation = 41;
    $menuId = 'id="toolbar"';

  } else { 

    $menuLocation = 2;

  }

  $menuParameters = array(
    'container'       => false,
    'echo'            => false,
    'items_wrap'      => '%3$s',
    'menu'            => $menuLocation,
    'depth'           => 0,
    'walker'          => new MV_Cleaner_Walker_Nav_Menu(),
  );
?>

<div <?php echo $menuId; ?> class="toolbar">
  <div class="row">
    <div class="desktop-12">
      <ul class="nav sf-menu">
        <?php echo wp_nav_menu( $menuParameters ); ?>
      </ul>
    </div>
  </div>
</div>
