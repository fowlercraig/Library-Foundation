<?php $posts = get_field('people'); if( $posts ): ?>
<?php foreach( $posts as $p ): ?>
<?php include locate_template('templates/events/event-bio.php' ); ?>
<?php endforeach; ?>
<?php endif; ?>
