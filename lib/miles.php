<?php

//Was there a book ordered in an order
function book_ordered($order_id, $event_id = null) {
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
	
	foreach($items as $item) {
		$terms = get_the_terms( $item['product_id'], 'product_cat' );
		foreach ($terms as $term) {
			if(substr($term->slug,0,4) === "book") {
				if(in_array($item['product_id'], $related_products)) {
					$quantity += (int)$item['qty'];
				}
				$book_ordered = "Yes($quantity)";
				
			}
		}
	}
	return $book_ordered;
	
}
