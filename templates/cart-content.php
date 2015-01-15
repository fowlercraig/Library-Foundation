<?php while (have_posts()) : the_post(); ?>

<div class="cart-content">
  <div class="row">

    <div class="desktop-12"><?php the_content(); ?></div>

  </div>
</div>

<?php endwhile; ?>
