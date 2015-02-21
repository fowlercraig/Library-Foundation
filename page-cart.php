<?php Themewrangler::setup_page();get_header(/***Template Name: Woo Simple */); ?>

<?php 

  get_template_part('templates/cart', 'header');
  get_template_part('templates/cart', 'content');

?>

<?php $verbiage = '<small>The Library Foundation does not rent or sell its donor mailing list, but sometimes we exchange names and postal addresses with other nonprofit organizations whose information we believe may be of interest t our members. Exchanging our list with other reputable charitable organizations is the most cost effective way to find new supporters. We hope you agree. The option is yours.</small>'; ?>

<script>
  $('#myfield27_field label').append('<?php echo $verbiage; ?>');
</script>

<?php get_footer(); ?>