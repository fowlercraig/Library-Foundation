<div id="event-bios">
  <div class="row">
    <div class="item bio desktop-12">
      <h3 class="title"><?php echo get_the_title( $p->ID ); ?></h3>
      <?php echo get_the_post_thumbnail( $p->ID, 'whatwefund', array( 'class' => 'img-responsive' ) ); ?> 
      <?php get_the_content( $p->ID ); ?>
    </div>
  </div>
</div>
