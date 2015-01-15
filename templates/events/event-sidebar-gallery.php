<?php $images = get_field('event_photos'); if( $images ): ?>
<div class="event-gallery">

  <?php foreach( $images as $image ): ?>

  <figure itemscope itemtype="http://schema.org/ImageObject">
    <a href="<?php echo $image['url']; ?>" itemprop="contentUrl" data-size="<?php echo $image['width']; ?>x<?php echo $image['height']; ?>">
      <img src="<?php echo $image['sizes']['large']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" itemprop="thumbnail"/>
    </a>
    <figcaption itemprop="caption description">Image caption 1</figcaption>
  </figure>

  <?php endforeach; ?>
  
</div>
<?php endif; ?>
