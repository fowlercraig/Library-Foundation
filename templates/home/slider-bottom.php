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
      <div class="desktop-12">
        <h2 class="title"><?php the_title(); ?></h2>
        <a class="button" href="<?php the_permalink();?>">View More</a>
        <div class="slide_meta">
          <a class="link" href="/calendar/category/special-projects/">More Special Projects</a>
        </div>
      </div>
    </div>
  </div>
  <?php echo $featuredImage; ?>
</div>