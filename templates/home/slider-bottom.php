<?php 

  if ( has_post_thumbnail() ) {

    $featuredImage = get_the_post_thumbnail($page->ID,'header-bg', array('class' => 'rsImg'));

  } else {

    $featuredImage = '<img src="http://placehold.it/1200x500/C9B6F2" class="rsImg">';

  }

?>

<div class="slide">
  <div class="content">
    <div class="meta">
      <div class="row">
        <div class="desktop-10 centered">
          <h2 class="title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
          <a class="link right" href="<?php the_permalink();?>">View Event</a>
        </div>
      </div>
    </div>
    <div class="sub-meta">
      <div class="row">
        <div class="desktop-10 centered">
          <span class="sub_title_second"><?php the_field('event_title'); ?></span> | 
          <span class="sub_title_second"><?php the_field('event_subtitle'); ?></span>
        </div>
      </div>
    </div>
  </div>
  <?php echo $featuredImage; ?>
</div>