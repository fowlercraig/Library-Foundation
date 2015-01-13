<?php

if( have_rows('pages') ):

    echo '<div id="page-list">';

    while ( have_rows('pages') ) : the_row();

        $post_object = get_sub_field('page_name');
        $post = $post_object;
        setup_postdata( $post ); ?>

        <div <?php post_class('item'); ?>>
          <div class="row">
            <div class="desktop-12">
              <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>" class="button">Learn More</a>
            </div>
          </div>
        </div>

        <?php wp_reset_postdata();

    endwhile;

    echo '</div>';

endif;

?>