<?php $var1   = $_GET['category']; ?>
<?php $search = $_GET['search']; ?>

<?php

  if (isset($_GET['category'])) {

    $param = 'category_name='.$var1;

  } elseif (isset($_GET['search'])) {

    $param = 's='.$search;

  }

?>

<?php
  $temp = $wp_query;
  $wp_query = null;
  $wp_query = new WP_Query();
  $wp_query->query('showposts=-1&post_type=archive&' . $param . '&paged='.$paged);
  $format = '';
?>

<div id="sized" class="newest row">

<?php if ( have_posts() ) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

  <?php

    //$var2 = $_GET['var2'];



    if ( in_category( 'aloud' )) {

      $category = 'aloud';
      $catlink  = 'category?=aloud';

    } elseif ( in_category( 'young-literati' )) {

      $category = 'young literari';
      $catlink  = 'category?=young-literai';

    } else {

      $category = '';

    }



    if (has_post_format('video')){

      $video            = get_field('archive:_video'); //Embed Code
      $video_url        = get_field('archive:_video', FALSE, FALSE); //URL
      $video_thumb_url  = get_video_thumbnail_uri($video_url); //get THumbnail via our functions in functions.php

      $format = 'video';
      $link   = $video_url;
      $class  = 'play popup-video';

    } elseif (has_post_format('audio')){

      $format = 'podcast';
      $link   =  get_field('archive_podcast');
      $class  = '';

    } elseif (has_post_format('gallery')){

      $format = 'gallery';
      $link   = 'video';
      $class  = '';

      $images          = get_field('archive_gallery');
      $image_1         = $images[0];
      $thumb_url       = $image_1[url];

    }

?>

<div <?php post_class('item desktop-4 tablet-3 mobile-3 newest sizer-item'); ?>>
  <div class="thumb">
    <div class="info">
      <a href="<?php echo $catlink; ?>" class="category"><?php echo $category; ?></a>
      <span class="format"><?php echo $format; ?></span>
    </div>
    <?php

      if(has_post_format('video')){

        if ( has_post_thumbnail() ) {
          the_post_thumbnail( 'footer-module-image', array( 'class' => 'img-responsive' ) );
        } else {
          echo '<img class="img-responsive" src=' . $video_thumb_url . '>';
        }

      } elseif (has_post_format('audio')){

        if ( has_post_thumbnail() ) {
          the_post_thumbnail( 'footer-module-image', array( 'class' => 'img-responsive' ) );
        } else {
          echo '<img class="img-responsive" src="/assets/img/play.jpg">';
        }

      } elseif (has_post_format('gallery')){

        ?>

        <?php $images = get_field('archive_gallery'); ?>
        <?php if( $images ): ?>
        <div class="event-gallery" itemscope itemtype="http://schema.org/ImageGallery">
        <?php $counter = 1; foreach( $images as $image ): ?>
        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="item_<?php echo $counter; ?>">
        <a href="<?php echo $image['url']; ?>" itemprop="contentUrl" data-size="<?php echo $image['width']; ?>x<?php echo $image['height']; ?>">
        <img src="<?php echo $image['sizes']['footer-module-image']; ?>" class="img-responsive" itemprop="thumbnail" alt="" />
        </a>
        </figure>
        <?php  $counter++; endforeach; ?>
        </div>
        <?php endif; ?>

        <?


      } ?>
  </div>
  <div class="meta newest">
    <div class="wrapper">
      <h3 class="title"><a href="<?php echo $link; ?>" class="<?php echo $class; ?>" target="blank"><?php the_title(); ?></a></h3>
      <span class="time"><?php the_time('F jS, Y') ?></span>
    </div>
  </div>
</div>

<?php endwhile; else : ?>
  <div class="desktop-12">
    <p>
      <?php

      if (isset($_GET['category'])) {

      _e( 'Sorry, no posts in that category.' );

      } elseif (isset($_GET['search'])) {

      _e( 'Sorry, no posts matched your search criteria.' );

      }
      ?>
    </p>
    <a href="/media-archive" class="button">Go Back to the Media Archive</a>
  </div>
<?php endif; ?>


</div>

<?php
  $wp_query = null;
  $wp_query = $temp;  // Reset
?>