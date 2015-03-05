<?php global $post; $terms = get_the_terms($post->ID, 'tribe_events_cat'); if( !empty($terms) ) { $term = array_pop($terms);?>

<div class="accordion page-section">
<div class="row">
<div class="desktop-12">
<h3 class="event-section-title">Frequently Asked Questions</h3>
<ul id="faq-accordion">

<?php while ( have_rows('frequently_asked_questions') ) : the_row(); ?>
  <li class="item">
    <a href="#tab" class="title"><?php the_sub_field('question'); ?></a>
    <div><?php the_sub_field('answer'); ?></div>
  </li>
<?php endwhile; ?>

<?php if ( !get_field('faq_options') ): ?>
<?php if( have_rows('faq', $term ) ): ?>


<?php while ( have_rows('faq', $term ) ) : the_row(); ?>
  <li class="item">
    <a href="#tab" class="title"><?php the_sub_field('question'); ?></a>
    <div><?php the_sub_field('answer'); ?></div>
  </li>
<?php endwhile;?>


<?php endif; ?>
<?php endif; } ?>

</ul>
</div>
</div>
</div>




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