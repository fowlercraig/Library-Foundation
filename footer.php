</div>
</div></section><!--Content-->

<?php get_template_part('templates/footer', 'modules' ); ?>

<footer id="foot">
  <div class="row">
    <div class="desktop-3"><a class="logo" href="/"><?php bloginfo('name'); ?></a></div>
    <div class="desktop-3"><?php the_field('address', 'option'); ?></div>
    <div class="desktop-3"><?php the_field('phone_&_email', 'option'); ?></div>
    <div class="desktop-3"><?php the_field('social_links', 'option'); ?></div>
  </div>
</footer><!--Footer-->

</div><!-- Wrapper -->

<?php wp_footer(); ?>

</body>
</html>