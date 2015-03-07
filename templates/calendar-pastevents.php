<?php if( have_rows('spotlight_carousel', 'options') ): ?>

<div class="row">
  <div class="desktop-12">
    <div id="home-featured">
      <div class="slider rsMinW">
        <?php 

          while ( have_rows('spotlight_carousel', 'options') ) : the_row(); 

          $post_object = get_sub_field('slide_post');
          $post = $post_object;
          setup_postdata( $post ); 

          get_template_part('templates/home/slider', 'bottom' );

          wp_reset_postdata();
          endwhile;

        ?>
      </div>
    </div>
  </div>
</div>

<?php endif; ?>