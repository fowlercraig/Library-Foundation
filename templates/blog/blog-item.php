<article <?php post_class(); ?>
  <?php the_post_thumbnail( 'large', array( 'class' => 'img-responsive' ) ); ?>
  <header><h2 class="title"><a href="#"><?php the_title(); ?></a></h2></header>
  <?php the_excerpt(); ?>
  <a href="<?php the_permalink(); ?>" class="button">Learn More</a>
</article>
