<?php if( have_rows('more-people') ): ?>
<div id="event-bios-simple" class="row">
<?php while ( have_rows('more-people') ) : the_row(); $image = get_sub_field('other_photo'); ?>

<div class="item bio desktop-12">
  <div class="row">
    <div class="thumbnail desktop-3"><img class="rounded img-responsive" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
    <div class="meta desktop-9">
      <h3 class="title"><?php the_sub_field('other_name'); ?></h3>
      <?php the_sub_field('other_bio'); ?>
    </div>
  </div>
</div>

<?php endwhile; ?>
</div>
<?php endif;?>