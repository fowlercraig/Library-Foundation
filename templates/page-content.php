<?php 

  // Dynamically Grab the page width depending on template.
  $pageWidth = 'desktop-12';

?>

<?php while (have_posts()) : the_post(); ?>
<div class="row">
  <div class="<?php echo $pageWidth; ?>">
    <div class="page-content"><?php the_content(); ?></div>
  </div>
</div>
<?php endwhile; ?>
