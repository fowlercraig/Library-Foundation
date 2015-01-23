<?php Themewrangler::setup_page();get_header(); ?>

<?php 
  
  get_template_part('templates/single', 'header');
  get_template_part('templates/global/page', 'toolbar');
  get_template_part('templates/single', 'content');
  get_template_part('templates/flex', 'content');

?>

<?php get_footer(); ?>