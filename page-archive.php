<?php Themewrangler::setup_page();get_header(/***Template Name: Archive */); ?>

<?php 

  get_template_part('templates/page', 'header');
  get_template_part('templates/page', 'content');

  $archiveWidth  = 'desktop-2 contained';
  $videoWidth    = 'desktop-4 contained';

  $terms = get_field('category_menu');

?>

<div id="archive-bar" class="toolbar grid-filters">
  <div class="row">
    <nav class="desktop-10">
      <ul class="nav sf-menu">
        <li><button class="button active" data-filter="*">View All</button></li>
        <li><button class="button" data-filter=".video">Videos</button></li>
        <li><button class="button" data-filter=".audio">Podcasts</button></li>
        <li><button class="button" data-filter=".photo">Galleries</button></li>
        <li><button class="button" data-filter=".user">Speakers</button></li>
        <li><button class="button" data-filter=".ellipsischat">Quotes</button></li>
        <?php if( $terms ): ?>

        <li>
          <span class="button">Categories</span>
          <ul>
            <li><button class="button active" data-filter="*">View All</button></li>
            <?php foreach( $terms as $term ): ?>
            <li><button class="button" data-filter=".<?php echo 'category-';  echo strtolower($term->slug); ?>"><?php echo $term->name; ?></button></li>
            <?php endforeach; ?>
          </ul>
        </li>
        <?php endif; ?>
      </ul>
    </nav>
    <div class="desktop-2">
      <!--<input type="text" placeholder="Search" />-->
    </div>
  </div>
</div>

<div class="row">
<div id="archive-grid" class="sortable-grid desktop-12">
  
    <?php 

    $args = array(

      'post_type'      => array('people', 'archive'),
      'paged'          => $paged,
      'posts_per_page' => 40,
      'orderby'        => 'name'

    );

    $temp = $wp_query; 
    $wp_query = null; 
    $wp_query = new WP_Query(); 
    $wp_query->query($args); 

    while ($wp_query->have_posts()) : $wp_query->the_post(); 
    ?>

    <?php include locate_template('templates/archive/item.php' );?>

    <?php endwhile; ?>

    <nav style="height:0px; overflow: hidden"class="archive-nav item desktop-12 contained">
    <?php next_posts_link() ?>
    </nav>

    <?php 
    $wp_query = null; 
    $wp_query = $temp;  // Reset
    ?>
  </div>
</div>

<?php get_footer(); ?>