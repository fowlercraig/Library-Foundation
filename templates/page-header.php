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

      if ( get_field('page_subtitle') ){ $hasSub = 'has-sub'; }
      
      if (is_category()){
        $pageTitle = get_the_title(442);
      } else {
        $pageTitle = get_the_title();
      }

      ?>

      <h1 class="page-header-title <?php echo $hasSub; ?>"><?php echo $pageTitle; ?></h1>
      <h3 class="page-header-subtitle"><?php the_field('page_subtitle'); ?></h3>
    </div>
  </div>
</div>

