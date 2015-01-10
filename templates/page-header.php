<?php 

  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'header-bg', true);
  $thumb_url = $thumb_url_array[0];

?>

<div class="page-header" data-speed="1.25" style="background-image:url(<?php echo $thumb_url; ?>);">
  <div class="row">
    <div class="desktop-12">
      <?php 

      if ( $post->post_parent ) { 

        $anc_reverse = get_post_ancestors( $post->ID );
        $anc = array_reverse($anc_reverse);

        echo '<ul class="parent-links">';

        foreach ( $anc as $ancestor ) {
          $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li>';
          echo $output;
        }

        echo '</ul>';

      } 

      ?>
      <h1 class="page-header-title"><?php the_title(); ?></h1>
    </div>
  </div>
</div>

