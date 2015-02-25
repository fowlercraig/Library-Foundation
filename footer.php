</div>
</div></section><!--Content-->

<?php get_template_part('templates/footer', 'modules' ); ?>

<footer id="foot" class="gridlock">
  <div class="row">
    <div class="desktop-3"><a class="logo" href="/"><?php bloginfo('name'); ?></a></div>
    <div class="desktop-3"><?php the_field('address', 'option'); ?></div>
    <div class="desktop-3"><?php the_field('phone_&_email', 'option'); ?></div>
    <div class="desktop-3"><?php the_field('social_links', 'option'); ?></div>
  </div>
</footer><!--Footer-->

</div><!-- Wrapper -->

<?php wp_footer(); ?>
<?php include locate_template('/lib/photoswipe.php' );?>
<?php include locate_template('/templates/search-footer.php' );?>
<script src="//use.typekit.net/kfw6qzi.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

</body>
</html>