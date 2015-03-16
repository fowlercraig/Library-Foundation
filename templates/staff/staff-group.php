

<?php 

$groupTitle = get_sub_field('group_title');
$groupTitle_clean = get_sub_field('group_title');
$groupTitle_clean = preg_replace('/\s*/', '', $groupTitle_clean);
// convert the string to all lowercase
$groupTitle_clean = strtolower($groupTitle_clean);

?>

<?php if( have_rows('staff_members') ): while ( have_rows('staff_members') ) : the_row(); ?>

<?php 
  $image = get_sub_field('staff_photo');

  if( !empty($image) ): 
  $url = $image['url'];
  $title = $image['title'];
  $alt = $image['alt'];
  $caption = $image['caption'];

  $size = 'homepage-thumb';
  $thumb = $image['sizes'][ $size ];
  $width = $image['sizes'][ $size . '-width' ];
  $height = $image['sizes'][ $size . '-height' ];
  endif;
?>

<div class="staff-member desktop-4 tablet-3 mobile-3 sizer-item <?php echo $groupTitle_clean; ?>">
  <div class="thumb">
    <div class="meta"><span class="cat_<?php echo $groupTitle_clean; ?>"><?php echo $groupTitle; ?></span></div>
    <img class="img-responsive" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
  </div>
  <div class="info"><?php the_sub_field('staff_info'); ?></div>
</div>
<?php endwhile; else : endif;?>
