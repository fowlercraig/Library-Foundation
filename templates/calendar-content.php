<?php 
  
  $queried_object = get_queried_object(); 
  $taxonomy = $queried_object->taxonomy;
  $term_id = $queried_object->term_id;  

  // Dynamically Grab the page width depending on template.

  if ( get_field('include_aside', $taxonomy . '_' . $term_id)) {
  
    $pageWidth = 'sizer-item desktop-8 tablet-4 mobile-3';

  } else {

    $pageWidth = 'sizer-item desktop-12 tablet-4 mobile-3';

  }

?>

<div class="page-content">
  <div class="row">
    <?php if ( is_tax() ) { ?>
      <div class="<?php echo $pageWidth ;?>"><?php echo term_description(); ?></div>
      <?php if ( get_field('include_aside',$taxonomy . '_' . $term_id)) { ?>
      <aside class="aside desktop-4 tablet-2 mobile-3 right"><?php the_field('aside',$taxonomy . '_' . $term_id); ?></aside>
      <?php } ?>
    <?php } else { ?>
      <div class="<?php echo $pageWidth ;?>"></div>
      <?php if ( get_field('include_aside',$taxonomy . '_' . $term_id)) { ?>
      <aside class="aside desktop-4 tablet-2 mobile-3 right"><?php the_field('aside',$taxonomy . '_' . $term_id); ?></aside>
      <?php } ?>
    <?php } ?>
  </div>
</div>
