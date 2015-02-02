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
    <?php include locate_template('templates/archive/item-video.php' ); ?>
    <?php include locate_template('templates/archive/item-video.php' ); ?>
    <div class="item podcast <?php echo $archiveWidth; ?>"><img class="img-responsive" src="http://lorempixel.com/output/abstract-q-c-640-640-3.jpg"></div>
    <div class="item podcast <?php echo $archiveWidth; ?>"><img class="img-responsive" src="http://lorempixel.com/output/abstract-q-c-640-640-3.jpg"></div>
    <div class="item video <?php echo $videoWidth;   ?>"><img class="img-responsive" src="http://lorempixel.com/output/abstract-q-c-640-320-4.jpg"></div>
    <div class="item speaker <?php echo $archiveWidth; ?>"><img class="img-responsive" src="http://lorempixel.com/output/abstract-q-c-640-640-3.jpg"></div>
    <div class="item speaker <?php echo $archiveWidth; ?>"><img class="img-responsive" src="http://lorempixel.com/output/abstract-q-c-640-640-3.jpg"></div>
    <div class="item video <?php echo $videoWidth;   ?>"><img class="img-responsive" src="http://lorempixel.com/output/abstract-q-c-640-320-4.jpg"></div>
    <div class="item gallery <?php echo $archiveWidth; ?>"><img class="img-responsive" src="http://lorempixel.com/output/abstract-q-c-640-640-3.jpg"></div>
    <div class="item gallery <?php echo $archiveWidth; ?>"><img class="img-responsive" src="http://lorempixel.com/output/abstract-q-c-640-640-3.jpg"></div>
  </div>
</div>

<?php get_footer(); ?>