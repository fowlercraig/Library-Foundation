<div class="row">
  <div id="whatwefund-filters" class="button-group desktop-12 text-center">
    <button class="button" data-filter="*">show all</button>
    <button class="button" data-filter=".helping">Helping</button>
    <button class="button" data-filter=".engaging">Engaging</button>
    <button class="button" data-filter=".investing">Investing</button>
  </div>
</div>

<div id="whatwefund-grid" class="row">

<?php 
  
  if( have_rows('wwf_grid') ):
  while ( have_rows('wwf_grid') ) : the_row();

  $post_object = get_sub_field('child_page');
  $post = $post_object;
  setup_postdata( $post );

  // Item Settings

  $divWidth = get_sub_field('child_width');
  $field    = get_sub_field_object('child_category');
  $value    = get_sub_field('child_category');
  $label    = $field['choices'][ $value ];

  // Images

  if(get_sub_field('child_width') == "desktop-4")  { $img = 'http://placehold.it/700x550/666666/666666'; }
  if(get_sub_field('child_width') == "desktop-12") { $img = 'http://placehold.it/1400x550/666666/666666'; }
  if(get_sub_field('child_width') == "desktop-8")  { $img = 'http://placehold.it/1450x550/666666/666666'; }

  // Featured

  if( get_sub_field('child_feature') ) {
    $isFeatured = ' featured';
  } else {
    $isFeatured = '';
  }
  
?>

<div class="item <?php echo $divWidth; ?> tablet-3 mobile-3 <?php echo $value; ?><?php echo $isFeatured; ?>">

  <?php // the_post_thumbnail( 'whatwefund', array( 'class' => 'img-responsive' ) ); ?>
  <img src="<?php echo $img; ?>" class="thumbnail img-responsive">

  <div class="meta overlay">
    <div class="cat"><a href=".<?php echo $value; ?>"><?php echo $label; ?></a></div>
    <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <a href="<?php the_permalink(); ?>" class="button">Learn More</a>
  </div>

</div>

<?php wp_reset_postdata(); endwhile; endif; ?>

</div>