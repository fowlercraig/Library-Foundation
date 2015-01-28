<?php Themewrangler::setup_page();get_header(); ?>

<?php 

  get_template_part('templates/page', 'header');
  get_template_part('templates/page', 'content');
  get_template_part('templates/flex', 'content');

  if (is_ancestor(250)) {
   get_template_part('templates/whatwefund/whatwefund', 'grid' );
  }

?>

<?php get_footer(); ?>