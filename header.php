<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php wp_title(' | ', true, 'right'); ?></title>
<meta name="description" content="<?php bloginfo( 'description' ) ?>">
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrapper">

<header id="head" class="gridlock gridlock-fluid">
  <div class="row">
    <?php 
      $menuParameters = array(
        'container'       => false,
        'echo'            => false,
        'items_wrap'      => '%3$s',
        'theme_location'  =>'main-menu',
        'walker' => new MV_Cleaner_Walker_Nav_Menu(),
        'depth'           => 0,
      );
    ?>

    <div id="logo-wrap" class="desktop-1"></div>
    <nav id="main-nav" class="desktop-12">
      <!--<a href="/" id="logo">
        <span class="logo-wrapper">
          <span class="face">
            <span class="swiper-container">

            </span>
          </span>
          <img src="http://placehold.it/500x500" class="invisible img-responsive" />
        </span>
      </a>-->

    <a href="/" id="logo">
      <div id="swiper">
        <div class="swiper-container">
          <div class="swiper-wrapper">
              <div class="swiper-slide" style="background-image:url(/assets/img/logos/logo-general.png)"></div>
              <div id="program-logo" class="swiper-slide"></div>
          </div>
        </div>
      </div>
    </a>
      <?php echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' ); ?>
      <a href="#" class="search"><i class="ss-gizmo ss-icon">search</i></a>
      <a href="<?php echo get_the_permalink(289); ?>" class="button right" id="become-member-btn">Become a Member</a>
    </nav>
    <?php // wp_nav_menu( array( 'theme_location'=>'socl-menu','items_wrap'=> '%3$s','container_class'=>'menu mobile-hide tablet-hide text-right desktop-4','walker' => new MV_Cleaner_Walker_Nav_Menu() ) ); ?>

  </div>
</header>

<section id="content" class="gridlock"><div>
<div <?php body_class(); ?>>

