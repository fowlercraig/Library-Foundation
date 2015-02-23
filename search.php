<?php Themewrangler::setup_page();get_header(); ?>

<?php if ( have_posts() ) : ?>
<div class="simple-header">
  <div class="row">
    <div class="desktop-12">
      <h1 class="page-header-title"><?php printf( __( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?></h1>
    </div>
  </div>
</div>
<?php endif; ?>

<div class="page-content">
  <div class="row">
    <div class="desktop-7">
      <?php while ( have_posts() ) : the_post(); ?>
      <div class="search-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
      <?php endwhile; ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>