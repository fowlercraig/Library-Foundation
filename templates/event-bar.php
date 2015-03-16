<?php 

  if( have_rows('related_ticket_groups') ) {

    $ticketStatus = '<a id="event-status-button" href="#things" class="button jumpdown">RSVP for this Event</a>';

   } else {

    if( tribe_get_end_date( null, false, 'Y-m-d H:i:s' ) < date( 'Y-m-d H:i:s' )) {

      $ticketStatus = '<a id="event-status-button"  href="#" class="button disabled">This Event Has Passed</a>';

    } else {

      if(tribe_events_has_tickets()){

        if ( ! post_password_required() ) {

        $ticketStatus = '<a id="event-status-button"  href="#tickets-form" class="button enabled">RSVP for this Event</a>';

        } else {

        $ticketStatus = '<a id="event-status-button"  href="#tickets-form" class="button enabled">Members Only</a>';

        }

      }

      if(tribe_events_has_soldout()){

        $soldoutimage = 'http://i.imgur.com/znE1JTm.png';
        $ticketStatus = '<a id="event-status-button"  href="'.$soldoutimage.'" class="button closed">Full/Standby</a>'; ?>

        <script>
          $(window).load(function(){
            setTimeout(function(){
              $.magnificPopup.open({
                items: {
                  src: '<?php echo $soldoutimage; ?>'
                },
                mainClass: 'mfp-fade',
                type: 'image'
              });
            }, 0);
          });
        </script>

      <?php }

    }

  }

?>


<div id="event-bar" class="toolbar">
  <div class="row">
    <nav class="desktop-8 tablet-6 mobile-3">
      <?php echo $ticketStatus; ?>
      <a id="event-calenar-button" href="<?php echo sp_get_single_ical_link(); ?>" class="button">Add to Calendar</a>
    </nav>
    <nav class="desktop-4 tablet-6 mobile-3 text-right">
      <?php include locate_template('templates/share.php' );?>
      <a href="#faq" class="button">FAQ</a>
      <!--<a href="#reservation-policy" class="button">Reservation Policy</a>-->
    </nav>
  </div>
</div>


<div id="tickets-form" class="mfp-hide white-popup-block modal-window">
  <?php if( have_rows('related_ticket_groups') ){} else {?>
  <?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>
  <?php }?>
</div>