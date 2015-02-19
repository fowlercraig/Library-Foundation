<?php if( have_rows('footer_modules', 'option') ): ?>

<div id="footer-modules" class="gridlock">
  <div class="row">
    <?php while ( have_rows('footer_modules', 'option') ) : the_row(); ?>

    <?php
      $post_object = get_sub_field('page_link');
      $post = $post_object;
      setup_postdata( $post ); 
    ?>

    <div class="desktop-6 module <?php echo $post->post_name;?>">
      <div class="row">
        <div class="desktop-6"><?php the_post_thumbnail( 'footer-module-image', array( 'class' => 'img-responsive alignleft' ) ); ?></div>
        <div class="desktop-6 padded">
          <h3 class="footer-module-title"><?php the_title(); ?></h3>
          <p><?php the_sub_field('description'); ?></p>
          <a href="<?php the_permalink(); ?>" class="button">Learn More</a>
        </div>
      </div>
    </div>

    <?php wp_reset_postdata(); ?>
    <?php endwhile; ?>
  </div>
</div>

<?php endif; ?>