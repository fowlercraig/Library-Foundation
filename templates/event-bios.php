<?php $posts = get_field('people'); if( $posts ): ?>

  <hr>

  <div id="event-bios">
  <div class="row">

<?php foreach( $posts as $p ): ?>

<?php

  $my_postid = $p;//This is page id or post id
  $content_post = get_post($my_postid);
  $content = $content_post->post_content;
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);

  if ( get_field('featured_speakers') ) {

    $bioWidth = 'desktop-6';

  } else {

    $bioWidth = 'desktop-12';

  }
  
?>


    <div class="item bio <?php echo $bioWidth; ?>">
      <h3 class="title"><?php echo get_the_title( $p->ID ); ?></h3>
      <?php echo get_the_post_thumbnail( $p->ID, 'event-bio', array( 'class' => 'img-responsive' ) ); ?> 
      <p><?php echo $content; ?></p>
    </div>


<?php endforeach; ?>

  </div>
</div>

<?php endif; ?>
