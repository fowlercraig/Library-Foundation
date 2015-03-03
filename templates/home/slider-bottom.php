<?php 

  if ( has_post_thumbnail() ) {

    $featuredImage = get_the_post_thumbnail($page->ID,'header-bg', array('class' => 'rsImg'));

  } else {

    $featuredImage = '<img src="http://placehold.it/1200x500/C9B6F2" class="rsImg">';

  }

?>

<div class="slide">
  <div class="meta">
    <div class="row">
      <div class="desktop-10 centered">
          
          <h2 class="title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
        
      </div>
    </div>
  </div>
  <?php echo $featuredImage; ?>
</div>