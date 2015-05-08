<?php

//Was there a book ordered in an order
function book_ordered($order_id, $event_id = null, $show_titles = false) {
	global $wpdb;
	$book_ordered = "No";

	// Get ticket id for the event
	// Sample event id = 5817
	// need to query post_meta where key = _tribe_wooticket_for_event = 5817

	$ticket_query = "
		SELECT 		post_id
		FROM 		{$wpdb->prefix}postmeta
		WHERE		meta_key = '_tribe_wooticket_for_event'
		AND			meta_value = %d
	";

  	$ticket = $wpdb->get_row( $wpdb->prepare($ticket_query, $event_id), ARRAY_A );



	if(NULL !== $ticket) {
		//echo "<h1>Ticket: {$ticket['post_id']}";
		$ticket_id = $ticket['post_id'];
		$related_products = array();

		$book_query = "
			SELECT		meta_value
			FROM		{$wpdb->prefix}postmeta
			WHERE		meta_key = '_crosssell_ids'
			AND 		post_id = %d
		";
		$linked_products = $wpdb->get_var( $wpdb->prepare($book_query, $ticket_id) );
		if(NULL !== $linked_products) {
			$related_products = unserialize($linked_products);
		}
	} else {
		return "No";
	}



	$order = new WC_Order( $order_id );
	$items = $order->get_items();
	$quantity = 0;
	if (TRUE === $show_titles) {
		$books = array();
	}
	foreach($items as $item) {
		$terms = get_the_terms( $item['product_id'], 'product_cat' );
		foreach ($terms as $term) {
			if(substr($term->slug,0,4) === "book") {
				if(in_array($item['product_id'], $related_products)) {
					if (TRUE === $show_titles) {
						if(!isset($books[$item['name']])) {
							$books[$item['name']] = $item['qty'];
						} else {
							$books[$item['name']] += $$item['qty'];
						}
					} else {
						$quantity += $item['qty'];
					}
				}
				$book_ordered = "Yes($quantity)";

			}
		}
	}

	if(TRUE === $show_titles) {
		if(count($books) >0) {
			$book_ordered="";
			foreach($books as $title => $qty) {
				$book_ordered .= "$title ($qty), ";
			}
			$book_ordered = substr($book_ordered,0,-2);
		}
	}
	return $book_ordered;

}




/**
 * Only show donation if there is a row with the aloud-event shown in the shopping cart
**/
function wc_checkout_add_ons_conditionally_show_donation_add_on() {

    wc_enqueue_js( "
        if($('tr.aloud-event').length == 0) {
        	$( '#wc_checkout_add_ons_5_field' ).hide();
        }

    " );
}
add_action( 'wp_enqueue_scripts', 'wc_checkout_add_ons_conditionally_show_donation_add_on' );

add_action( 'manage_edit-tribe_events_columns', 'add_ticket_status_column', 10, 2 );
//add_filter( 'tribe_events_tickets_attendees_table_column', 'populate_my_custom_attendee_column', 10, 3 );

function add_ticket_status_column( $columns ) {
    $columns['ticket_sales'] = 'Ticket Sales';
    return $columns;
}

//add_filter( 'manage_tribe_events_page_tickets-attendees_columns', 'add_my_custom_attendee_column', 20 );
add_filter( 'edit-tribe_events_columns', 'populate_my_custom_event_column', 10, 3 );


function populate_my_custom_event_column( $existing, $item, $column, $order_id ) {


	switch($column) {
		case 'ticket_sales':
			return "1/10";
		default:
			return "55".$existing;
	}

	//return $existing;
}




/*
//add_action( 'manage_posts_custom_column' , 'custom_columns', 10, 2 );

function custom_columns( $column, $post_id ) {
    switch ( $column ) {
	case 'book_author' :
	    $terms = get_the_term_list( $post_id , 'book_author' , '' , ',' , '' );
            if ( is_string( $terms ) )
		    echo $terms;
		else
		    _e( 'Unable to get author(s)', 'your_text_domain' );
		break;

	case 'publisher' :
	    echo get_post_meta( $post_id , 'publisher' , true );
	    break;
    }
}
*/
