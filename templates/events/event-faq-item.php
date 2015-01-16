<div id="question_<?php echo $counter; ?>" class="desktop-12 tablet-6 mobile-3 item">
  <!--<input id="ac-<?php echo $counter; ?>" name="accordion-1" type="checkbox" />-->
  <label for="ac-<?php echo $counter; ?>"><strong><?php the_sub_field('question'); ?></strong></label>
  <article class="ac-small">
    <?php the_sub_field('answer'); ?>
  </article>
</div>