<?php if( is_tax( 'tribe_events_cat', 'aloud' )): ?>

<div id="faq" class="accordion page-section">
  <div class="row">
    <div class="desktop-12">
      <h3 class="event-section-title">Frequently Asked Questions</h3>
      <ul id="faq-accordion">
        <?php while ( have_rows('aloud_faq','options') ) : the_row(); ?>
        <li class="item active">
          <a href="#tab" class="title"><?php the_sub_field('question'); ?></a>
          <div><?php the_sub_field('answer'); ?></div>
        </li>
        <?php endwhile; ?>
      </ul>
    </div>
  </div>
</div>

<?php endif; ?>


<?php

global $post;

// load all 'category' terms for the post
$terms = get_the_terms($post->ID, 'tribe_events_cat');
//var_dump($terms);

// we will use the first term to load ACF data from
if( !empty($terms) )
{
  $term = array_pop($terms);

  if( have_rows('faq', $term ) ):

    while ( have_rows('faq', $term ) ) : the_row();
      the_sub_field('question');
      the_sub_field('answer');
    endwhile;

  endif;

}

?>

<?php if( is_tax( 'tribe_events_cat', 'library-store-on-wheels' )): ?>

<div class="accordion page-section">
  <div class="row">
    <div class="desktop-12">
      <h3 class="event-section-title">Frequently Asked Questions</h3>
      <ul id="faq-accordion">
        <?php while ( have_rows('general_faq','options') ) : the_row(); ?>
        <li class="item active">
          <a href="#tab" class="title"><?php the_sub_field('question'); ?></a>
          <div><?php the_sub_field('answer'); ?></div>
        </li>
        <?php endwhile; ?>
      </ul>
    </div>
  </div>
</div>

<?php endif; ?>