<?php Themewrangler::setup_page();get_header(); ?>


<?php if ( have_posts() ) : ?>
<header class="header">
<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?></h1>
</header>
<div id="results">
<?php while ( have_posts() ) : the_post(); ?>

<div class="search-item"><?php the_title(); ?></div>

<?php endwhile; ?>
</div>
<?php get_template_part( 'nav', 'below' ); ?>
<?php else : ?>
<article id="post-0" class="post no-results not-found">
<header class="header">
<h2 class="entry-title"><?php _e( 'Nothing Found', 'blankslate' ); ?></h2>
</header>
<section class="entry-content">
<p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></p>
<?php get_search_form(); ?>
</section>
</article>
<?php endif; ?>


<?php get_footer(); ?>