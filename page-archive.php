<?php Themewrangler::setup_page();get_header(/***Template Name: Archive */); ?>

<?php 

  get_template_part('templates/page', 'header');

  $archiveWidth  = 'desktop-2 contained';
  $videoWidth    = 'desktop-4 contained';

?>

<div id="archive-bar" class="toolbar grid-filters">
  <div class="row">
    <nav class="desktop-10">
      <button class="button active" data-filter="*">View All</button>
      <button class="button" data-filter=".video">Videos</button>
      <button class="button" data-filter=".podcast">Podcasts</button>
      <button class="button" data-filter=".gallery">Galleries</button>
      <button class="button" data-filter=".speaker">Speakers</button>
      <button class="button" data-filter=".quote">Quotes</button>
    </nav>
    <div class="desktop-2">
      <input type="text" placeholder="Search" />
    </div>
  </div>
</div>

<div id="archive-grid" class="sortable-grid gridlock-fluid">
  <div class="row">
    <?php 

    $args = array(

      'post_type' => array('people'),
      'paged'     => $paged,
      'posts_per_page' => 21,

    );

    $temp = $wp_query; 
    $wp_query = null; 
    $wp_query = new WP_Query(); 
    $wp_query->query($args); 

    while ($wp_query->have_posts()) : $wp_query->the_post(); 
    ?>

    <?php include locate_template('templates/archive/item.php' );?>

    <?php endwhile; ?>

    <nav>
    <?php previous_posts_link('&laquo; Newer') ?>
    <?php next_posts_link('Older &raquo;') ?>
    </nav>

    <?php 
    $wp_query = null; 
    $wp_query = $temp;  // Reset
    ?>
  </div>
</div>

<?php get_footer(); ?>