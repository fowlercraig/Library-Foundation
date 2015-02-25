<div id="home-featured">
  <div class="slider rsMinW">
    <?php 

      if( have_rows('featured_slider_bottom', 'options') ): 
      while ( have_rows('featured_slider_bottom', 'options') ) : the_row(); 

      $post_object = get_sub_field('slide_post');
      $post = $post_object;
      setup_postdata( $post ); 

      get_template_part('templates/home/slider', 'bottom' );

      wp_reset_postdata();
      endwhile; endif;

    ?>
  </div>
</div>